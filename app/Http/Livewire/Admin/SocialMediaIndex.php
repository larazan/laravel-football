<?php

namespace App\Http\Livewire\Admin;

use Livewire\WithFileUploads;
use App\Models\SocialMedia;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\Component;

class SocialMediaIndex extends Component
{
    use WithFileUploads, WithPagination;

    public $showSocialMediaModal = false;
    public $name;
    public $socmedId;
    public $link;
    public $file;
    public $oldImage;
    public $socmedStatus = 'inactive';
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
        $this->showSocialMediaModal = true;
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
        SocialMedia::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'SocialMedia deleted successfully']);
    }

    public function createSocialMedia()
    {
        $this->validate();
  
        $new = Str::slug($this->name) . '_' . time();
        
        $socmed = new SocialMedia;
        $socmed->name = $this->name;
        $socmed->link = $this->link;
        $socmed->status = $this->socmedStatus;

        if (!empty($this->file)) {
            // IMAGE
            $filename = $new . '.' . $this->file->getClientOriginalName();
            $filePath = $this->file->storeAs(SocialMedia::UPLOAD_DIR, $filename, 'public');
            $socmed->icon = $filePath;
        }

        $socmed->save();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'SocialMedia created successfully']);
    }

    public function showEditModal($socmedId)
    {
        $this->reset(['name']);
        $this->socmedId = $socmedId;
        $socmed = SocialMedia::find($socmedId);
        $this->name = $socmed->name;
        $this->link = $socmed->link;
        $this->oldImage = $socmed->icon;
        $this->socmedStatus = $socmed->status;

        $this->showSocialMediaModal = true;
    }
    
    public function updateSocialMedia()
    {
        $this->validate();
        $socmed = SocialMedia::findOrFail($this->socmedId);
        
        $new = Str::slug($this->name) . '_' . time();
        
        if ($this->socmedId) {
            if ($socmed) {
               
                // $socmed = SocialMedia::where('id', $this->socmedId);
                $socmed->name = $this->name;
                $socmed->link = $this->link;
                $socmed->status = $this->socmedStatus;

                if (!empty($this->file)) {
                    // delete image
			        $this->deleteImage($this->socmedId);

                    // IMAGE
                    $filename = $new . '.' . $this->file->getClientOriginalName();
                    $filePath = $this->file->storeAs(SocialMedia::UPLOAD_DIR, $filename, 'public');
                    $socmed->icon = $filePath;
                }

                $socmed->save();
                
            }
        }

        $this->reset();
        $this->showSocialMediaModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'SocialMedia updated successfully']);
    }

    public function deleteSocialMedia($socmedId)
    {
        $socmed = SocialMedia::findOrFail($socmedId);
        // delete image
        $this->deleteImage($this->socmedId);
        
        $socmed->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'SocialMedia deleted successfully']);
    }

    public function closeSocialMediaModal()
    {
        $this->showSocialMediaModal = false;
        $this->reset(
            [
                'socmedId',
                'name',
                'link',
                'socmedStatus',
            ]
        );
    }

    public function resetFilters()
    {
        $this->reset(['search', 'sort', 'perPage']);
    }

    public function deleteImage($id = null) {
        $socmedImage = SocialMedia::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$socmedImage->icon)) {
            Storage::delete($path.$socmedImage->icon);
		}
		
        // if (Storage::exists($path.$socmedImage->small)) {
        //     Storage::delete($path.$socmedImage->small);
        // }   

		// if (Storage::exists($path.$socmedImage->medium)) {
        //     Storage::delete($path.$socmedImage->medium);
        // }

        // if (Storage::exists($path.$socmedImage->extra_large)) {
        //     Storage::delete($path.$socmedImage->extra_large);
        // }
             
        return true;
    }

    public function render()
    {
        return view('livewire.admin.social-media-index', [
            'socmeds' => SocialMedia::search('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage),
        ]);
    }
}