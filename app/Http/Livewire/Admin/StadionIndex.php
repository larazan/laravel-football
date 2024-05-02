<?php

namespace App\Http\Livewire\Admin;

use Livewire\WithFileUploads;
use App\Models\Stadion;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\Component;

class StadionIndex extends Component
{
    use WithFileUploads, WithPagination;

    public $showStadionModal = false;
    public $sizeTol = Stadion::LARGE;
    public $name;
    public $city;
    public $capacity;
    public $seat = 'full kursi';
    public $seatQuality = [
        'full kursi',
        'tanpa kursi',
        'campuran',
    ];
    public $vip = 'yes';
    public $vipStatus = [
        'yes',
        'no'
    ];
    public $stadionId;
    public $file;
    public $oldImage;
    public $stadionStatus = 'inactive';
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
        'name' => 'required',
        // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function showCreateModal()
    {
        $this->showStadionModal = true;
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
        Stadion::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Stadion deleted successfully']);
    }

    public function createStadion()
    {
        $this->validate();
  
        $new = Str::slug($this->name) . '_' . time();

        $stadion = new Stadion();
        $stadion->name = $this->name;
        $stadion->slug = Str::slug($this->name);
        $stadion->city = $this->city;
        $stadion->capacity = $this->capacity;
        $stadion->seat_quality = $this->seatQuality;
        $stadion->vip = $this->vipStatus;
        $stadion->status = $this->stadionStatus;

        if (!empty($this->file)) {
            // IMAGE
            $filename = $new . '.' . $this->file->getClientOriginalName();
            $filePath = $this->file->storeAs(Stadion::UPLOAD_DIR, $filename, 'public');
            $resizedImage = $this->_resizeImage($this->file, $filename, Stadion::UPLOAD_DIR);

            $stadion->original = $filePath;
            $stadion->small =$resizedImage['small'];
            $stadion->extra_large = $resizedImage['extra_large'];
        }

        $stadion->save();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Stadion created successfully']);
    }

    public function showEditModal($stadionId)
    {
        $this->reset(['name']);
        $this->stadionId = $stadionId;
        $stadion = Stadion::find($stadionId);
        $this->name = $stadion->name;
        $this->city = $stadion->city;
        $this->capacity = $stadion->capacity;
        $this->seatQuality = $stadion->seat_quality;
        $this->vipStatus = $stadion->vip;
        $this->oldImage = $stadion->small;
        $this->stadionStatus = $stadion->status;

        $this->showStadionModal = true;
    }
    
    public function updateStadion()
    {
        $this->validate();

        $stadion = Stadion::findOrFail($this->stadionId);
  
        $new = Str::slug($this->name) . '_' . time();
        
        if ($this->stadionId) {
            if ($stadion) {

                // $stadion = Stadion::where('id', $this->stadionId);
                $stadion->name = $this->name;
                $stadion->slug = Str::slug($this->name);
                $stadion->city = $this->city;
                $stadion->capacity = $this->capacity;
                $stadion->seat_quality = $this->seatQuality;
                $stadion->vip = $this->vipStatus;
                $stadion->status = $this->stadionStatus;

                if (!empty($this->file)) {
                    // delete image
			        $this->deleteImage($this->stadionId);

                    // IMAGE
                    $filename = $new . '.' . $this->file->getClientOriginalName();
                    $filePath = $this->file->storeAs(Stadion::UPLOAD_DIR, $filename, 'public');
                    $resizedImage = $this->_resizeImage($this->file, $filename, Stadion::UPLOAD_DIR);

                    $stadion->original = $filePath;
                    $stadion->small =$resizedImage['small'];
                    $stadion->extra_large = $resizedImage['extra_large'];
                }
                
                $stadion->save();
            }
        }

        $this->reset();
        $this->showStadionModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Stadion updated successfully']);
    }

    public function deleteStadion($stadionId)
    {
        $stadion = Stadion::findOrFail($stadionId);
        // delete image
		$this->deleteImage($this->stadionId);
        
        $stadion->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Stadion deleted successfully']);
    }

    public function closeStadionModal()
    {
        $this->showStadionModal = false;
        $this->reset(
            [
                'stadionId',
                'name',
                'city',
                'capacity',
                'seatQuality',
                'vipStatus',
                'stadionStatus',
            ]
        );
    }

    public function resetFilters()
    {
        $this->reset(['search', 'sort', 'perPage']);
    }

    public function render()
    {
        return view('livewire.admin.stadion-index', [
            'stadions' => Stadion::liveSearch('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage)
        ]);
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		$smallImageFilePath = $folder . '/small/' . $fileName;
		$size = explode('x', Stadion::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		// $mediumImageFilePath = $folder . '/medium/' . $fileName;
		// $size = explode('x', Stadion::MEDIUM);
		// list($width, $height) = $size;

		// $mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
		// 	$resizedImage['medium'] = $mediumImageFilePath;
		// }

        // LARGE
		// $largeImageFilePath = $folder . '/large/' . $fileName;
		// $size = explode('x', Stadion::LARGE);
		// list($width, $height) = $size;

		// $largeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
		// 	$resizedImage['large'] = $largeImageFilePath;
		// }

        // EXTRA_LARGE
		$extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		$size = explode('x', Stadion::EXTRA_LARGE);
		list($width, $height) = $size;

		$extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
			$resizedImage['extra_large'] = $extraLargeImageFilePath;
		}

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $stadionImage = Stadion::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$stadionImage->original)) {
            Storage::delete($path.$stadionImage->original);
		}
		
        if (Storage::exists($path.$stadionImage->small)) {
            Storage::delete($path.$stadionImage->small);
        }   

		// if (Storage::exists($path.$stadionImage->medium)) {
        //     Storage::delete($path.$stadionImage->medium);
        // }

        if (Storage::exists($path.$stadionImage->extra_large)) {
            Storage::delete($path.$stadionImage->extra_large);
        }
             
        return true;
    }
}
