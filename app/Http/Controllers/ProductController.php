<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductAttributeValue;
use App\Models\AttributeOption;
use App\Models\Category;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    //
    /**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();

		$this->data['q'] = null;

		$this->data['brands'] = Brand::orderBy('id', 'DESC')->get();

		$this->data['categories'] = Category::parentCategories()
			->orderBy('name', 'DESC')
			->get();
		
		$this->data['minPrice'] = Product::min('price');
		$this->data['maxPrice'] = Product::max('price');

		$this->data['colors'] = AttributeOption::whereHas(
			'attribute',
			function ($query) {
					$query->where('code', 'color')
						->where('is_filterable', 1);
			}
		)
		->orderBy('name', 'DESC')->get();

		$this->data['sizes'] = AttributeOption::whereHas(
			'attribute',
			function ($query) {
				$query->where('code', 'size')
					->where('is_filterable', 1);
			}
		)->orderBy('name', 'DESC')->get();
								
		$this->data['sorts'] = [
			url('products') => 'Default',
			url('products?sort=price-DESC') => 'Price - Low to High',
			url('products?sort=price-desc') => 'Price - High to Low',
			url('products?sort=created_at-desc') => 'Newest to Oldest',
			url('products?sort=created_at-DESC') => 'Oldest to Newest',
		];

		$this->data['selectedSort'] = url('products');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @param Request $request request param
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		$products = Product::active()->orderBy('id', 'DESC');

		$products = $this->_searchProducts($products, $request);
		$products = $this->_filterProductsByPriceRange($products, $request);
		$products = $this->_filterProductsByAttribute($products, $request);
		$products = $this->_sortProducts($products, $request);

		// build breadcrumb data array
		$breadcrumbs_data['current_page_title'] = '';
		$breadcrumbs_data['breadcrumbs_array'] = $this->_generate_breadcrumbs_array($products);
		$this->data['breadcrumbs_data'] = $breadcrumbs_data;

		$this->data['products'] = $products->paginate(9);
		return $this->loadTheme('products.index', $this->data);
	}

	/**
	 * Search products
	 *
	 * @param array   $products array of products
	 * @param Request $request  request param
	 *
	 * @return \Illuminate\Http\Response
	 */
	private function _searchProducts($products, $request)
	{
		if ($q = $request->query('q')) {
			$q = str_replace('-', ' ', Str::slug($q));
			
			$products = Product::whereRaw('MATCH(name, slug, short_description, description) AGAINST (? IN NATURAL LANGUAGE MODE)', [$q]);

			$this->data['q'] = $q;
		}

		if ($categorySlug = $request->query('category')) {
			$category = Category::where('slug', $categorySlug)->firstOrFail();

			$childIds = Category::childIds($category->id);
			$categoryIds = array_merge([$category->id], $childIds);

			$products = $products->whereHas(
				'categories',
				function ($query) use ($categoryIds) {
					$query->whereIn('categories.id', $categoryIds);
				}
			);
		}

		if ($brandSlug = $request->query('brand')) {
			$brand = Brand::where('slug', $brandSlug)->firstOrFail();

			$brandId = $brand->id;

			$products = $products->whereHas(
				'brands',
				function ($query) use ($brandId) {
					$query->where('brands.id', $brandId);
				}
			);
		}

		return $products;
	}

	/**
	 * Filter products by price range
	 *
	 * @param array   $products array of products
	 * @param Request $request  request param
	 *
	 * @return \Illuminate\Http\Response
	 */
	private function _filterProductsByPriceRange($products, $request)
	{
		$lowPrice = null;
		$highPrice = null;

		if ($priceSlider = $request->query('price')) {
			$prices = explode('-', $priceSlider);

			$lowPrice = !empty($prices[0]) ? (float)$prices[0] : $this->data['minPrice'];
			$highPrice = !empty($prices[1]) ? (float)$prices[1] : $this->data['maxPrice'];

			if ($lowPrice && $highPrice) {
				$products = Product::where('price', '>=', $lowPrice)
					->where('price', '<=', $highPrice)
					->orWhereHas(
						'variants',
						function ($query) use ($lowPrice, $highPrice) {
							$query->where('price', '>=', $lowPrice)
								->where('price', '<=', $highPrice);
						}
					);

				$this->data['minPrice'] = $lowPrice;
				$this->data['maxPrice'] = $highPrice;
			}
		}

		return $products;
	}

	/**
	 * Filter products by attribute
	 *
	 * @param array   $products array of products
	 * @param Request $request  request param
	 *
	 * @return \Illuminate\Http\Response
	 */
	private function _filterProductsByAttribute($products, $request)
	{
		if ($attributeOptionID = $request->query('option')) {
			$attributeOption = AttributeOption::findOrFail($attributeOptionID);

			$products = Product::whereHas(
				'ProductAttributeValues',
				function ($query) use ($attributeOption) {
					$query->where('attribute_id', $attributeOption->attribute_id)
						->where('text_value', $attributeOption->name);
				}
			);
		}

		return $products;
	}

	/**
	 * Sort products
	 *
	 * @param array   $products array of products
	 * @param Request $request  request param
	 *
	 * @return \Illuminate\Http\Response
	 */
	private function _sortProducts($products, $request)
	{
		if ($sort = preg_replace('/\s+/', '', $request->query('sort'))) {
			$availableSorts = ['price', 'created_at'];
			$availableOrder = ['DESC', 'desc'];
			$sortAndOrder = explode('-', $sort);

			$sortBy = strtolower($sortAndOrder[0]);
			$orderBy = strtolower($sortAndOrder[1]);

			if (in_array($sortBy, $availableSorts) && in_array($orderBy, $availableOrder)) {
				$products = Product::orderBy($sortBy, $orderBy);
			}

			$this->data['selectedSort'] = url('products?sort='. $sort);
		}
		
		return $products;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param string $slug product slug
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function show($slug)
	{
		$limit = 3;
		$products = Product::active()->limit($limit)->get();
		$product = Product::active()->where('slug', $slug)->first();

		if (!$product) {
			return redirect('products');
		}

		if ($product->configurable()) {
			$this->data['colors'] = ProductAttributeValue::getAttributeOptions($product, 'color')->pluck('text_value', 'text_value');
			$this->data['sizes'] = ProductAttributeValue::getAttributeOptions($product, 'size')->pluck('text_value', 'text_value');
		}

		$this->data['product'] = $product;
		$this->data['products'] = $products;
		// build breadcrumb data array
		$breadcrumbs_data['current_page_title'] = $product->name;
		$breadcrumbs_data['breadcrumbs_array'] = $this->_generate_breadcrumbs_array($product->id);
		$this->data['breadcrumbs_data'] = $breadcrumbs_data;

		return $this->loadTheme('products.show', $this->data);
	}

	public function _generate_breadcrumbs_array($id) {
		$homepage_url = url('/shop');
		$breadcrumbs_array[$homepage_url] = 'Home';
		
		// get sub cat title
		$sub_cat_title = 'Products';
		// get sub cat url
		$sub_cat_url = url('/shop/all');
	
		$breadcrumbs_array[$sub_cat_url] = $sub_cat_title;
		return $breadcrumbs_array;
	}

	/**
	 * Quick view product.
	 *
	 * @param string $slug product slug
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function quickView($slug)
	{
		$product = Product::active()->where('slug', $slug)->firstOrFail();
		if ($product->configurable()) {
			$this->data['colors'] = ProductAttributeValue::getAttributeOptions($product, 'color')->pluck('text_value', 'text_value');
			$this->data['sizes'] = ProductAttributeValue::getAttributeOptions($product, 'size')->pluck('text_value', 'text_value');
		}

		$this->data['product'] = $product;
		
		return $this->loadTheme('products.quick_view', $this->data);
	}
}
