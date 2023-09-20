<?php

namespace App\Http\Livewire;

use App\Models\Player;
use Livewire\Component;

class SearchSelect extends Component
{
    public $playerName = '';
    public $players;
    public $playerId = NULL;

    protected $rules = [

    ];

    public function mount()
    {
        $this->players = Player::all();
    }

    public function getPlayerProperty()
    {
        if ($this->playerName != NULL) {
            return Player::where('name', 'like', '%'.$this->playerName.'%')->paginate(10);
        } else {
            return Player::all();
        }
    }

    public function render()
    {
        return view('livewire.search-select');
    }
}
