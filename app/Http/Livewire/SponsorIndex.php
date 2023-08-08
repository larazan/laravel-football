<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use App\Models\Sponsor;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\Component;

class SponsorIndex extends Component
{

    use WithFileUploads, WithPagination;

    public $showSponsorModal = false;
    public $title;
    public $sponsorId;
    public $file;
    public $oldImage;
    public $sponsorStatus = 'inactive';
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
        'title' => 'required',
            // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function showCreateModal()
    {
        $this->showSponsorModal = true;
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
        Sponsor::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Sponsor deleted successfully']);
    }

    public function createSponsor()
    {
        $this->validate();
  
        $new = Str::slug($this->title) . '_' . time();
        // IMAGE
        $filename = $new . '.' . $this->file->getClientOriginalName();
        $filePath = $this->file->storeAs(Sponsor::UPLOAD_DIR, $filename, 'public');

        $sponsor = new Sponsor();
        $sponsor->title = $this->title;
        $sponsor->status = $this->sponsorStatus;

        if (!empty($this->file)) {
            $sponsor->origin = $filePath;
        }

        $sponsor->save();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Sponsor created successfully']);
    }

    public function showEditModal($sponsorId)
    {
        $this->reset(['title']);
        $this->sponsorId = $sponsorId;
        $sponsor = Sponsor::find($sponsorId);
        $this->title = $sponsor->title;
        $this->oldImage = $sponsor->original;
        $this->sponsorStatus = $sponsor->status;

        $this->showSponsorModal = true;
    }
    
    public function updateSponsor()
    {
        $sponsor = Sponsor::findOrFail($this->sponsorId);
        $this->validate();
  
        $new = Str::slug($this->title) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();
        
        if ($this->sponsorId) {
            if ($sponsor) {
               
                // IMAGE
                $filePath = $this->file->storeAs(Sponsor::UPLOAD_DIR, $filename, 'public');

                $sponsor = Sponsor::where('id', $this->sponsorId);
                $sponsor->title = $this->title;
                $sponsor->status = $this->sponsorStatus;

                if (!empty($this->file)) {
                    // delete image
			        $this->deleteImage($this->sponsorId);

                    $sponsor->origin = $filePath;
                }

                $sponsor->save();
                
            }
        }

        $this->reset();
        $this->showSponsorModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Sponsor updated successfully']);
    }

    public function deleteSponsor($sponsorId)
    {
        $sponsor = Sponsor::findOrFail($sponsorId);
        // delete image
        $this->deleteImage($this->sponsorId);
        
        $sponsor->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Sponsor deleted successfully']);
    }

    public function closeSponsorModal()
    {
        $this->showSponsorModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function deleteImage($id = null) {
        $sponsorImage = Sponsor::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$sponsorImage->original)) {
            Storage::delete($path.$sponsorImage->original);
		}
		
        // if (Storage::exists($path.$sponsorImage->small)) {
        //     Storage::delete($path.$sponsorImage->small);
        // }   

		// if (Storage::exists($path.$sponsorImage->medium)) {
        //     Storage::delete($path.$sponsorImage->medium);
        // }

        // if (Storage::exists($path.$sponsorImage->extra_large)) {
        //     Storage::delete($path.$sponsorImage->extra_large);
        // }
             
        return true;
    }

    public function render()
    {
        return view('livewire.sponsor-index', [
            'sponsors' => Sponsor::search('title', $this->search)->orderBy('title', $this->sort)->paginate($this->perPage)
        ]);
    }
}
