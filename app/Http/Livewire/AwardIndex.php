<?php

namespace App\Http\Livewire;

use App\Models\Award;
use App\Models\Competition;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithPagination;
use Livewire\Component;

class AwardIndex extends Component
{
    use WithPagination;

    public $showAwardModal = false;
    public $currentYear;
    public $year;
    public $years = [];
    public $awardId;
    public $competition;
    public $competitionId;
    public $awardStatus = 'inactive';
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
    ];

    public function mount()
    {
        $this->currentYear = now()->year;
        $yearNow = Carbon::now()->format('Y');
        for ($i=2010; $i < $yearNow + 2 ; $i++) { 
            array_push($this->years, $i);
        }
    } 

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'awardStatus' => 'required',
        ]);
    }

    public function showCreateModal()
    {
        $this->showAwardModal = true;
    }
/////// 
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
        Award::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Award deleted']);
    }
///////
    public function createAward()
    {

        Award::create([
          'year' => $this->year,
          'competition_id' => $this->competition,
          'status' => $this->awardStatus,
        ]);
        
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Genre created successfully']);
    }

    public function showEditModal($awardId)
    {
        $this->awardId = $awardId;
        $this->loadAward();
        $this->showAwardModal = true;
    }

    public function loadAward()
    {
        $award = Award::findOrFail($this->awardId);
        $this->year = $award->year;
        $this->competition = $award->competition_id;
        $this->awardStatus = $award->status;
    }

    public function updateAward()
    {
        $this->validate();
        $award = Award::findOrFail($this->awardId);
        $award->update([
            'year' => $this->year,
            'competition_id' => $this->competition,
            'status' => $this->awardStatus
        ]);
        
        $this->reset();
        $this->showAwardModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Award updated']);
    }

    public function closeAwardModal()
    {
        $this->showAwardModal = false;
        $this->reset();
        $this->resetValidation();
    }

    public function deleteAward($awardId)
    {
        Award::findOrFail($awardId)->delete();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Award deleted']);
        $this->reset();
    }

    public function resetFilters()
    {
        $this->reset(['search', 'sort', 'perPage']);
    }

    public function render()
    {
        return view('livewire.award-index', [
            'awards' => Award::search('id', $this->search)->orderBy('id', $this->sort)->paginate($this->perPage),
            'competitions' => Competition::OrderBy('name', $this->sort)->get()
        ]);
    }
}
