<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Media;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
	{
		// parent::__construct();

		// $limit = 5;
        // $this->data['medias'] = Media::active()->orderBy('id', 'DESC')->limit($limit)->get();
	}
    
    public function index(Request $request)
	{
		$medias = Article::active()->orderBy('created_at', 'DESC')->paginate();

		// build breadcrumb data array
		$breadcrumbs_data['current_page_title'] = '';
		$breadcrumbs_data['breadcrumbs_array'] = $this->_generate_breadcrumbs_array($medias);
		$this->data['breadcrumbs_data'] = $breadcrumbs_data;

		$this->data['medias'] = $medias;
		return $this->loadTheme('media.index', $this->data);
    }
    
    public function show($slug)
	{
		$media = Media::active()->where('slug', $slug)->first();

		if (!$media) {
			return redirect('media');
		}

		$this->data['media'] = $media;

		$limit = 5;
        $this->data['medias'] = Media::active()->where('slug', '!=', $slug)->orderBy('id', 'DESC')->limit($limit)->get();

		// build breadcrumb data array
		$breadcrumbs_data['current_page_title'] = $media->title;
		$breadcrumbs_data['breadcrumbs_array'] = $this->_generate_breadcrumbs_array($media->id);
		$this->data['breadcrumbs_data'] = $breadcrumbs_data;

		return $this->loadTheme('media.detail', $this->data);
    }
    
    public function _generate_breadcrumbs_array($id) {
		// $homepage_url = url('/');
		// $breadcrumbs_array[$homepage_url] = 'Home';
		
		// get sub cat title
		$sub_cat_title = 'Media';
		// get sub cat url
		$sub_cat_url = url('media');
	
		$breadcrumbs_array[$sub_cat_url] = $sub_cat_title;
		return $breadcrumbs_array;
	}
}
