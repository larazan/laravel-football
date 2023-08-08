<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use App\Models\Club;
use App\Models\Stadion;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\Component;

class ClubIndex extends Component
{
    use WithFileUploads, WithPagination;

    public $showClubModal = false;
    public $name;
    public $info;
    public $stadion;
    public $stadionId;
    public $clubId;
    public $file;
    public $oldImage;
    public $clubStatus = 'inactive';
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
        $this->showClubModal = true;
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
        Club::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Club deleted successfully']);
    }

    public function createClub()
    {
        $this->validate();
  
        $new = Str::slug($this->name) . '_' . time();
        // IMAGE
        $filename = $new . '.' . $this->file->getClientOriginalName();
        $filePath = $this->file->storeAs(Club::UPLOAD_DIR, $filename, 'public');

        $club = new Club();
        $club->name = $this->name;
        $club->slug = Str::slug($this->name);
        $club->info = $this->info;
        $club->stadion_id = $this->stadionId;
        $club->status = $this->clubStatus;

        if (!empty($this->file)) {
            $club->logo = $filePath;
        }

        $club->save();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Club created successfully']);
    }

    public function showEditModal($clubId)
    {
        $this->reset(['name']);
        $this->clubId = $clubId;
        $club = Club::find($clubId);
        $this->name = $club->name;
        $this->info = $club->info;
        $this->stadion = $club->stadion_id;
        $this->oldImage = $club->logo;
        $this->clubStatus = $club->status;

        $this->showClubModal = true;
    }
    
    public function updateClub()
    {
        $club = Club::findOrFail($this->clubId);
        $this->validate();
  
        $new = Str::slug($this->name) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();
        
        if ($this->clubId) {
            if ($club) {
               
                // IMAGE
                $filePath = $this->file->storeAs(Club::UPLOAD_DIR, $filename, 'public');

                $club = Club::where('id', $this->clubId);
                $club->name = $this->name;
                $club->slug = Str::slug($this->name);
                $club->info = $this->info;
                $club->stadion_id = $this->stadionId;
                $club->status = $this->clubStatus;

                if (!empty($this->file)) {
                    // delete image
			        $this->deleteImage($this->clubId);

                    $club->logo = $filePath;
                }

                $club->save();
                
            }
        }

        $this->reset();
        $this->showClubModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Club updated successfully']);
    }

    public function deleteClub($clubId)
    {
        $club = Club::findOrFail($clubId);
        // delete image
        $this->deleteImage($this->clubId);
        
        $club->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Club deleted successfully']);
    }

    public function closeClubModal()
    {
        $this->showClubModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function deleteImage($id = null) {
        $clubImage = Club::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$clubImage->logo)) {
            Storage::delete($path.$clubImage->logo);
		}
             
        return true;
    }

    public function render()
    {
        return view('livewire.club-index', [
            'clubs' => Club::search('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage),
            'stadions' => Stadion::OrderBy('name', 'asc')->get(),
        ]);
    }
}
