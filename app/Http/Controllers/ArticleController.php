<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct()
	{
		$shareComponent = \Share::page(
            'https://www.positronx.io/create-autocomplete-search-in-laravel-with-typeahead-js/',
            'Your share text comes here',
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()        
        ->reddit();

		$this->data['shareComponent'] = $shareComponent;
	}
    
    public function index(Request $request)
	{
		$first = Article::active()->first();
		$articles = Article::active()->where('id', '!=', $first->id)->orderBy('created_at', 'DESC');

		// build breadcrumb data array
		$breadcrumbs_data['current_page_title'] = '';
		$breadcrumbs_data['breadcrumbs_array'] = $this->_generate_breadcrumbs_array($articles);
		$this->data['breadcrumbs_data'] = $breadcrumbs_data;

		$this->data['first'] = $first;
		$this->data['articles'] = $articles->paginate(4);
		return $this->loadTheme('news.index', $this->data);
    }
    
    public function show($slug)
	{
		$article = Article::active()->where('slug', $slug)->first();

		if (!$article) {
			return redirect('news');
		}

		$this->data['article'] = $article;

		$limit = 6;
        $this->data['articles'] = Article::active()->where('slug', '!=', $slug)->orderBy('id', 'DESC')->limit($limit)->get();

		$tags = $article->article_tags;
        if($tags)
        {
            $arrTags = explode(',', $article->article_tags);
        } else {
            $arrTags = $tags;
        }
		$this->data['tags'] = $arrTags;

		// build breadcrumb data array
		$breadcrumbs_data['current_page_title'] = $article->title;
		$breadcrumbs_data['breadcrumbs_array'] = $this->_generate_breadcrumbs_array($article->id);
		$this->data['breadcrumbs_data'] = $breadcrumbs_data;

		return $this->loadTheme('news.detail', $this->data);
    }

	public function showByTag($tag)
    {
		$first = Article::active()->where('article_tags', 'like', "%{$tag}%")->first();
        $articles = Article::active()->where('article_tags', 'like', "%{$tag}%")->where('id', '!=', $first->id)->orderBy('created_at', 'DESC');

		// build breadcrumb data array
		$breadcrumbs_data['current_page_title'] = '';
		$breadcrumbs_data['breadcrumbs_array'] = $this->_generate_breadcrumbs_array($articles);
		$this->data['breadcrumbs_data'] = $breadcrumbs_data;

		$this->data['first'] = $first;
        $this->data['articles'] = $articles->paginate(4);
        $this->data['tag'] = $tag;
		return $this->loadTheme('news.index', $this->data);
    }
    
    public function _generate_breadcrumbs_array($id) {
		// $homepage_url = url('/');
		// $breadcrumbs_array[$homepage_url] = 'Home';
		
		// get sub cat title
		$sub_cat_title = 'News';
		// get sub cat url
		$sub_cat_url = url('news');
	
		$breadcrumbs_array[$sub_cat_url] = $sub_cat_title;
		return $breadcrumbs_array;
	}
}
