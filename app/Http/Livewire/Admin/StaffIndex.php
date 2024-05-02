<?php

namespace App\Http\Livewire\Admin;

use Livewire\WithFileUploads;
use App\Models\Staff;
use App\Models\Country;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\Component;

class StaffIndex extends Component
{
    use WithFileUploads, WithPagination;
    
    public $showStaffModal = false;
    public $sizeTol = Staff::LARGE;
    public $name;
    public $role;
    public $birthDate;
    public $birthLocation;
    public $nationality;
    public $country;
    public $bio;
    public $contractFrom;
    public $contractUntil;
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
    public $perPage = 10;

    public $showStaffDetailModal = false;
    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rules = [
        'name' => 'required',
            // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function mount()
    {
        $this->contractFrom = today()->format('Y-m-d');
        $this->contractUntil = today()->format('Y-m-d');
        $this->birthDate = today()->format('Y-m-d');
    } 

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

        $staff = new Staff();
        $staff->name = $this->name;
        $staff->slug = Str::slug($this->name);
        $staff->role = $this->role;
        $staff->birth_date = $this->birthDate;
        $staff->birth_location = $this->birthLocation;
        $staff->country_id = $this->nationality;
        $staff->bio = $this->bio;
        $staff->contract_from = $this->contractFrom;
        $staff->contract_until = $this->contractUntil;
        $staff->status = $this->staffStatus;

        if (!empty($this->file)) {
            // IMAGE
            $filename = $new . '.' . $this->file->getClientOriginalName();
            $filePath = $this->file->storeAs(Staff::UPLOAD_DIR, $filename, 'public');
            $resizedImage = $this->_resizeImage($this->file, $filename, Staff::UPLOAD_DIR);

            $staff->original = $filePath;
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
        $this->birthDate = $staff->birth_date;
        $this->birthLocation = $staff->birth_location;
        $this->nationality = $staff->country_id;
        $this->bio = $staff->bio;
        $this->contractFrom = $staff->contract_from;
        $this->contractUntil = $staff->contract_until;
        $this->oldImage = $staff->small;
        $this->staffStatus = $staff->status;

        $this->showStaffModal = true;
    }

    public function showDetailModal($staffId)
    {
        $this->reset();
        $this->staffId = $staffId;
        $staff = Staff::find($staffId);
        $this->name = $staff->name;
        $this->role = $staff->role;
        $this->birthDate = $staff->birth_date;
        $this->birthLocation = $staff->birth_location;
        $this->nationality = $staff->country_id;
        $this->country = $staff->country->name;
        $this->bio = $staff->bio;
        $this->contractFrom = $staff->contract_from;
        $this->contractUntil = $staff->contract_until;
        $this->oldImage = $staff->small;
        $this->staffStatus = $staff->status;

        $this->showStaffDetailModal = true;
    }
    
    public function updateStaff()
    {
        
        $this->validate();

        $staff = Staff::findOrFail($this->staffId);
  
        $new = Str::slug($this->name) . '_' . time();
        
        if ($this->staffId) {
            if ($staff) {

                // $staff = Staff::where('id', $this->staffId);
                $staff->name = $this->name;
                $staff->slug = Str::slug($this->name);
                $staff->role = $this->role;
                $staff->birth_date = $this->birthDate;
                $staff->birth_location = $this->birthLocation;
                $staff->country_id = $this->nationality;
                $staff->bio = $this->bio;
                $staff->contract_from = $this->contractFrom;
                $staff->contract_until = $this->contractUntil;
                $staff->status = $this->staffStatus;

                if (!empty($this->file)) {
                    // delete image
			        $this->deleteImage($this->staffId);

                    // IMAGE
                    $filename = $new . '.' . $this->file->getClientOriginalName();
                    $filePath = $this->file->storeAs(Staff::UPLOAD_DIR, $filename, 'public');
                    $resizedImage = $this->_resizeImage($this->file, $filename, Staff::UPLOAD_DIR);

                    $staff->original = $filePath;
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
        $this->reset(
            [
                'staffId',
                'name',
                'role',
                'birthDate',
                'birthLocation',
                'nationality',
                'bio',
                'contractFrom',
                'contractUntil',
                'staffStatus',
            ]
        );
    }

    public function closeDetailModal()
    {
        $this->showStaffDetailModal = false;
        $this->reset();
    }

    public function resetFilters()
    {
        $this->reset(['search', 'sort', 'perPage']);
    }

    public function render()
    {
        return view('livewire.admin.staff-index', [
            'staffs' => Staff::liveSearch('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage),
            'countries' => Country::orderBy('name', 'asc')->get(),
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
