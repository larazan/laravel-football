<?php

namespace App\Http\Livewire;

use App\Models\TeamLeague;
use App\Models\Club;
use Carbon\Carbon;
use Livewire\WithPagination;
use Livewire\Component;

class TeamLeagueIndex extends Component
{
    use  WithPagination;

    public $showTeamModal = false;
    public $season;
    public $seasonOption;
    public $date;
    public $team;
    public $teamId;

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    public $showConfirmModal = false;
    public $deleteId = '';

    // protected $rules = [
    //     'name' => 'required|unique:leagues',
    // ];

    public function mount($id)
    {
        $this->date = today()->format('Y-m-d');
        $yearNow = Carbon::now()->format('Y');
        for ($i=$yearNow; $i < $yearNow + 2 ; $i++) {
            $seas = $i . '/' . $i + 1;
            array_push($this->seasonOption, $seas);
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            
        ]);
    }

    public function showCreateModal()
    {
        $this->showTeamModal = true;
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
        TeamLeague::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'TeamLeague deleted']);
    }
///////
    public function createTeamLeague()
    {

        TeamLeague::create([
            'season' => $this->season,
            'team_id' => $this->team,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Team League created successfully']);
    }

    public function showEditModal($teamId)
    {
        $this->teamId = $teamId;
        $this->loadTeamLeague();
        $this->showTeamModal = true;
    }

    public function loadTeamLeague()
    {
        $team = TeamLeague::findOrFail($this->teamId);
        $this->season = $team->season; 
        $this->team = $team->team_id;
    }

    public function updateTeamLeague()
    {
        $this->validate();
        $team = TeamLeague::findOrFail($this->teamId);
        $team->update([
            'season' => $this->season,
            'team_id' => $this->team,
            
        ]);
        
        $this->reset();
        $this->showTeamModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Team League updated']);
    }

    public function closeTeamLeagueModal()
    {
        $this->showTeamModal = false;
        $this->reset();
        $this->resetValidation();
    }

    public function deleteTeamLeague($teamId)
    {
        TeamLeague::findOrFail($teamId)->delete();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Team League deleted']);
        $this->reset();
    }

    public function resetFilters()
    {
        $this->reset();
    }
    
    public function render()
    {
        return view('livewire.team-league-index', [
            'teams' => TeamLeague::search('season', $this->search)->orderBy('season', $this->sort)->paginate($this->perPage),
            'clubs' => Club::OrderBy('name', 'asc')->get(),
        ]);
    }
}
