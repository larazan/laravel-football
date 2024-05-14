<?php

namespace App\Http\Livewire\Admin;

use App\Models\Lineup;
use App\Models\Matchs;
use App\Models\Player;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Component;

class MatchLineup extends Component
{
    use WithFileUploads, WithPagination;
    
    public $matchId;
    public $lineupId;
    public $home_player1;
    public $home_player2;
    public $home_player3;
    public $home_player4;
    public $home_player5;
    public $home_player6;
    public $home_player7;
    public $home_player8;
    public $home_player9;
    public $home_player10;
    public $home_player11;
    public $home_player12;
    public $home_player13;
    public $home_player14;
    public $home_player15;
    public $home_player16;
    public $away_player1;
    public $away_player2;
    public $away_player3;
    public $away_player4;
    public $away_player5;
    public $away_player6;
    public $away_player7;
    public $away_player8;
    public $away_player9;
    public $away_player10;
    public $away_player11;
    public $away_player12;
    public $away_player13;
    public $away_player14;
    public $away_player15;
    public $away_player16;

    public $lineup;
    public $queryPlayer = '';
    public $homePlayers = [];
    public $awayPlayers = [];
    public $allHomePlayers = [];
    public $allAwayPlayers = [];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 10;

    public $showConfirmModal = false;
    public $deleteId = '';

    public function mount($matchId)
    {
        $this->matchId = $matchId;
    
        $this->allHomePlayers = [
            [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [],
        ];

        $this->allAwayPlayers = [
            [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [],
        ];
    }

    public function addHomePlayer()
    {
        $this->allHomePlayers[] = ['player_id' => ''];
    }

    public function addAwayPlayer()
    {
        $this->allAwayPlayers[] = ['player_id' => ''];
    }

    public function removeHomePlayer($index)
    {
        unset($this->allHomePlayers[$index]);
        $this->allHomePlayers = array_values($this->allHomePlayers);
    }

    public function removeAwayPlayer($index)
    {
        unset($this->allAwayPlayers[$index]);
        $this->allAwayPlayers = array_values($this->allAwayPlayers);
    }


    public function createHomeLineup()
    {
        dd($this->allHomePlayers);
        // $this->validate();
        $index = 1;
        $index2 = 1;

        $lineup = new Lineup();
        $lineup->match_id = $this->matchId;
        foreach ($this->allHomePlayers as $key => $player) {
            $lineup->home_player . $index = $player['player_id'];
            $index++;
        }

        foreach ($this->allAwayPlayers as $key => $player) {
            $lineup->away_player . $index = $player['player_id'];
            $index2++;
        }
      
        $lineup->save();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Lineup created successfully']);
    }

    public function deleteLineup($lineupId)
    {
        $lineup = Lineup::findOrFail($lineupId);
        // delete image
		$this->deleteImage($this->lineupId);
        
        $lineup->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Lineup deleted successfully']);
    }

    
    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        $match = Matchs::findOrFail($this->matchId);
        $home_team = $match->home_team;
        $away_team = $match->away_team;
        
        return view('livewire.admin.match-lineup', [
            'matchs' => Matchs::where('id', $this->matchId)->get(),
            'home_players' => Player::where('club_id', $home_team)->get(), 
            'away_players' => Player::where('club_id', $away_team)->get(), 
        ])->layout('components.layouts.app');
    }

    public function backTo()
    {
        return redirect('/admin/matchs');
    }
}
