<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use App\Models\Staff;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\Component;

class StaffIndex extends Component
{
    use WithFileUploads, WithPagination;
    
    public $showStaffModal = false;
    public $name;
    public $role;
    public $birth_date;
    public $birth_location;
    public $nationality;
    public $bio;
    public $contract_from;
    public $contract_until;
    public $staffId;
    public $file;
    public $oldImage;
    public $staffStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rule = [
        'name' => 'required',
            // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function showCreateModal()
    {
        $this->showStaffModal = true;
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
        Staff::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Staff deleted successfully']);
    }

    public function createStaff()
    {
        $this->validate();
  
        $new = Str::slug($this->name) . '_' . time();
        // IMAGE
        $filename = $new . '.' . $this->file->getClientOriginalName();
        $filePath = $this->file->storeAs(Staff::UPLOAD_DIR, $filename, 'public');
        $resizedImage = $this->_resizeImage($this->file, $filename, Staff::UPLOAD_DIR);

        $staff = new Staff();
        $staff->name = $this->name;
        $staff->slug = Str::slug($this->name);
        $staff->role = $this->role;
        $staff->birth_date = $this->birth_date;
        $staff->birth_location = $this->birth_location;
        $staff->nationality = $this->nationality;
        $staff->bio = $this->bio;
        $staff->contract_from = $this->contract_from;
        $staff->contract_until = $this->contract_until;
        $staff->status = $this->staffStatus;

        if (!empty($this->file)) {
            $staff->origin = $filePath;
            $staff->small =$resizedImage['small'];
            $staff->medium = $resizedImage['medium'];
        }

        $staff->save();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Staff created successfully']);
    }

    public function showEditModal($staffId)
    {
        $this->reset(['name']);
        $this->staffId = $staffId;
        $staff = Staff::find($staffId);
        $this->name = $staff->name;
        $this->role = $staff->role;
        $this->birth_date = $staff->birth_date;
        $this->birth_location = $staff->birth_location;
        $this->nationality = $staff->nationality;
        $this->bio = $staff->bio;
        $this->contract_from = $staff->contract_from;
        $this->contract_until = $staff->contract_until;
        $this->oldImage = $staff->small;
        $this->staffStatus = $staff->status;

        $this->showStaffModal = true;
    }
    
    public function updateStaff()
    {
        $staff = Staff::findOrFail($this->staffId);
        $this->validate();
  
        $new = Str::slug($this->name) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();
        
        if ($this->staffId) {
            if ($staff) {
               
                // IMAGE
                $filePath = $this->file->storeAs(Staff::UPLOAD_DIR, $filename, 'public');
                $resizedImage = $this->_resizeImage($this->file, $filename, Staff::UPLOAD_DIR);

                $staff = Staff::where('id', $this->staffId);
                $staff->name = $this->name;
                $staff->slug = Str::slug($this->name);
                $staff->role = $this->role;
                $staff->birth_date = $this->birth_date;
                $staff->birth_location = $this->birth_location;
                $staff->nationality = $this->nationality;
                $staff->bio = $this->bio;
                $staff->contract_from = $this->contract_from;
                $staff->contract_until = $this->contract_until;
                $staff->status = $this->staffStatus;

                if (!empty($this->file)) {
                    // delete image
			        $this->deleteImage($this->staffId);

                    $staff->origin = $filePath;
                    $staff->small =$resizedImage['small'];
                    $staff->medium = $resizedImage['medium'];
                }

                $staff->save();
            }
        }

        $this->reset();
        $this->showStaffModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Staff updated successfully']);
    }

    public function deleteStaff($staffId)
    {
        $staff = Staff::findOrFail($staffId);
        // delete image
		$this->deleteImage($this->staffId);
        
        $staff->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Staff deleted successfully']);
    }

    public function closeStaffModal()
    {
        $this->showStaffModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.staff-index', [
            'staffs' => Staff::search('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage)
        ]);
    }

    private function _resizeImage($image, $fileName, $folder)
	{
		$resizedImage = [];

        // SMALL
		$smallImageFilePath = $folder . '/small/' . $fileName;
		$size = explode('x', Staff::SMALL);
		list($width, $height) = $size;

		$smallImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $smallImageFilePath, $smallImageFile)) {
			$resizedImage['small'] = $smallImageFilePath;
		}
		
        // MEDIUM
		$mediumImageFilePath = $folder . '/medium/' . $fileName;
		$size = explode('x', Staff::MEDIUM);
		list($width, $height) = $size;

		$mediumImageFile = Image::make($image)->fit($width, $height)->stream();
		if (Storage::put('public/' . $mediumImageFilePath, $mediumImageFile)) {
			$resizedImage['medium'] = $mediumImageFilePath;
		}

        // LARGE
		// $largeImageFilePath = $folder . '/large/' . $fileName;
		// $size = explode('x', Staff::LARGE);
		// list($width, $height) = $size;

		// $largeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $largeImageFilePath, $largeImageFile)) {
		// 	$resizedImage['large'] = $largeImageFilePath;
		// }

        // EXTRA_LARGE
		// $extraLargeImageFilePath  = $folder . '/xlarge/' . $fileName;
		// $size = explode('x', Staff::EXTRA_LARGE);
		// list($width, $height) = $size;

		// $extraLargeImageFile = Image::make($image)->fit($width, $height)->stream();
		// if (Storage::put('public/' . $extraLargeImageFilePath, $extraLargeImageFile)) {
		// 	$resizedImage['extra_large'] = $extraLargeImageFilePath;
		// }

		return $resizedImage;
	}

    public function deleteImage($id = null) {
        $staffImage = Staff::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$staffImage->original)) {
            Storage::delete($path.$staffImage->original);
		}
		
        if (Storage::exists($path.$staffImage->small)) {
            Storage::delete($path.$staffImage->small);
        }   

		if (Storage::exists($path.$staffImage->medium)) {
            Storage::delete($path.$staffImage->medium);
        }

        // if (Storage::exists($path.$staffImage->extra_large)) {
        //     Storage::delete($path.$staffImage->extra_large);
        // }
             
        return true;
    }
}
