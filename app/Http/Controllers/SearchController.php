<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function index(Request $request)
    {
        // validate 4 character
        $this->validate($request, [
            'search' => 'required|min:4'
        ]);

        $search = $request->input('search');
        $products = Product::selectRaw('id, title, slug')
                    ->orderBy('id', 'asc')
                    ->where('title', 'like', "%$search%")
                    ->get();

        $this->data['search'] = $search;
        $this->data['products'] = $products;
        return $this->loadShop('search.index', $this->data);
    }

    public function search(Request $request)
    {
        // validate 4 character
        $this->validate($request, [
            'search' => 'required|min:4'
        ]);

        $search = $request->input('search');
        $articles = Article::selectRaw('id, title, slug')
                    ->orderBy('id', 'asc')
                    ->where('title', 'like', "%$search%")
                    ->get();

        $this->data['search'] = $search;
        $this->data['articles'] = $articles;
        return $this->loadTheme('search.index', $this->data);
    }
}
