<?php

namespace App\Http\Livewire\Admin;

use Livewire\WithFileUploads;
use App\Models\ProductSlide;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\Component;

class ProductSliderIndex extends Component
{
    use WithFileUploads, WithPagination;

    public $showProductSlideModal = false;
    public $title;
    public $body;
    public $status;
    public $slideId;
    public $file;
    public $url;
    public $position;
    public $oldImage;
    public $slideStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 10;

    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rules = [
        'title' => 'required',
        // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function showCreateModal()
    {
        $this->showProductSlideModal = true;
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
        ProductSlide::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'ProductSlide deleted successfully']);
    }

    public function createProductSlide()
    {
        $this->validate();
  
        $new = Str::slug($this->title) . '_' . time();
        // IMAGE
       

        // ProductSlide::create([
        //     'user_id' => Auth::user()->id,
        //     'title' => $this->title,
        //     'body' => $this->body,
        //     'url' => $this->url,
        //     'position' => $this->position,
        //     'original' => $filePath,
        //     'small' => $resizedImage['small'],
        //     'extra_large' => $resizedImage['extra_large'],
        //     'status' => $this->slideStatus,
        // ]);

        $slide = new ProductSlide();
        $slide->user_id = Auth::user()->id;
        $slide->title = $this->title;
        $slide->body = $this->body;
        $slide->url = $this->url;
        $slide->position = $this->position;
        $slide->status = $this->slideStatus;

        if (!empty($this->file)) {
            $filename = $new . '.' . $this->file->getClientOriginalName();
            $filePath = $this->file->storeAs(ProductSlide::UPLOAD_DIR, $filename, 'public');
            $resizedImage = $this->_resizeImage($this->file, $filename, ProductSlide::UPLOAD_DIR);

            $slide->original = $filePath;
            $slide->small =$resizedImage['small'];
            $slide->extra_large =$resizedImage['extra_large'];
        }

        $slide->save();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'ProductSlide created successfully']);
    }

    public function showEditModal($slideId)
    {
        $this->reset(['title']);
        $this->slideId = $slideId;
        $slide = ProductSlide::find($slideId);
        $this->title = $slide->title;
        $this->body = $slide->body;
        $this->url = $slide->url;
        $this->position = $slide->position;
        $this->oldImage = $slide->small;
        $this->slideStatus = $slide->status;

        $this->showProductSlideModal = true;
    }
    
    public function updateProductSlide()
    {
        $slide = ProductSlide::findOrFail($this->slideId);
        $this->validate();
  
        $new = Str::slug($this->title) . '_' . time();
        
        if ($this->slideId) {
            if ($slide) {
               
                // $slide->update([
                //     'user_id' => Auth::user()->id,
                //     'title' => $this->title,
                //     'body' => $this->body,
                //     'url' => $this->url,
                //     'position' => $this->position,
                //     'original' => $filePath,
                //     'small' => $resizedImage['small'],
                //     'extra_large' => $resizedImage['extra_large'],
                //     'status' => $this->slideStatus,
                // ]);

                $slide = ProductSlide::where('id', $this->slideId)->first();
                $slide->user_id = Auth::user()->id;
                $slide->title = $this->title;
                $slide->body = $this->body;
                $slide->url = $this->url;
                $slide->position = $this->position;
                $slide->status = $this->slideStatus;
        
                if (!empty($this->file)) {
                    // delete image
			        $this->deleteImage($this->slideId);

                    $filename = $new . '.' . $this->file->getClientOriginalName();
                    $filePath = $this->file->storeAs(ProductSlide::UPLOAD_DIR, $filename, 'public');
                    $resizedImage = $this->_resizeImage($this->file, $filename, ProductSlide::UPLOAD_DIR);
        
                    $slide->original = $filePath;
                    $slide->small =$resizedImage['small'];
                    $slide->extra_large =$resizedImage['extra_large'];
                }
        
                $slide->save();
                
            }
        }

        $this->reset();
        $this->showProductSlideModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'ProductSlide updated successfully']);
    }

    public function deleteProductSlide($slideId)
    {
        $slide = ProductSlide::findOrFail($slideId);
        $slide->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'ProductSlide deleted successfully']);
    }

    public function closeProductSlideModal()
    {
        $this->showProductSlideModal = false;
        $this->reset(
            [
                'slideId',
                'title',
                'body',
                'url',
                'position',
                'slideStatus',
            ]
        );
    }

    public function resetFilters()
    {
        $this->reset(['search', 'sort', 'perPage']);
    }

    public function render()
    {
        return view('livewire.admin.product-slider-index', [
            'slides' => ProductSlide::liveSearch('title', $this->search)->orderBy('position', $this->sort)->paginate($this->perPage)
        ])->layout('components.layouts.app');
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		$smallImageFilePath = $folder . '/small/' . $fileName;
		$size = explode('x', ProductSlide::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		// $mediumImageFilePath = $folder . '/medium/' . $fileName;
		// $size = explode('x', ProductSlide::MEDIUM);
		// list($width, $height) = $size;

		// $mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
		// 	$resizedImage['medium'] = $mediumImageFilePath;
		// }

        // LARGE
		// $largeImageFilePath = $folder . '/large/' . $fileName;
		// $size = explode('x', ProductSlide::LARGE);
		// list($width, $height) = $size;

		// $largeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
		// 	$resizedImage['large'] = $largeImageFilePath;
		// }

        // EXTRA_LARGE
		$extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		$size = explode('x', ProductSlide::EXTRA_LARGE);
		list($width, $height) = $size;

		$extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
			$resizedImage['extra_large'] = $extraLargeImageFilePath;
		}

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $slideImage = ProductSlide::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$slideImage->original)) {
            Storage::delete($path.$slideImage->original);
		}
		
        if (Storage::exists($path.$slideImage->small)) {
            Storage::delete($path.$slideImage->small);
        }   

		// if (Storage::exists($path.$slideImage->medium)) {
        //     Storage::delete($path.$slideImage->medium);
        // }

        if (Storage::exists($path.$slideImage->extra_large)) {
            Storage::delete($path.$slideImage->extra_large);
        }
             
        return true;
    }

    public function updateTaskOrder($items)
    {
        // dd($items);
        foreach ($items as $item) {
            ProductSlide::find($item['value'])->update(['position' => $item['order']]);
        }

        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Slide sorted successfully']);
    }
}
