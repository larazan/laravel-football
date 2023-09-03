<?php

namespace App\Http\Livewire;

use App\Models\Matchs;
use App\Models\Competition;
use App\Models\Club;
use App\Models\Stadion;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithPagination;
use Livewire\Component;

class MatchIndex extends Component
{
    use WithPagination;

    public $showMatchsModal = false;
    public $match;
    public $season;
    public $competition;
    public $competitionId;
    public $stadion;
    public $stadionId;
    public $homeTeam;
    public $homeTeamId;
    public $awayTeam;
    public $awayTeamId;
    public $fullTimeHomeGoal;
    public $fullTimeAwayGoal;
    // public $fixtureMatch;
    public $date;
    public $position;
    public $positionOption = [
        'away',
        'home'
    ];
    public $matchId;
    public $fullTimeResult;
    public $results = [
        'W' => 'Win',
        'D' => 'Draw',
        'L' => 'Lose',
    ];
    public $matchStatus = 'inactive';
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
        'season' =>  'required',
    ];

    public function mount()
    {
    }

    public function showCreateModal()
    {
        $this->showMatchsModal = true;
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
        Matchs::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Matchs deleted successfully']);
    }

    public function createMatchs()
    {
        $this->validate();

        // 
        if ($this->position === 'home') {
            $homeTeam = $this->currentClubId;
            $awayTeam = $this->opponent;
        }

        if ($this->position === 'away') {
            $homeTeam = $this->opponent;
            $awayTeam = $this->currentClubId;
        }
  
        Matchs::create([
            'season' => $this->season,
            'competition_id' => $this->competitionId,
            'stadion_id' => $this->stadionId,
            'home_team' => $homeTeam,
            'away_team' => $awayTeam,
            'fixture_match' => $this->date,
            'full_time_home_goal' => $this->fullTimeHomeGoal,
            'full_time_away_goal' => $this->fullTimeAwayGoal,
            'full_time_result' => $this->fullTimeResult,

            'slug' => $this->slugGenerate($this->season, $this->competitionId, $homeTeam, $awayTeam),
            'status' => $this->matchStatus,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Matchs created successfully']);
    }

    public function slugGenerate($season, $competitionId, $homeId, $awayId)
    {
        // 2023_bundesliga_fcbayern_vs_hamburg

        $competition = Competition::find($competitionId);
        $this->competition = $competition->slug;

        $home = Club::find($homeId);
        $this->homeTeam = $home->slug;

        $away = Club::find($awayId);
        $this->awayTeam = $away->slug;

        $slug = $season . '_' . $this->competititon . '_' . $this->homeTeam . '_vs_' . $this->awayTeam . '_' . time();
        return $slug;
    } 

    public function showEditModal($matchId)
    {
        $this->reset(['name']);
        $this->matchId = $matchId;
        $match = Matchs::find($matchId);
        $this->season = $match->season;
        $this->competitionId = $match->competition_id;
        $this->stadionId = $match->stadion_id;
        $this->homeTeamId = $match->home_team;
        $this->awayTeamId = $match->away_team;
        $this->fullTimeHomeGoal = $match->full_time_home_goal;
        $this->fullTimeAwayGoal = $match->full_time_away_goal;
        $this->date = $match->fixture_match;
        $this->fullTimeResult = $match->full_time_result;
        $this->matchStatus = $match->status;
        $this->showMatchsModal = true;
    }
    
    public function updateMatchs()
    {
        $match = Matchs::findOrFail($this->matchId);
        $this->validate();
        
        if ($this->matchId) {
            if ($match) {
                 // 
                if ($this->position === 'home') {
                    $homeTeam = $this->currentClubId;
                    $awayTeam = $this->opponent;
                }

                if ($this->position === 'away') {
                    $homeTeam = $this->opponent;
                    $awayTeam = $this->currentClubId;
                }

                $match->update([
                    'season' => $this->season,
                    'competition_id' => $this->competitionId,
                    'stadion_id' => $this->stadionId,
                    'home_team' => $homeTeam,
                    'away_team' => $awayTeam,
                    'fixture_match' => $this->date,
                    'full_time_home_goal' => $this->fullTimeHomeGoal,
                    'full_time_away_goal' => $this->fullTimeAwayGoal,
                    'full_time_result' => $this->fullTimeResult,

                    'slug' => $this->slugGenerate($this->season, $this->competitionId, $homeTeam, $awayTeam),
                    'status' => $this->matchStatus,
                ]);
                
            }
        }

        $this->reset();
        $this->showMatchsModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Matchs updated successfully']);
    }

    public function deleteMatchs($matchId)
    {
        $match = Matchs::findOrFail($matchId);
        $match->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Matchs deleted successfully']);
    }

    public function closeMatchsModal()
    {
        $this->showMatchsModal = false;
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
        for ($i=$yearNow; $i < $yearNow + 2 ; $i++) {
            $seas = $i . '/' . $i + 1;
            array_push($seasons, $seas);
        }

        return view('livewire.match-index', [
            'matchs' => Matchs::search('id', $this->search)->orderBy('id', $this->sort)->paginate($this->perPage),
            'competitions' => Competition::OrderBy('name', 'asc')->get(),
            'stadions' => Stadion::OrderBy('name', 'asc')->get(),
            'clubs' => Club::OrderBy('name', 'asc')->get(),
            'seasonOption' => $seasons,
        ]);
    }
}
