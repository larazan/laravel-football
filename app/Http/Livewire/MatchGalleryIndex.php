<?php

namespace App\Http\Livewire;

use App\Models\MatchGallery;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Component;

class MatchGalleryIndex extends Component
{
    use WithFileUploads, WithPagination;
    
    public $showMatchGalleryModal = false;
    public $matchId;
    public $matchGalleryId;
    public $file;
    public $oldImage;
    public $matchGalleryStatus = 'inactive';
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
            'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function mount($matchId)
    {
        $this->matchId = $matchId;
    }

    public function showCreateModal()
    {
        $this->showMatchGalleryModal = true;
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
        MatchGallery::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'MatchGallery deleted successfully']);
    }

    public function createMatchGallery()
    {
        $this->validate();
  
        $new = Str::random(5) . '_' . time();

        $matchGallery = new MatchGallery();
        $matchGallery->match_id = $this->matchId;
      
        if (!empty($this->file)) {
            // IMAGE
            $filename = $new . '.' . $this->file->getClientOriginalName();
            $filePath = $this->file->storeAs(MatchGallery::UPLOAD_DIR, $filename, 'public');
            $resizedImage = $this->_resizeImage($this->file, $filename, MatchGallery::UPLOAD_DIR);

            $matchGallery->original = $filePath;
            $matchGallery->small = $resizedImage['small'];
            $matchGallery->medium = $resizedImage['medium'];
            $matchGallery->large = $resizedImage['large'];
        }

        $matchGallery->save();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'MatchGallery created successfully']);
    }

    public function showEditModal($matchGalleryId)
    {
        $this->reset(['name']);
        $this->matchGalleryId = $matchGalleryId;
        $matchGallery = MatchGallery::find($matchGalleryId);
        $this->oldImage = $matchGallery->medium;

        $this->showMatchGalleryModal = true;
    }
    
    public function updateMatchGallery()
    {
        $this->validate();
        $matchGallery = MatchGallery::findOrFail($this->matchGalleryId);
    
        $new = Str::random(5) . '_' . time();
        
        if ($this->matchGalleryId) {
            if ($matchGallery) {
               
                // IMAGE
                $filename = $new . '.' . $this->file->getClientOriginalName();
                $filePath = $this->file->storeAs(MatchGallery::UPLOAD_DIR, $filename, 'public');
                $resizedImage = $this->_resizeImage($this->file, $filename, MatchGallery::UPLOAD_DIR);

                // $matchGallery = MatchGallery::where('id', $this->matchGalleryId);
                $matchGallery->match_id = $this->matchId;

                if (!empty($this->file)) {
                    // delete image
			        $this->deleteImage($this->matchGalleryId);

                    $matchGallery->original = $filePath;
                    $matchGallery->small = $resizedImage['small'];
                    $matchGallery->medium = $resizedImage['medium'];
                    $matchGallery->large = $resizedImage['large'];
                }

            }
        }

        $this->reset();
        $this->showMatchGalleryModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'MatchGallery updated successfully']);
    }

    public function deleteMatchGallery($matchGalleryId)
    {
        $matchGallery = MatchGallery::findOrFail($matchGalleryId);
        // delete image
		$this->deleteImage($this->matchGalleryId);
        
        $matchGallery->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'MatchGallery deleted successfully']);
    }

    public function closeMatchGalleryModal()
    {
        $this->showMatchGalleryModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.match-gallery-index', [
            'galleries' => MatchGallery::search('id', $this->search)->orderBy('id', $this->sort)->paginate($this->perPage),
        ]);
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		$smallImageFilePath = $folder . '/small/' . $fileName;
		$size = explode('x', MatchGallery::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		$mediumImageFilePath = $folder . '/medium/' . $fileName;
		$size = explode('x', MatchGallery::MEDIUM);
		list($width, $height) = $size;

		$mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
			$resizedImage['medium'] = $mediumImageFilePath;
		}

        // LARGE
		$largeImageFilePath = $folder . '/large/' . $fileName;
		$size = explode('x', MatchGallery::LARGE);
		list($width, $height) = $size;

		$largeImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
			$resizedImage['large'] = $largeImageFilePath;
		}

        // EXTRA_LARGE
		// $extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		// $size = explode('x', MatchGallery::EXTRA_LARGE);
		// list($width, $height) = $size;

		// $extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
		// 	$resizedImage['extra_large'] = $extraLargeImageFilePath;
		// }

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $matchGalleryImage = MatchGallery::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$matchGalleryImage->original)) {
            Storage::delete($path.$matchGalleryImage->original);
		}
		
        if (Storage::exists($path.$matchGalleryImage->small)) {
            Storage::delete($path.$matchGalleryImage->small);
        }   

		if (Storage::exists($path.$matchGalleryImage->medium)) {
            Storage::delete($path.$matchGalleryImage->medium);
        }

        if (Storage::exists($path.$matchGalleryImage->large)) {
            Storage::delete($path.$matchGalleryImage->large);
        }

        // if (Storage::exists($path.$matchGalleryImage->extra_large)) {
        //     Storage::delete($path.$matchGalleryImage->extra_large);
        // }
             
        return true;
    }
}
