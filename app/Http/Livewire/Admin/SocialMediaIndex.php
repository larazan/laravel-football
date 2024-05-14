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
          
        $socmed = new SocialMedia;
        $socmed->name = $this->name;
        $socmed->link = $this->link;
        $socmed->status = $this->socmedStatus;

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
        $this->socmedStatus = $socmed->status;

        $this->showSocialMediaModal = true;
    }
    
    public function updateSocialMedia()
    {
        $this->validate();
        $socmed = SocialMedia::findOrFail($this->socmedId);
                
        if ($this->socmedId) {
            if ($socmed) {
               
                // $socmed = SocialMedia::where('id', $this->socmedId);
                $socmed->name = $this->name;
                $socmed->link = $this->link;
                $socmed->status = $this->socmedStatus;

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

    public function render()
    {
        return view('livewire.admin.social-media-index', [
            'socmeds' => SocialMedia::liveSearch('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage),
        ])->layout('components.layouts.app');
    }
}
