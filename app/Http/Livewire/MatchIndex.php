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
    public $seasons = [];
    public $competition;
    public $competitionId;
    public $stadion;
    public $stadionId;
    public $home_team;
    public $home_team_id;
    public $away_team;
    public $away_team_id;
    public $full_time_home_goal;
    public $full_time_away_goal;
    public $fixture_match;
    public $date;
    public $matchId;
    public $full_time_result;
    public $results = [
        'W',
        'D',
        'L',
    ];
    public $matchStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rules = [
        'season' =>  'required',
    ];

    public function mount($id)
    {
        $this->match = Matchs::find($id);
        $this->date = today()->format('Y-m-d');
        $yearNow = Carbon::now()->format('Y');
        for ($i=$yearNow; $i < $yearNow + 2 ; $i++) {
            $seas = $i . '/' . $i + 1;
            array_push($this->seasons, $seas);
        }
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
  
        Matchs::create([
            'season' => $this->season,
            'competition_id' => $this->competitionId,
            'stadion_id' => $this->stadionId,
            'home_team' => $this->home_team_id,
            'away_team' => $this->away_team_id,
            'fixture_match' => $this->date,
            'full_time_home_goal' => $this->full_time_home_goal,
            'full_time_away_goal' => $this->full_time_away_goal,
            'full_time_result' => $this->full_time_result,

            'slug' => $this->slugGenerate($this->season, $this->competitionId, $this->home_team_id, $this->away_team_id),
            'status' => $this->matchStatus,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Matchs created successfully']);
    }

    public function slugGenerate($season, $competitionId, $homeId, $awayId)
    {
        // 2023_bundesliga_fcbayern_vs_hamburg

        $competition = Competition::find($this->competitionId);
        $this->competition = $competition->name;

        $home = Club::find($this->home_team_id);
        $this->home_team = $home->slug;

        $away = Club::find($this->away_team_id);
        $this->away_team = $away->slug;

        $slug = $this->season . '_' . $this->competititon . '_' . $this->home_team . '_vs_' . $this->away_team . '_' . time();
        return $slug;
    } 

    public function showEditModal($matchId)
    {
        $this->reset(['matchName']);
        $this->matchId = $matchId;
        $match = Matchs::find($matchId);
        $this->season = $match->season;
        $this->competitionId = $match->competition_id;
        $this->stadionId = $match->stadion_id;
        $this->home_team_id = $match->home_team;
        $this->away_team_id = $match->away_team;
        $this->full_time_home_goal = $match->full_time_home_goal;
        $this->full_time_away_goal = $match->full_time_away_goal;
        $this->fixture_match = $match->fixture_match;
        $this->full_time_result = $match->full_time_result;
        $this->matchStatus = $match->status;
        $this->showMatchsModal = true;
    }
    
    public function updateMatchs()
    {
        $match = Matchs::findOrFail($this->matchId);
        $this->validate();
        
        if ($this->matchId) {
            if ($match) {
                $match->update([
                    'season' => $this->season,
                    'competition_id' => $this->competitionId,
                    'stadion_id' => $this->stadionId,
                    'home_team' => $this->home_team_id,
                    'away_team' => $this->away_team_id,
                    'fixture_match' => $this->date,
                    'full_time_home_goal' => $this->full_time_home_goal,
                    'full_time_away_goal' => $this->full_time_away_goal,
                    'full_time_result' => $this->full_time_result,

                    'slug' => $this->slugGenerate($this->season, $this->competitionId, $this->home_team_id, $this->away_team_id),
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
        return view('livewire.match-index', [
            'matchs' => Matchs::search('id', $this->search)->orderBy('id', $this->sort)->paginate($this->perPage),
            'competition' => Competition::OrderBy('name', 'asc')->get(),
            'stadions' => Stadion::OrderBy('name', 'asc')->get(),
            'clubs' => Club::OrderBy('name', 'asc')->get(),
        ]);
    }
}
