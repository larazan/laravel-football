<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
        $this->data['categories'] = Category::parentCategories()
			->orderBy('name', 'DESC')
			->get();
    }
    //
    public function index()
    {
        $featured_products = Product::where('trending', '1')->take(15)->get();
        $this->data['products'] = $featured_products;
        
        return $this->loadShop('home', $this->data);
    }

    public function category($slug)
    {
        if (Category::where('slug', $slug)->exists()) {
            $category = Category::where('slug', $slug)->first();
            $products = Product::where('category_id', $category->id)->where('status', '0')->get();
        } else {
            return redirect('/')->with('status', "slug doesn exists");
        }
        
        $this->data['category'] = $category;
        $this->data['products'] = $products;

        return $this->loadShop('category', $this->data);
    }

    public function productDetail($slug)
    {
        
    }
}
