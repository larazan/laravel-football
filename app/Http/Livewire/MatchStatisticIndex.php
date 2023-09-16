<?php

namespace App\Http\Livewire;

use App\Models\MatchStatistic;
use App\Models\Matchs;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\Component;

class MatchStatisticIndex extends Component
{
    use WithPagination;
    
    public $showMatchStatisticModal = false;
    public $matchId;
    public $homePossession;
    public $homeOffsides;
    public $homeFouls;
    public $homeTotalShots;
    public $homeShotsOnTarget;
    public $homeCorners;
    public $homePasses;
    public $homePassAccuracy;
    public $homeCrosses;
    public $homeYellowCards;
    public $homeRedCards;
    public $awayPossession;
    public $awayOffsides;
    public $awayFouls;
    public $awayTotalShots;
    public $awayShotsOnTarget;
    public $awayCorners;
    public $awayPasses;
    public $awayPassAccuracy;
    public $awayCrosses;
    public $awayYellowCards;
    public $awayRedCards;
    public $matchStatisticId;
    
    public $matchStatisticStatus = 'inactive';
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
        // 'report' => 'required',
        // 'file' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048',
    ];

    public function mount($matchId)
    {
        $this->matchId = $matchId;
        $statistics = MatchStatistic::where('match_id', $this->matchId)->get();
        if ($statistics->count() > 0)
        {
            $this->matchStatisticId = $statistics->id;
        }  
    }

    public function updated()
    {
        $statistics = MatchStatistic::where('match_id', $this->matchId)->get();
        if ($statistics->count() > 0)
        {
            $this->matchStatisticId = $statistics->id;
        }  
    }

    public function showCreateModal()
    {
        $this->showMatchStatisticModal = true;
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
        MatchStatistic::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'MatchStatistic deleted successfully']);
    }

    public function createMatchStatistic()
    {
        $this->validate();

        $matchStatistic = new MatchStatistic;
        $matchStatistic->home_possession = $this->homePossession;
        $matchStatistic->home_offsides = $this->homeOffsides;
        $matchStatistic->home_fouls = $this->homeFouls;
        $matchStatistic->home_total_shots = $this->homeTotalShots;
        $matchStatistic->home_shots_on_target = $this->homeShotsOnTarget;
        $matchStatistic->home_corners = $this->homeCorners;
        $matchStatistic->home_passes = $this->homePasses;
        $matchStatistic->home_pass_accuracy = $this->homePassAccuracy;
        $matchStatistic->home_crosses = $this->homeCrosses;
        $matchStatistic->home_yellow_cards = $this->homeYellowCards;
        $matchStatistic->home_red_cards = $this->homeRedCards;
        $matchStatistic->away_possession = $this->awayPossession;
        $matchStatistic->away_offsides = $this->awayOffsides;
        $matchStatistic->away_fouls = $this->awayFouls;
        $matchStatistic->away_total_shots = $this->awayTotalShots;
        $matchStatistic->away_shots_on_target = $this->awayShotsOnTarget;
        $matchStatistic->away_corners = $this->awayCorners;
        $matchStatistic->away_passes = $this->awayPasses;
        $matchStatistic->away_pass_accuracy = $this->awayPassAccuracy;
        $matchStatistic->away_crosses = $this->awayCrosses;
        $matchStatistic->away_yellow_cards = $this->awayYellowCards;
        $matchStatistic->away_red_cards = $this->awayRedCards;
        $matchStatistic->match_id = $this->matchId;

        $matchStatistic->save();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'MatchStatistic created successfully']);
    }

    public function showEditModal($matchStatisticId)
    {
        $this->reset(['name']);
        $this->matchStatisticId = $matchStatisticId;
        $matchStatistic = MatchStatistic::find($matchStatisticId);
        $this->homePossession = $matchStatistic->home_possession;
        $this->homeOffsides = $matchStatistic->home_offsides;
        $this->homeFouls = $matchStatistic->home_fouls;
        $this->homeTotalShots = $matchStatistic->home_total_shots;
        $this->homeShotsOnTarget = $matchStatistic->home_shots_on_target;
        $this->homeCorners = $matchStatistic->home_corners;
        $this->homePasses = $matchStatistic->home_passes;
        $this->homeCrosses = $matchStatistic->home_crosses;
        $this->awayPossession = $matchStatistic->away_possession;
        $this->awayOffsides = $matchStatistic->away_offsides;
        $this->awayFouls = $matchStatistic->away_fouls;
        $this->awayTotalShots = $matchStatistic->away_total_shots;
        $this->awayShotsOnTarget = $matchStatistic->away_shots_on_target;
        $this->awayCorners = $matchStatistic->away_corners;
        $this->awayPasses = $matchStatistic->away_passes;
        $this->awayCrosses = $matchStatistic->away_crosses;

        $this->showMatchStatisticModal = true;
    }
    
    public function updateMatchStatistic()
    {
        $this->validate();

        $matchStatistic = MatchStatistic::findOrFail($this->matchStatisticId);
  
        if ($this->matchStatisticId) {
            if ($matchStatistic) {

                // $matchStatistic = MatchStatistic::where('id', $this->matchStatisticId);
                $matchStatistic->home_possession = $this->homePossession;
                $matchStatistic->home_offsides = $this->homeOffsides;
                $matchStatistic->home_fouls = $this->homeFouls;
                $matchStatistic->home_total_shots = $this->homeTotalShots;
                $matchStatistic->home_shots_on_target = $this->homeShotsOnTarget;
                $matchStatistic->home_corners = $this->homeCorners;
                $matchStatistic->home_passes = $this->homePasses;
                $matchStatistic->home_pass_accuracy = $this->homePassAccuracy;
                $matchStatistic->home_crosses = $this->homeCrosses;
                $matchStatistic->home_yellow_cards = $this->homeYellowCards;
                $matchStatistic->home_red_cards = $this->homeRedCards;
                $matchStatistic->away_possession = $this->awayPossession;
                $matchStatistic->away_offsides = $this->awayOffsides;
                $matchStatistic->away_fouls = $this->awayFouls;
                $matchStatistic->away_total_shots = $this->awayTotalShots;
                $matchStatistic->away_shots_on_target = $this->awayShotsOnTarget;
                $matchStatistic->away_corners = $this->awayCorners;
                $matchStatistic->away_passes = $this->awayPasses;
                $matchStatistic->away_pass_accuracy = $this->awayPassAccuracy;
                $matchStatistic->away_crosses = $this->awayCrosses;
                $matchStatistic->away_yellow_cards = $this->awayYellowCards;
                $matchStatistic->away_red_cards = $this->awayRedCards;
                $matchStatistic->match_id = $this->matchId;

                $matchStatistic->save();
            }
        }

        $this->reset();
        $this->showMatchStatisticModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'MatchStatistic updated successfully']);
    }

    public function deleteMatchStatistic($matchStatisticId)
    {
        $matchStatistic = MatchStatistic::findOrFail($matchStatisticId);
        
        $matchStatistic->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'MatchStatistic deleted successfully']);
    }

    public function closeMatchStatisticModal()
    {
        $this->showMatchStatisticModal = false;
        $this->reset();
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.match-statistic-index', [
            'matchs' => Matchs::where('id', $this->matchId)->get(),
            'statistics' => MatchStatistic::where('match_id', $this->matchId)->get(),
        ]);
    }
}
