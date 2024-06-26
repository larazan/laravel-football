<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Order;
use App\Models\ProductInventory;
use App\Models\Basket;
use App\Helpers\General;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session; 
use App\Exceptions\OutOfStockException;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BasketController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $items = \Cart::getContent();
		// $items = Basket::where('user_id', Auth::user()->id)->whereNull('deleted_at')->get();
		// dd($items);
        // var_dump($items); exit;
		$this->data['items'] =  '';

		return $this->loadTheme('carts.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $params = $request->except('_token');
		
		$product = Product::findOrFail($params['product_id']);
		$slug = $product->slug;

        $attributes = [];
		if ($product->configurable()) {
			$product = Product::from('products as p')
				->whereRaw(
					"p.parent_id = :parent_product_id
				and (select pav.text_value 
						from product_attribute_values pav
						join attributes a on a.id = pav.attribute_id
						where a.code = :size_code
						and pav.product_id = p.id
						limit 1
					) = :size_value
				and (select pav.text_value 
						from product_attribute_values pav
						join attributes a on a.id = pav.attribute_id
						where a.code = :color_code
						and pav.product_id = p.id
						limit 1
					) = :color_value
					",
					[
						'parent_product_id' => $product->id,
						'size_code' => 'size',
						'size_value' => $params['size'],
						'color_code' => 'color',
						'color_value' => $params['color'],
					]
				)->firstOrFail();

			$attributes['size'] = $params['size'];
			$attributes['color'] = $params['color'];
		}

		$this->_checkProductInventory($product, $params['qty']);
		
		$item = [
			'id' => md5($product->id),
			'name' => $product->name,
			'price' => $product->price,
			'quantity' => $params['qty'],
			'attributes' => $attributes,
			'associatedModel' => $product,
		];

        if (Basket::create($item)) {
            Session::flash('success', 'Product '. $item['name'] .' has been added to cart');
        } else {
            Session::flash('error', 'Product '. $item['name'] .' couldnt been added to cart');
        }
        
		return redirect('/product/'. $slug);
    }

	public function addCart(Request $request)
	{
		$cek_basket = Basket::where('product_id', $request->product_id)
								->where('user_id', Auth::user()->id )
								->whereNull('deleted_at')
								->first();

		$cek_toko   = Product::where('id', $request->product_id)->first();

		if ($cek_toko->user_id == Auth::user()->id) {
			$responseCode = 304;
			$responseData['status'] = false;
			$responseData['message'] = 'Yaahh.. sayang sekali, anda tidak bisa membeli produk dari toko anda !';
		} else {
			DB::beginTransaction();
			if ($cek_basket) {
				$cek_basket->qty = $cek_basket->qty + $request->qty;
				$cek_basket->save();
				$responseCode = 200;
				$responseData['status'] = true;
				$responseData['message'] = 'Yeaah.. berhasil menambahkan jumlah produk !';

				DB::commit();
			} else {
				$data = new Basket;
				$data->product_id = $request->product_id;
				$data->price = $request->price;
				$data->user_id = Auth::user()->id;
				$data->qty = $request->qty;
				$data->is_checked = 1;

				$data->save();
				$responseCode = 200;
				$responseData['status'] = true;
				$responseData['message'] = 'Yeaah.. Berhasil menambahkan produk ke keranjang !';

				DB::commit();
			}
		}
		
		$response = General::helpResponse($responseCode, $responseData);
		return response()->json($response);
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $params = $request->except('_token');

		if ($items = $params['items']) {
			foreach ($items as $cartID => $item) {
				$cartItem = $this->_getCartItem($cartID);
				$this->_checkProductInventory($cartItem->associatedModel, $item['quantity']);

				\Cart::update(
					$cartID,
					[
						'quantity' => [
							'relative' => false,
							'value' => $item['quantity'],
						],
					]
				);
			}

			Session::flash('success', 'The cart has been updated');
			return redirect('carts');
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

	public function listProduk(Request $reqest)
	{
		$items = Basket::select(DB::raw("baskets.product_id, 
										baskets.id as id_basket,
										baskets.user_id, 
										baskets.qty, 
										baskets.is_checked, 
										products.name,
										products.price,
										product_images.small as gambar, 
										shops.name as nama_toko
										"))
							->where('baskets.user_id', Auth::user()->id)
							->leftJoin('products', 'products.id', '=', 'baskets.product_id' )
							->leftJoin('product_brands', 'product_brands.product_id', '=', 'products.id')
							->leftJoin('product_categories', 'product_categories.product_id', '=', 'products.id')
							->leftJoin('categories', 'categories.id', '=', 'product_categories.category_id')
							->leftJoin('brands', 'brands.id', '=', 'product_brands.brand_id')
							->leftJoin('shops', 'shops.user_id', '=', 'products.user_id')
							->leftJoin(DB::raw('(SELECT MAX(id) as max_id, product_id FROM product_images GROUP BY product_id  )
								img'), 
							function($join)
							{
							$join->on('products.id', '=', 'img.product_id');
							})
							->join('product_images', 'product_images.id', 'img.max_id')
							->whereNull('baskets.deleted_at')
							->get();
		$responseData['produk'] = $items;
		$responseCode = 200;

		$response = General::helpResponse($responseCode, $responseData);
		return response()->json($response, $responseCode);
	}

	public function deleteList(Request $request)
	{
		$baskets = Basket::findOrFail($request->id);

		DB::beginTransaction();
		try {
			$baskets->delete();
			DB::commit();
			$responseCode = 200;
			$responseData['status'] = true;
			$responseData['message'] = 'Yeaah.. berhasil mengeluarkan produk dari keranjang !';
        } catch (Exception $e) {
            DB::rollBack();
            $responseCode = 304;
			$responseData['status'] = false;
			$responseData['message'] = 'Gagal mengeluarkan produk dari keranjang !';
        }

		$response = General::helpResponse($responseCode, $responseData);
		return response()->json($response, $responseCode);
	}

	public function editQty(Request $request)
	{
		$baskets = Basket::findOrFail($request->id);

		DB::beginTransaction();
		try {
			$baskets->qty = $request->qty;
			$baskets->save();
			DB::commit();
			$responseCode = 200;
			$responseData['status'] = true;
			$responseData['message'] = 'Yeaah.. berhasil mengupdate jumlah barang !';
        } catch (Exception $e) {
            DB::rollBack();
            $responseCode = 304;
			$responseData['status'] = false;
			$responseData['message'] = 'Gagal mengupdate jumlah barang !';
        }

		$response = General::helpResponse($responseCode, $responseData);
		return response()->json($response, $responseCode);
	}

	public function cekShop(Request $request)
	{
		$basket_cek = Basket::where('user_id', Auth::user()->id)
								->where('is_checked', 1)
								->limit(1)
								->whereNull('deleted_at')
								->first();
		$produk_basket =  Product::where('id', $basket_cek->product_id)->first();
		$produk = Product::where('id', $request->id_produk)->first();
		$baskets = Basket::findOrFail($request->id);
		DB::beginTransaction();
		if ($produk->shop_id == $produk_basket->shop_id ) {
			try {
				$baskets->is_checked = 1;
				$baskets->save();
				DB::commit();
				$responseCode = 200;
				$responseData['status'] = true;
				$responseData['message'] = 'Yeaah.. berhasil mengupdate keranjang !';
			} catch (Exception $e) {
				DB::rollBack();
				$responseCode = 304;
				$responseData['status'] = false;
				$responseData['message'] = 'Gagal mengeluarkan mengupdate keranjang !';
			}
		}else{
			$del_baskets = Basket::where('user_id', Auth::user()->id)->whereNull('deleted_at')->get();
			try {
				foreach ($del_baskets as $value) {
					$data_baskets = Basket::findOrFail($value->id);
					$data_baskets->is_checked = null;
					$data_baskets->save();
				}
				
				$baskets->is_checked = 1;

				$baskets->save();
				DB::commit();
				$responseCode = 200;
				$responseData['status'] = true;
				$responseData['message'] = 'Yeaah.. berhasil mengupdate keranjang !';
			} catch (Exception $e) {
				DB::rollBack();
				$responseCode = 304;
				$responseData['status'] = false;
				$responseData['message'] = 'Upps.. gagal mengupdate keranjang !';
			}
		}

		$response = General::helpResponse($responseCode, $responseData);
		return response()->json($response, $responseCode);
	}
}
