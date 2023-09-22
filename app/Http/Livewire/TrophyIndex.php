<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use App\Models\Trophy;
use App\Models\Competition;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\Component;

class TrophyIndex extends Component
{
    use WithFileUploads, WithPagination;

    public $showTrophyModal = false;
    public $sizeTol = '600x600';
    public $competition;
    public $trophyId;
    public $file;
    public $oldImage;
    public $trophyStatus = 'inactive';
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
        // 'name' => 'required',
        // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function showCreateModal()
    {
        $this->showTrophyModal = true;
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
        Trophy::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Trophy deleted successfully']);
    }

    public function createTrophy()
    {
        $this->validate();
  
        $new = Str::random(10) . '_' . time();

        $trophy = new Trophy();
        $trophy->competition_id = $this->competition;

        if (!empty($this->file)) {
            // IMAGE
            $filename = $new . '.' . $this->file->getClientOriginalName();
            $filePath = $this->file->storeAs(Trophy::UPLOAD_DIR, $filename, 'public');
            $trophy->trophy = $filePath;
        }

        $trophy->save();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Trophy created successfully']);
    }

    public function showEditModal($trophyId)
    {
        $this->reset();
        $this->trophyId = $trophyId;
        $trophy = Trophy::find($trophyId);
        $this->competition = $trophy->competition_id;
        $this->oldImage = $trophy->trophy;
        $this->trophyStatus = $trophy->status;

        $this->showTrophyModal = true;
    }
    
    public function updateTrophy()
    {
        $this->validate();

        $trophy = Trophy::findOrFail($this->trophyId);
  
        $new = Str::random(10) . '_' . time();
        
        if ($this->trophyId) {
            if ($trophy) {

                $trophy->competition_id = $this->competition;

                if (!empty($this->file)) {
                    // delete image
			        $this->deleteImage($this->trophyId);

                    // IMAGE
                    $filename = $new . '.' . $this->file->getClientOriginalName();
                    $filePath = $this->file->storeAs(Trophy::UPLOAD_DIR, $filename, 'public');

                    $trophy->trophy = $filePath;
                }

                $trophy->save();
                
            }
        }

        $this->reset();
        $this->showTrophyModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Trophy updated successfully']);
    }

    public function deleteTrophy($trophyId)
    {
        $trophy = Trophy::findOrFail($trophyId);
        // delete image
        $this->deleteImage($this->trophyId);
        
        $trophy->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Trophy deleted successfully']);
    }

    public function closeTrophyModal()
    {
        $this->showTrophyModal = false;
        $this->reset();
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function deleteImage($id = null) {
        $trophyImage = Trophy::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$trophyImage->trophy)) {
            Storage::delete($path.$trophyImage->trophy);
		}
		
        return true;
    }

    public function render()
    {
        return view('livewire.trophy-index', [
            'trophies' => Trophy::orderBy('id', $this->sort)->paginate($this->perPage),
            'competitions' => Competition::orderBy('id', 'asc')->get()
        ]);
    }
}
