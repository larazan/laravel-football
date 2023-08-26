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
    public $sizeTol = Staff::LARGE;
    public $name;
    public $role;
    public $birthDate;
    public $birthLocation;
    public $nationality;
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

    public $countries = [
        'Afghanistan',
        'Albania',
        'Algeria',
        'Andorra',
        'Angola',
        'Antigua & Deps',
        'Argentina',
        'Armenia',
        'Australia',
        'Austria',
        'Azerbaijan',
        'Bahamas',
        'Bahrain',
        'Bangladesh',
        'Barbados',
        'Belarus',
        'Belgium',
        'Belize',
        'Benin',
        'Bermuda',
        'Bhutan',
        'Bolivia',
        'Bosnia Herzegovina',
        'Botswana',
        'Brazil',
        'Brunei',
        'Bulgaria',
        'Burkina',
        'Burundi',
        'Cambodia',
        'Cameroon',
        'Canada',
        'Cape Verde',
        'Central African Rep',
        'Chad',
        'Chile',
        'China',
        'Colombia',
        'Comoros',
        'Congo',
        'Congo (Democratic Rep)',
        'Costa Rica',
        'Croatia',
        'Cuba',
        'Cyprus',
        'Czech Republic',
        'Denmark',
        'Djibouti',
        'Dominica',
        'Dominican Republic',
        'East Timor',
        'Ecuador',
        'Egypt',
        'El Salvador',
        'Equatorial Guinea',
        'Eritrea',
        'Estonia',
        'Eswatini',
        'Ethiopia',
        'Fiji',
        'Finland',
        'France',
        'Gabon',
        'Gambia',
        'Georgia',
        'Germany',
        'Ghana',
        'Greece',
        'Grenada',
        'Guatemala',
        'Guinea',
        'Guinea-Bissau',
        'Guyana',
        'Haiti',
        'Honduras',
        'Hungary',
        'Iceland',
        'India',
        'Indonesia',
        'Iran',
        'Iraq',
        'Ireland (Republic)',
        'Israel',
        'Italy',
        'Ivory Coast',
        'Jamaica',
        'Japan',
        'Jordan',
        'Kazakhstan',
        'Kenya',
        'Kiribati',
        'Korea North',
        'Korea South',
        'Kosovo',
        'Kuwait',
        'Kyrgyzstan',
        'Laos',
        'Latvia',
        'Lebanon',
        'Lesotho',
        'Liberia',
        'Libya',
        'Liechtenstein',
        'Lithuania',
        'Luxembourg',
        'Macedonia',
        'Madagascar',
        'Malawi',
        'Malaysia',
        'Maldives',
        'Mali',
        'Malta',
        'Marshall Islands',
        'Mauritania',
        'Mauritius',
        'Mexico',
        'Micronesia',
        'Moldova',
        'Monaco',
        'Mongolia',
        'Montenegro',
        'Morocco',
        'Mozambique',
        'Myanmar',
        'Namibia',
        'Nauru',
        'Nepal',
        'Netherlands',
        'New Zealand',
        'Nicaragua',
        'Niger',
        'Nigeria',
        'Norway',
        'Oman',
        'Pakistan',
        'Palau',
        'Palestine',
        'Panama',
        'Papua New Guinea',
        'Paraguay',
        'Peru',
        'Philippines',
        'Poland',
        'Portugal',
        'Qatar',
        'Romania',
        'Russian Federation',
        'Rwanda',
        'St Kitts & Nevis',
        'St Lucia',
        'Saint Vincent & the Grenadines',
        'Samoa',
        'San Marino',
        'Sao Tome & Principe',
        'Saudi Arabia',
        'Senegal',
        'Serbia',
        'Seychelles',
        'Sierra Leone',
        'Singapore',
        'Slovakia',
        'Slovenia',
        'Solomon Islands',
        'Somalia',
        'South Africa',
        'South Sudan',
        'Spain',
        'Sri Lanka',
        'Sudan',
        'Suriname',
        'Sweden',
        'Switzerland',
        'Syria',
        'Taiwan',
        'Tajikistan',
        'Tanzania',
        'Thailand',
        'Togo',
        'Tonga',
        'Trinidad & Tobago',
        'Tunisia',
        'Turkey',
        'Turkmenistan',
        'Tuvalu',
        'Uganda',
        'Ukraine',
        'United Arab Emirates',
        'United Kingdom',
        'United States',
        'Uruguay',
        'Uzbekistan',
        'Vanuatu',
        'Vatican City',
        'Venezuela',
        'Vietnam',
        'Yemen',
        'Zambia',
        'Zimbabwe',
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
        // IMAGE
        $filename = $new . '.' . $this->file->getClientOriginalName();
        $filePath = $this->file->storeAs(Staff::UPLOAD_DIR, $filename, 'public');
        $resizedImage = $this->_resizeImage($this->file, $filename, Staff::UPLOAD_DIR);

        $staff = new Staff();
        $staff->name = $this->name;
        $staff->slug = Str::slug($this->name);
        $staff->role = $this->role;
        $staff->birth_date = $this->birthDate;
        $staff->birth_location = $this->birthLocation;
        $staff->nationality = $this->nationality;
        $staff->bio = $this->bio;
        $staff->contract_from = $this->contractFrom;
        $staff->contract_until = $this->contractUntil;
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
        $this->birthDate = $staff->birth_date;
        $this->birthLocation = $staff->birth_location;
        $this->nationality = $staff->nationality;
        $this->bio = $staff->bio;
        $this->contractFrom = $staff->contract_from;
        $this->contractUntil = $staff->contract_until;
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
                $staff->birth_date = $this->birthDate;
                $staff->birth_location = $this->birthLocation;
                $staff->nationality = $this->nationality;
                $staff->bio = $this->bio;
                $staff->contract_from = $this->contractFrom;
                $staff->contract_until = $this->contractUntil;
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
