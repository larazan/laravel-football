<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Wishlist;
use Darryldecode\Cart\Cart as CartCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlist = Wishlist::where('user_id', Auth::id())->get();

        return $this->loadShop('wishlist.index', compact('wishlist'));
    }

    public function add(Request $request)
    {
        if (Auth::check()) {
            $prod_id = $request->input('product_id');
            if (Product::find($prod_id)) {
                $wish = new Wishlist();
                $wish->prod_id = $prod_id;
                $wish->user_id = Auth::id();
                $wish->save();
                return response()->json(['status' => "Product Added to Wishlist"]);
            } else {
                return response()->json(['status' => "Product doesnt exist"]);
            }
        } else {
            return response()->json(['status' => "Login to continue"]);
        }
    }

    public function deleteItem(Request $request)
    {
        if (Auth::check()) {
            $prod_id = $request->input('prod_id');
            if (Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->exists()) {
                $wish = Cart::where('prod_id', $prod_id)->where('user_id', Auth::id())->first();
                $wish->delete();
                return response()->json(['status' => "Item removed successfully"]);
            } 
        } else {
            return response()->json(['status' => "Login to continue"]);
        }
    }
}
