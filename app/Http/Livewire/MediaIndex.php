<?php

namespace App\Http\Livewire;

use App\Models\Media;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Component;

class MediaIndex extends Component
{
    use WithFileUploads, WithPagination;
    
    public $showMediaModal = false;

    public $title;
    public $publishedAt;
    public $published;
    public $publishOption = [
        'yes' => true,
        'no' => false,
    ];
    public $body;
    public $videoUrl;
    public $mediaId;
    public $file;
    public $oldImage;
    public $mediaStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rules = [
        'title' => 'required|min:3',
        // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function mount($matchId)
    {
        $this->publishedAt = today()->format('Y-m-d');
    }

    public function showCreateModal()
    {
        $this->showMediaModal = true;
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
        Media::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Media deleted successfully']);
    }

    public function createMedia()
    {
        $this->validate();
  
        $new = Str::slug($this->title) . '_' . time();

        $media = new Media();
        $media->user_id = Auth::user()->id;
        $media->title = $this->title;
        $media->slug = Str::slug($this->title);
        $media->rand_id = Str::random(10);
        $media->body = $this->body;
        $media->published_at = $this->publishedAt;
        $media->published = $this->published;
        $media->video_url = $this->videoUrl;
        $media->status = $this->mediaStatus;
      
        if (!empty($this->file)) {
             // IMAGE
            $filename = $new . '.' . $this->file->getClientOriginalName();
            $filePath = $this->file->storeAs(Media::UPLOAD_DIR, $filename, 'public');
            $resizedImage = $this->_resizeImage($this->file, $filename, Media::UPLOAD_DIR);

            $media->original = $filePath;
            $media->small = $resizedImage['small'];
            $media->medium = $resizedImage['medium'];
            $media->large = $resizedImage['large'];
        }

        $media->save();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Media created successfully']);
    }

    public function showEditModal($mediaId)
    {
        $this->reset(['name']);
        $this->mediaId = $mediaId;
        $media = Media::find($mediaId);
        $this->title = $media->title;
        $this->body = $media->body;
        $this->videoUrl = $media->video_url;
        $this->publishedAt = $media->published_at;
        $this->published = $media->published;
        $this->oldImage = $media->small;
        $this->mediaStatus = $media->status;

        $this->showMediaModal = true;
    }
    
    public function updateMedia()
    {
       
        $this->validate();

        $media = Media::findOrFail($this->mediaId);
  
        $new = Str::slug($this->title) . '_' . time();
        
        if ($this->mediaId) {
            if ($media) {

                // $media = Media::where('id', $this->mediaId);
                $media->user_id = Auth::user()->id;
                $media->title = $this->title;
                $media->slug = Str::slug($this->title);
                $media->rand_id = Str::random(10);
                $media->body = $this->body;
                $media->published_at = $this->publishedAt;
                $media->published = $this->published;
                $media->video_url = $this->videoUrl;
                $media->status = $this->mediaStatus;

                if (!empty($this->file)) {
                    // delete image
			        $this->deleteImage($this->mediaId);

                    // IMAGE
                    $filename = $new . '.' . $this->file->getClientOriginalName();
                    $filePath = $this->file->storeAs(Media::UPLOAD_DIR, $filename, 'public');
                    $resizedImage = $this->_resizeImage($this->file, $filename, Media::UPLOAD_DIR);

                    $media->original = $filePath;
                    $media->small = $resizedImage['small'];
                    $media->medium = $resizedImage['medium'];
                    $media->large = $resizedImage['large'];
                }

            }
        }

        $this->reset();
        $this->showMediaModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Media updated successfully']);
    }

    public function deleteMedia($mediaId)
    {
        $media = Media::findOrFail($mediaId);
        // delete image
		$this->deleteImage($this->mediaId);
        
        $media->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Media deleted successfully']);
    }

    public function closeMediaModal()
    {
        $this->showMediaModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.media-index', [
            'medias' => Media::search('title', $this->search)->orderBy('title', $this->sort)->paginate($this->perPage),
        ]);
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		$smallImageFilePath = $folder . '/small/' . $fileName;
		$size = explode('x', Media::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		$mediumImageFilePath = $folder . '/medium/' . $fileName;
		$size = explode('x', Media::MEDIUM);
		list($width, $height) = $size;

		$mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
			$resizedImage['medium'] = $mediumImageFilePath;
		}

        // LARGE
		$largeImageFilePath = $folder . '/large/' . $fileName;
		$size = explode('x', Media::LARGE);
		list($width, $height) = $size;

		$largeImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
			$resizedImage['large'] = $largeImageFilePath;
		}

        // EXTRA_LARGE
		// $extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		// $size = explode('x', Media::EXTRA_LARGE);
		// list($width, $height) = $size;

		// $extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
		// 	$resizedImage['extra_large'] = $extraLargeImageFilePath;
		// }

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $mediaImage = Media::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$mediaImage->original)) {
            Storage::delete($path.$mediaImage->original);
		}
		
        if (Storage::exists($path.$mediaImage->small)) {
            Storage::delete($path.$mediaImage->small);
        }   

		if (Storage::exists($path.$mediaImage->medium)) {
            Storage::delete($path.$mediaImage->medium);
        }

        if (Storage::exists($path.$mediaImage->large)) {
            Storage::delete($path.$mediaImage->large);
        }

        // if (Storage::exists($path.$mediaImage->extra_large)) {
        //     Storage::delete($path.$mediaImage->extra_large);
        // }
             
        return true;
    }
}
