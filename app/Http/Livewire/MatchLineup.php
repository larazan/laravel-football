<?php

namespace App\Http\Livewire;

use App\Models\Lineup;
use App\Models\Player;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Component;

class MatchLineup extends Component
{
    use WithFileUploads, WithPagination;
    
    public $showLineupModal = false;
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
    public $home_players = [];
    public $away_players = [];
    public $lineupStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    public $showConfirmModal = false;
    public $deleteId = '';

    public function mount($matchId)
    {
        $this->matchId = $matchId;
    }

    public function updateQueryPlayer()
    {
        $this->home_players = Player::search('name', $this->queryPlayer)->get();
        $this->away_players = Player::search('name', $this->queryPlayer)->get();
    }

    public function addPlayer($playerId)
    {
        $player = Player::findOrFail($playerId);
        $this->lineup->players()->attach($player);
        $this->reset('queryPlayer');
        $this->emit('playerAdded');
    }

    public function detachPlayer($playerId)
    {
        $this->lineup->players()->detach($playerId);
        $this->emit('playerDetached');
    }

    public function showCreateModal()
    {
        $this->showLineupModal = true;
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
        Lineup::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Lineup deleted successfully']);
    }

    public function createLineup()
    {
        $this->validate();

        $lineup = new Lineup();
        $lineup->match_id = $this->matchId;
        $lineup->home_player1 = $this->home_player1;
      
        $lineup->save();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Lineup created successfully']);
    }

    public function showEditModal($lineupId)
    {
        $this->reset(['name']);
        $this->lineupId = $lineupId;
        $lineup = Lineup::find($lineupId);

        $this->showLineupModal = true;
    }
    
    public function updateLineup()
    {
        $lineup = Lineup::findOrFail($this->lineupId);
        $this->validate();
  
        $new = Str::random(5) . '_' . time();
        $filename = $new . '.' . $this->file->getClientOriginalName();
        
        if ($this->lineupId) {
            if ($lineup) {

                $lineup = Lineup::where('id', $this->lineupId);
                $lineup->match_id = $this->matchId;

                $lineup->save();
            }
        }

        $this->reset();
        $this->showLineupModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Lineup updated successfully']);
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

    public function closeLineupModal()
    {
        $this->showLineupModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.match-lineup');
    }
}
