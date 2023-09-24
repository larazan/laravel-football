<?php

namespace App\Http\Livewire;

use App\Models\TeamLeague;
use App\Models\Club;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class LeagueIndex extends Component
{
    public $showLeagueModal = false;
    public $season;
    public $date;
    public $totalPoints;
    public $totalGoals;
    public $totalGoalsreceived;
    public $totalGoalsdiff;
    public $totalWins;
    public $totalDraws;
    public $totalLosses;
    public $homePoints;
    public $homeGoals;
    public $homeGoalsreceived;
    public $homeGoalsdiff;
    public $homeWins;
    public $homeDraws;
    public $homeLosses;
    public $awayPoints;
    public $awayGoals;
    public $awayGoalsreceived;
    public $awayGoalsdiff;
    public $awayWins;
    public $awayDraws;
    public $awayLosses;
    public $leagueId;
    public $team;
    public $teamId;
    public $clubName;

    public $perSeason;
    

    public $showConfirmModal = false;
    public $deleteId = '';

    public $perPage = 20;

    // protected $rules = [
    //     // 'name' => 'required|unique:leagues',
    // ];

    public function mount()
    {
        $yearNow = Carbon::now()->format('Y');
        $this->perSeason = $yearNow . '/' . $yearNow + 1;
    }

    public function updated()
    {
        $yearNow = Carbon::now()->format('Y');
        $this->perSeason = $yearNow . '/' . $yearNow + 1;
    }

    public function showCreateModal()
    {
        $this->showLeagueModal = true;
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
            'team_id' => $this->teamId,
            'total_points' => $this->totalPoints,
            'total_goals' => $this->totalGoals,
            'total_goalsreceived' => $this->totalGoalsreceived,
            'total_goalsdiff' => $this->totalGoalsdiff,
            'total_wins' => $this->totalWins,
            'total_draws' => $this->totalDraws,
            'total_losses' => $this->totalLosses,
            'home_points' => $this->homePoints,
            'home_goals' => $this->homeGoals,
            'home_goalsreceived' => $this->homeGoalsreceived,
            'home_goalsdiff' => $this->homeGoalsdiff,
            'home_wins' => $this->homeWins,
            'home_draws' => $this->homeDraws,
            'home_losses' => $this->homeLosses,
            'away_points' => $this->awayPoints,
            'away_goals' => $this->awayGoals,
            'away_goalsreceived' => $this->awayGoalsreceived,
            'away_goalsdiff' => $this->awayGoalsdiff,
            'away_wins' => $this->awayWins,
            'away_draws' => $this->awayDraws,
            'away_losses' => $this->awayLosses,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Team League created successfully']);
    }

    public function showEditModal($leagueId)
    {
        $this->leagueId = $leagueId;
        $this->loadTeamLeague();
        $this->showLeagueModal = true;
    }

    public function loadTeamLeague()
    {
        $league = TeamLeague::findOrFail($this->leagueId);
        $this->season = $league->season; 
        $this->teamId = $league->team_id;
        $this->clubName = $league->club->name;
        $this->totalPoints = $league->total_points;
        $this->totalGoals = $league->total_goals;
        $this->totalGoalsreceived = $league->total_goalsreceived;
        $this->totalGoalsdiff = $league->total_goalsdiff;
        $this->totalWins = $league->total_wins;
        $this->totalDraws = $league->total_draws;
        $this->totalLosses = $league->total_losses;
        $this->homePoints = $league->home_points;
        $this->homeGoals = $league->home_goals;
        $this->homeGoalsreceived = $league->home_goalsreceived;
        $this->homeGoalsdiff = $league->home_goalsdiff;
        $this->homeWins = $league->home_wins;
        $this->homeDraws = $league->home_draws;
        $this->homeLosses = $league->home_losses;
        $this->awayPoints = $league->away_points;
        $this->awayGoals = $league->away_goals;
        $this->awayGoalsreceived = $league->away_goalsreceived;
        $this->awayGoalsdiff = $league->away_goalsdiff;
        $this->awayWins = $league->away_wins;
        $this->awayDraws = $league->away_draws;
        $this->awayLosses = $league->away_losses;
    }

    public function updateTeamLeague()
    {
        // $this->validate();
        $league = TeamLeague::findOrFail($this->leagueId);
        $league->update([
            'season' => $this->season,
            'team_id' => $this->teamId,
            'total_points' => $this->totalPoints,
            'total_goals' => $this->totalGoals,
            'total_goalsreceived' => $this->totalGoalsreceived,
            'total_goalsdiff' => $this->totalGoalsdiff,
            'total_wins' => $this->totalWins,
            'total_draws' => $this->totalDraws,
            'total_losses' => $this->totalLosses,
            'home_points' => $this->homePoints,
            'home_goals' => $this->homeGoals,
            'home_goalsreceived' => $this->homeGoalsreceived,
            'home_goalsdiff' => $this->homeGoalsdiff,
            'home_wins' => $this->homeWins,
            'home_draws' => $this->homeDraws,
            'home_losses' => $this->homeLosses,
            'away_points' => $this->awayPoints,
            'away_goals' => $this->awayGoals,
            'away_goalsreceived' => $this->awayGoalsreceived,
            'away_goalsdiff' => $this->awayGoalsdiff,
            'away_wins' => $this->awayWins,
            'away_draws' => $this->awayDraws,
            'away_losses' => $this->awayLosses,
        ]);
        
        $this->reset();
        $this->showLeagueModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Team League updated']);
    }

    public function closeTeamLeagueModal()
    {
        $this->showLeagueModal = false;
        $this->reset();
        $this->resetValidation();
    }

    public function deleteTeamLeague($leagueId)
    {
        TeamLeague::findOrFail($leagueId)->delete();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Team League deleted']);
        $this->reset();
    }

    public function resetFilters()
    {
        $this->reset(['search', 'sort', 'perPage']);
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

        return view('livewire.league-index', [
            'teams' => TeamLeague::where('season', $this->perSeason)->orderBy('total_points', 'desc')->get(),
            'clubs' => Club::OrderBy('name', 'asc')->get(),
            'seasonOption' => $seasons,
        ]);
    }

    public function addLeague()
    {
        return redirect('/admin/team-leagues');
    }
}
