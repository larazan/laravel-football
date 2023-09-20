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
    // public $seasonOption = [];
    public $date;
    public $team;
    public $teamId;

    public $search = '';
    public $sort = 'asc';
    public $perPage = 20;
    public $perSeason;

    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rules = [
        'season' => 'required',
    ];

    public function mount()
    {
        $this->date = today()->format('Y-m-d');
        $yearNow = Carbon::now()->format('Y');
        $this->perSeason = $yearNow . '/' . $yearNow + 1;
    }

    public function boot()
    {
        $yearNow = Carbon::now()->format('Y');
        $this->perSeason = $yearNow . '/' . $yearNow + 1;
    }

    public function hydrate()
    {
        $yearNow = Carbon::now()->format('Y');
        $this->perSeason = $yearNow . '/' . $yearNow + 1;
    }

    public function seasoned()
    {
        $seasons = [];
        $this->date = today()->format('Y-m-d');
        $yearNow = Carbon::now()->format('Y');
        for ($i=$yearNow; $i < $yearNow + 2 ; $i++) {
            $seas = $i . '/' . $i + 1;
            array_push($seasons, $seas);
        }

        return $seasons;
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
        $arr = [
            ['team_id', '=', $this->team],
            ['season', '=', $this->season],
        ];

        if (TeamLeague::where($arr)->exists()) {
            $this->dispatchBrowserEvent('banner-message', ['style' => 'error', 'message' => 'Team League already created']);
            return;
        }
       
        $team = new TeamLeague;
        $team->season = $this->season;
        $team->team_id = $this->team;

        $team->save();

        $this->reset();
        $yearNow = Carbon::now()->format('Y');
        $this->perSeason = $yearNow . '/' . $yearNow + 1;
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
        // $team->update([
        //     'season' => $this->season,
        //     'team_id' => $this->team,
            
        // ]);
        $team->season = $this->season;
        $team->team_id = $this->team;

        $team->save();
        
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
        $seasons = [];
        $this->date = today()->format('Y-m-d');
        $yearNow = Carbon::now()->format('Y');
        for ($i=$yearNow - 1; $i < $yearNow + 2 ; $i++) {
            $seas = $i . '/' . $i + 1;
            array_push($seasons, $seas);
        }


        return view('livewire.team-league-index', [
            'teams' => TeamLeague::where('season', $this->perSeason)->orderBy('id', $this->sort)->paginate($this->perPage),
            'clubs' => Club::OrderBy('name', 'asc')->get(),
            'seasonOption' => $seasons,
        ]);
    }
}
