<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');

        $measurements = collect([
            [
              'title' => "Chest",
              'small' => 48,
              'medium' => 51,
              'large' => 55,
              'extraLarge' => 61,
              'doubleXL' => 65,
              'tripleXL' => 70.5,
            ],
            [
              'title' => "Shoulders",
              'small' => 40,
              'medium' => 42,
              'large' => 43.5,
              'extraLarge' => 48,
              'doubleXL' => 48,
              'tripleXL' => 51,
            ],
            [
              'title' => "Hips",
              'small' => 47.5,
              'medium' => 49.5,
              'large' => 55.5,
              'extraLarge' => 60,
              'doubleXL' => 64,
              'tripleXL' => 69,
            ],
            [
              'title' => "Back length",
              'small' => 71,
              'medium' => 71,
              'large' => 73.5,
              'extraLarge' => 74,
              'doubleXL' => 77,
              'tripleXL' => 79,
            ],
            [
              'title' => "Sleeve length",
              'small' => 22,
              'medium' => 22.5,
              'large' => 24,
              'extraLarge' => 25.5,
              'doubleXL' => 28,
              'tripleXL' => 29,
            ],
        ]);
        
        $conversions = collect([
            [
                'uk' => 'S',
                'de' => '44-46',
                'fr' => '44-46',
                'it' => '46',
                'es' => '46',
                'us' => 'S',
            ],
            [
                'uk' => 'M',
                'de' => '48-50',
                'fr' => '48-50',
                'it' => '50',
                'es' => '50',
                'us' => 'M',
            ],
            [
                'uk' => 'L',
                'de' => '52-54',
                'fr' => '52-54',
                'it' => '54',
                'es' => '54',
                'us' => 'L',
            ],
            [
                'uk' => 'XL',
                'de' => '56-58',
                'fr' => '56-58',
                'it' => '58',
                'es' => '58',
                'us' => 'XL',
            ],
            [
                'uk' => 'XXL',
                'de' => '60-62',
                'fr' => '60-62',
                'it' => '62',
                'es' => '62',
                'us' => 'XXL',
            ],
            [
                'uk' => '3XL',
                'de' => '64-66',
                'fr' => '64-66',
                'it' => '66',
                'es' => '66',
                'us' => '3XL',
            ],
        ]);

        $sizeData = collect([
            [
              'size' => "S",
              'enabled' => true,
            ],
            [
              'size' => "M",
              'enabled' => true,
            ],
            [
              'size' => "L",
              'enabled' => true,
            ],
            [
              'size' => "XL",
              'enabled' => true,
            ],
            [
              'size' => "XXL",
              'enabled' => true,
            ],
            [
              'size' => "3XL",
              'enabled' => true,
            ],
          ]);
        
        $this->data['categories'] = Category::parentCategories()
            ->orderBy('name', 'DESC')
            ->get();
        $this->data['brands'] = Brand::orderBy('id', 'DESC')->get();
        $this->data['measurements'] = $measurements;
        $this->data['conversions'] = $conversions;
        $this->data['sizeData'] = $sizeData;
    }
    //
    public function index()
    {
        $featured_products = Product::where('status', 'active')->paginate(10);
        $this->data['products'] = $featured_products;
        
        return $this->loadShop('home', $this->data);
    }

    public function category($slug = 'shirt')
    {
        if (Category::where('slug', $slug)->exists()) {
            $category = Category::where('slug', $slug)->first();
            $products = Product::where('category_id', $category->id)->where('status', 'active')->paginate(12);
        } else {
            return redirect('/')->with('status', "slug doesn exists");
        }
        
        $this->data['category'] = $category;
        $this->data['products'] = $products;

        return $this->loadShop('product.index', $this->data);
    }

    public function detail($slug)
    {
        $limit = 8;
        $products = Product::active()->limit($limit)->get();
        $product = Product::active()->where('slug', $slug)->first();

        if (!$product) {
          return redirect('products');
        }

        $this->data['product'] = $product;
        $this->data['products'] = $products;
        // build breadcrumb data array
        $breadcrumbs_data['current_page_title'] = $product->name;
        $breadcrumbs_data['breadcrumbs_array'] = $this->_generate_breadcrumbs_array($product->id);
        $this->data['breadcrumbs_data'] = $breadcrumbs_data;

        $this->data['slug'] = $slug;
        return $this->loadShop('product.detail', $this->data);
    }

    public function _generate_breadcrumbs_array($id) {
      $product = Product::findOrFail($id);
      $category = $product->category->name;

      $homepage_url = url('/shop');
      $breadcrumbs_array[$homepage_url] = 'Home';
      
      // get sub cat title
      $sub_cat_title = $category; //'Products';
      // get sub cat url
      $sub_cat_url = url('shop/all');
    
      $breadcrumbs_array[$sub_cat_url] = $sub_cat_title;
      return $breadcrumbs_array;
	  }

    public function productDetail($slug)
    {
        
    }
}
