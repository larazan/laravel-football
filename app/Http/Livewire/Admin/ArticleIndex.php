<?php

namespace App\Http\Livewire\Admin;

use App\Models\Article;
use App\Models\CategoryArticle;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Http\Livewire\Trix;

class ArticleIndex extends Component
{
    use WithFileUploads, WithPagination;

    public $showArticleModal = false;
    public $categoryItem;
    public $showInput = false;
    public $showMessage = false;
    public $trixId;
    public $title;
    public $body;
    public $status;
    public $articleId;
    public $articleTags = [];
    public $categoryId;
    public $file;
    public $author;
    public $url;
    public $embedUrl;
    public $publishedAt;
    public $oldImage;
    public $metaTitle;
    public $metaDesc;
    public $articleStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 10;

    public $showConfirmModal = false;
    public $deleteId = '';

    protected $listeners = [
        Trix::EVENT_VALUE_UPDATED
    ];

    protected $rules = [
        'title' => 'required|min:3',
        // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function mount()
    {
        $this->publishedAt = today()->format('Y-m-d');
        $this->trixId = 'trix-' . uniqid();
        $this->articleTags = ['sss', 'vvv'];
    }

    public function openInput()
    {
        $this->showInput = true;
    }

    public function categoryAdd()
    {
        $this->validate(
            [
                'categoryItem' => 'required|string' 
            ]
        );

        $category = new CategoryArticle();
        $category->name = $this->categoryItem;
        $category->slug = Str::slug($this->categoryItem);
            
        if ($category->save()) {
            $this->showMessage = true;
        }

        $this->showInput = false;
    }

    public function trix_value_updated($value)
    {
        $this->body = $value;
    }

    public function showCreateModal()
    {
        $this->showArticleModal = true;
    }

    public function closeConfirmModal()
    {
        $this->showConfirmModal = false;
    }

    public function deleteId($id)
    {
        $this->showConfirmModal = true;
        $this->deleteId = $id;
    }

    public function delete()
    {
        Article::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Article deleted successfully']);
    }

    public function createArticle()
    {
        // dd($this->publishedAt);
        $this->validate();
  
        $new = Str::slug($this->title) . '_' . time();
        
        // Article::create([
        //     'category_id' => $this->categoryId,
        //     'user_id' => Auth::user()->id,
        //     'title' => $this->title,
        //     'slug' => Str::slug($this->title),
        //     'rand_id' => Str::random(10),
        //     'body' => $this->body,
        //     'article_tags' => $this->articleTags,
        //     'author' => $this->author,
        //     'url' => $this->url,
        //     'embed_url' => $this->embedUrl,
        //     'published_at' => $this->publishedAt,
        //     'meta_title' => $this->metaTitle,
        //     'meta_description' => $this->metaDesc,
        //     'original' => $filePath,
        //     'small' => $resizedImage['small'],
        //     'medium' => $resizedImage['medium'],
        //     'status' => $this->articleStatus,
        // ]);

        $article = new Article();
        $article->category_id = $this->categoryId;
        $article->user_id = Auth::user()->id;
        $article->title = $this->title;
        $article->slug = Str::slug($this->title);
        $article->rand_id = Str::random(10);
        $article->body = $this->body;
        $article->article_tags = $this->articleTags;
        $article->author = $this->author;
        $article->url = $this->url;
        $article->embed_url = $this->embedUrl;
        $article->published_at = $this->publishedAt;
        $article->meta_title = $this->metaTitle;
        $article->meta_description = $this->metaDesc;
        $article->status = $this->articleStatus;

        if (!empty($this->file)) {
            $filename = $new . '.' . $this->file->getClientOriginalName();
            $filePath = $this->file->storeAs(Article::UPLOAD_DIR, $filename, 'public');
            $resizedImage = $this->_resizeImage($this->file, $filename, Article::UPLOAD_DIR);

            $article->original = $filePath;
            $article->small = $resizedImage['small'];
            $article->medium = $resizedImage['medium'];
        }

        $article->save();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Article created successfully']);
    }

    public function showEditModal($articleId)
    {
        $this->reset(['title']);
        $this->articleId = $articleId;
        $article = Article::find($articleId);
        $this->categoryId = $article->category_id;
        $this->title = $article->title;
        $this->body = $article->body;
        $this->articleTags = $article->article_tags;
        $this->author = $article->author;
        $this->url = $article->url;
        $this->embedUrl = $article->embed_url;
        $this->publishedAt = $article->published_at;
        $this->metaTitle = $article->meta_title;
        $this->metaDesc = $article->meta_description;
        $this->oldImage = $article->small;
        $this->articleStatus = $article->status;
        $this->showArticleModal = true;
    }
    
    public function updateArticle()
    {
        $article = Article::findOrFail($this->articleId);
        $this->validate();
  
        $new = Str::slug($this->title) . '_' . time();
        
        if ($this->articleId) {
            if ($article) {

                // $article->update([
                //     'category_id' => $this->categoryId,
                //     'user_id' => Auth::user()->id,
                //     'title' => $this->title,
                //     'slug' => Str::slug($this->title),
                //     'rand_id' => Str::random(10),
                //     'body' => $this->body,
                //     'article_tags' => $this->articleTags,
                //     'author' => $this->author,
                //     'url' => $this->url,
                //     'embed_url' => $this->embedUrl,
                //     'published_at' => $this->publishedAt,
                //     'meta_title' => $this->metaTitle,
                //     'meta_description' => $this->metaDesc,
                //     'original' => $filePath,
                //     'small' => $resizedImage['small'],
                //     'medium' => $resizedImage['medium'],
                //     'status' => $this->articleStatus,
                // ]);

                $article->category_id = $this->categoryId;
                $article->user_id = Auth::user()->id;
                $article->title = $this->title;
                $article->slug = Str::slug($this->title);
                $article->rand_id = Str::random(10);
                $article->body = $this->body;
                $article->article_tags = $this->articleTags;
                $article->author = $this->author;
                $article->url = $this->url;
                $article->embed_url = $this->embedUrl;
                $article->published_at = $this->publishedAt;
                $article->meta_title = $this->metaTitle;
                $article->meta_description = $this->metaDesc;
                $article->status = $this->articleStatus;

                if (!empty($this->file)) {
                    // delete image
                    $this->deleteImage($this->articleId);

                    $filename = $new . '.' . $this->file->getClientOriginalName();
                    $filePath = $this->file->storeAs(Article::UPLOAD_DIR, $filename, 'public');
                    $resizedImage = $this->_resizeImage($this->file, $filename, Article::UPLOAD_DIR);
                
                    $article->original = $filePath;
                    $article->small = $resizedImage['small'];
                    $article->medium = $resizedImage['medium'];
                }
                
                $article->save();
            }
        }

        $this->reset();
        $this->showArticleModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Article updated successfully']);
    }

    public function deleteArticle($articleId)
    {
        $article = Article::findOrFail($articleId);
        $article->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Article deleted successfully']);
    }

    public function closeArticleModal()
    {
        $this->showArticleModal = false;
        $this->reset(
            'articleId', 
            'title',
            'body',
            'status',
            'author',
            'url',
        );
    }

    public function resetFilters()
    {
        $this->reset(
            [
            'search',
            'sort',
            'perPage',
            ]
        );
    }

    public function render()
    {
        $key = explode(' ', $this->search);
        $articles = Article::where(function ($q) use ($key) {
            foreach ($key as $value) {
                $q->orWhere('title', 'like', "%{$value}%");
            }
        })->orderBy('id', $this->sort)->paginate($this->perPage);

        return view('livewire.admin.article-index', [
            'articles' => $articles,
            'categories' => CategoryArticle::OrderBy('name', $this->sort)->get()
        ])->layout('components.layouts.app');
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		$smallImageFilePath = $folder . '/small/' . $fileName;
		$size = explode('x', Article::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		$mediumImageFilePath = $folder . '/medium/' . $fileName;
		$size = explode('x', Article::MEDIUM);
		list($width, $height) = $size;

		$mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
			$resizedImage['medium'] = $mediumImageFilePath;
		}

        // LARGE
		// $largeImageFilePath = $folder . '/large/' . $fileName;
		// $size = explode('x', Article::LARGE);
		// list($width, $height) = $size;

		// $largeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
		// 	$resizedImage['large'] = $largeImageFilePath;
		// }

        // EXTRA_LARGE
		// $extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		// $size = explode('x', Article::EXTRA_LARGE);
		// list($width, $height) = $size;

		// $extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
		// 	$resizedImage['extra_large'] = $extraLargeImageFilePath;
		// }

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $articleImage = Article::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$articleImage->original)) {
            Storage::delete($path.$articleImage->original);
		}
		
        if (Storage::exists($path.$articleImage->small)) {
            Storage::delete($path.$articleImage->small);
        }   

		if (Storage::exists($path.$articleImage->medium)) {
            Storage::delete($path.$articleImage->medium);
        }

             
        return true;
    }

    public function editArticle($articleId)
    {
        return redirect('/admin/articles/edit/'.$articleId);
    }
}
