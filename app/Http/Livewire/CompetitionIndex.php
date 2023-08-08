<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use App\Models\Competition;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\WithPagination;
use Livewire\Component;

class CompetitionIndex extends Component
{

    use WithFileUploads, WithPagination;

    public $showCompetitionModal = false;
    public $name;
    public $info;
    public $competitionId;
    public $file;
    public $oldImage;
    public $competitionStatus = 'inactive';
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
        $this->showCompetitionModal = true;
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
        Competition::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Competition deleted successfully']);
    }

    public function createCompetition()
    {
        $this->validate();
  
        $new = Str::slug($this->name) . '_' . time();
        // IMAGE
        $filename = $new . '.' . $this->file->getClientOriginalName();
        $filePath = $this->file->storeAs(Competition::UPLOAD_DIR, $filename, 'public');

        $competition = new Competition();
        $competition->name = $this->name;
        $competition->info = $this->info;
        $competition->status = $this->competitionStatus;

        if (!empty($this->file)) {
            $competition->thropy = $filePath;
        }

        $competition->save();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Competition created successfully']);
    }

    public function showEditModal($competitionId)
    {
        $this->reset(['name']);
        $this->competitionId = $competitionId;
        $competition = Competition::find($competitionId);
        $this->name = $competition->name;
        $this->info = $competition->info;
        $this->oldImage = $competition->thropy;
        $this->competitionStatus = $competition->status;

        $this->showCompetitionModal = true;
    }
    
    public function updateCompetition()
    {
        $competition = Competition::findOrFail($this->competitionId);
        $this->validate();
  
        $new = Str::slug($this->name) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();
        
        if ($this->competitionId) {
            if ($competition) {
               
                // IMAGE
                $filePath = $this->file->storeAs(Competition::UPLOAD_DIR, $filename, 'public');

                $competition = Competition::where('id', $this->competitionId);
                $competition->name = $this->name;
                $competition->info = $this->info;
                $competition->status = $this->competitionStatus;

                if (!empty($this->file)) {
                    // delete image
			        $this->deleteImage($this->competitionId);

                    $competition->thropy = $filePath;
                }

                $competition->save();
                
            }
        }

        $this->reset();
        $this->showCompetitionModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Competition updated successfully']);
    }

    public function deleteCompetition($competitionId)
    {
        $competition = Competition::findOrFail($competitionId);
        // delete image
        $this->deleteImage($this->competitionId);
        
        $competition->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Competition deleted successfully']);
    }

    public function closeCompetitionModal()
    {
        $this->showCompetitionModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function deleteImage($id = null) {
        $competitionImage = Competition::where(['id' => $id])->first();
		$path = 'storage/';

        if (Storage::exists($path.$competitionImage->thropy)) {
            Storage::delete($path.$competitionImage->thropy);
		}
		
        return true;
    }

    public function render()
    {
        return view('livewire.competition-index', [
            'competitions' => Competition::search('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage)
        ]);
    }
}
