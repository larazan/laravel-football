<?php

namespace App\Http\Livewire\Admin;

use Livewire\WithFileUploads;
use App\Models\Partner;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\Component;

class PartnerIndex extends Component
{
    use WithFileUploads, WithPagination;

    public $showPartnerModal = false;
    public $title;
    public $partnerId;
    public $file;
    public $oldImage;
    public $sizeTol = Partner::LARGE;
    public $partnerStatus = 'inactive';
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
        $this->showPartnerModal = true;
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
        Partner::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Partner deleted successfully']);
    }

    public function createPartner()
    {
        $this->validate();
  
        $new = Str::slug($this->title) . '_' . time();
        
        $partner = new Partner;
        $partner->title = $this->title;
        $partner->status = $this->partnerStatus;

        if (!empty($this->file)) {
            // IMAGE
            $filename = $new . '.' . $this->file->getClientOriginalName();
            $filePath = $this->file->storeAs(Partner::UPLOAD_DIR, $filename, 'public');
            $partner->original = $filePath;
        }

        $partner->save();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Partner created successfully']);
    }

    public function showEditModal($partnerId)
    {
        $this->reset(['title']);
        $this->partnerId = $partnerId;
        $partner = Partner::find($partnerId);
        $this->title = $partner->title;
        $this->oldImage = $partner->original;
        $this->partnerStatus = $partner->status;

        $this->showPartnerModal = true;
    }
    
    public function updatePartner()
    {
        $this->validate();
        $partner = Partner::findOrFail($this->partnerId);
        
        $new = Str::slug($this->title) . '_' . time();
        
        if ($this->partnerId) {
            if ($partner) {
               
                // $partner = Partner::where('id', $this->partnerId);
                $partner->title = $this->title;
                $partner->status = $this->partnerStatus;

                if (!empty($this->file)) {
                    // delete image
			        $this->deleteImage($this->partnerId);

                    // IMAGE
                    $filename = $new . '.' . $this->file->getClientOriginalName();
                    $filePath = $this->file->storeAs(Partner::UPLOAD_DIR, $filename, 'public');
                    $partner->original = $filePath;
                }

                $partner->save();
                
            }
        }

        $this->reset();
        $this->showPartnerModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Partner updated successfully']);
    }

    public function deletePartner($partnerId)
    {
        $partner = Partner::findOrFail($partnerId);
        // delete image
        $this->deleteImage($this->partnerId);
        
        $partner->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Partner deleted successfully']);
    }

    public function closePartnerModal()
    {
        $this->showPartnerModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function deleteImage($id = null) {
        $partnerImage = Partner::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$partnerImage->original)) {
            Storage::delete($path.$partnerImage->original);
		}
		
        // if (Storage::exists($path.$partnerImage->small)) {
        //     Storage::delete($path.$partnerImage->small);
        // }   

		// if (Storage::exists($path.$partnerImage->medium)) {
        //     Storage::delete($path.$partnerImage->medium);
        // }

        // if (Storage::exists($path.$partnerImage->extra_large)) {
        //     Storage::delete($path.$partnerImage->extra_large);
        // }
             
        return true;
    }

    public function render()
    {
        return view('livewire.admin.partner-index', [
            'partners' => Partner::search('title', $this->search)->orderBy('title', $this->sort)->paginate($this->perPage),
        ]);
    }
}
