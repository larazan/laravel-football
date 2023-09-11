<?php

namespace App\Http\Livewire;

use App\Models\Player;
use App\Models\Schedule;
use Livewire\WithPagination;
use Livewire\Component;

class SquadIndex extends Component
{
    use WithPagination;

    public $showPlayerModal = false;
    public $club;
    public $clubId;
    public $name;
    public $birthDate;
    public $birthLocation;
    public $nationality;
    public $bio;
    public $height;
    public $weight;
    public $facebook;
    public $instagram;
    public $twitter;
    public $contractFrom;
    public $contractUntil;
    public $preferedFoot;
    public $shirtNumber;
    public $position;
    public $playerId;
    public $oldImage;

    public $search = '';
    public $sort = 'asc';
    public $perPage = 10;

    public $showPlayerDetailModal = false;
    public $showConfirmModal = false;
    public $deleteId = '';

    public function mount()
    {
        $this->clubId = Schedule::pinnedClub();
    }

    public function hydrate()
    {
        $this->clubId = Schedule::pinnedClub();
    }

    public function showDetailModal($playerId)
    {
        $this->reset(['name']);
        $this->playerId = $playerId;
        $player = Player::find($playerId);
        $this->clubId = $player->club_id;
        $this->name = $player->name;
        $this->position = $player->position->name;
        $this->birthDate = $player->birth_date;
        $this->birthLocation = $player->birth_location;
        $this->nationality = $player->nationality;
        $this->bio = $player->bio;
        $this->contractFrom = $player->contract_from;
        $this->contractUntil = $player->contract_until;
        $this->preferedFoot = $player->prefered_foot;
        $this->shirtNumber = $player->shirt_number;
        $this->height = $player->height;
        $this->weight = $player->weight;
        $this->oldImage = $player->small;
        $this->facebook = $player->facebook;
        $this->instagram = $player->instagram;
        $this->twitter = $player->twitter;

        $this->showPlayerDetailModal = true;
    }

    public function closeDetailModal()
    {
        $this->reset();
        $this->showPlayerDetailModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.squad-index', [
            'players' => Player::search('name', $this->search)->where('club_id', $this->clubId)->orderBy('name', $this->sort)->paginate($this->perPage),
        ]);
    }
}
