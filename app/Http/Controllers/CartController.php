<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductInventory;
use Illuminate\Support\Facades\Session; 
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    /**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		// parent::__construct();
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = \Cart::getContent();

        // var_dump($items); exit;
		$this->data['items'] =  $items;

		return $this->loadShop('cart.index', $this->data);
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
        // var_dump($params);exit;
		
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

		$itemQuantity =  $this->_getItemQuantity(md5($product->id)) + $params['qty'];
		$this->_checkProductInventory($product, $itemQuantity);
		
		$item = [
			'id' => md5($product->id),
			'name' => $product->name,
			'price' => $product->price,
			'quantity' => $params['qty'],
			'attributes' => $attributes,
			'associatedModel' => $product,
		];

		\Cart::add($item);

		Session::flash('success', 'Product '. $item['name'] .' has been added to cart');
		return redirect('/product/'. $slug);
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
	 * Get total quantity per item in the cart
	 *
	 * @param string $itemId item ID
	 *
	 * @return int
	 */
	private function _getItemQuantity($itemId)
	{
		$items = \Cart::getContent();
		$itemQuantity = 0;
		if ($items) {
			foreach ($items as $item) {
				if ($item->id == $itemId) {
					$itemQuantity = $item->quantity;
					break;
				}
			}
		}

		return $itemQuantity;
	}

	/**
	 * Check product inventory
	 *
	 * @param Product $product      product object
	 * @param int     $itemQuantity qty
	 *
	 * @return int
	 */
	private function _checkProductInventory($product, $itemQuantity)
	{
		if ($product->productInventory->qty < $itemQuantity) {
			throw new \App\Exceptions\OutOfStockException('The product '. $product->sku .' is out of stock');
		}
	}

	/**
	 * Get cart item by card item id
	 *
	 * @param string $cartID cart ID
	 *
	 * @return array
	 */
	private function _getCartItem($cartID)
	{
		$items = \Cart::getContent();

		return $items[$cartID];
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
        \Cart::remove($id);

		return redirect('carts');
    }
}
