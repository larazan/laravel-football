<?php

namespace App\Http\Livewire;

use App\Models\Statistic;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\Component;

class StatisticIndex extends Component
{
    use WithPagination;
    
    public $showStatisticModal = false;
    public $matchId;
    public $playerId;
    public $minutePlay;
    public $goals;
    public $assists;
    public $subsOn;
    public $subsOff;
    public $yellowCard;
    public $redCard;
    public $statisticId;
    
    public $statisticStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rule = [
        // 'report' => 'required',
    ];

    public function mount($matchId)
    {
        $this->matchId = $matchId;
    }

    public function showCreateModal()
    {
        $this->showStatisticModal = true;
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
        Statistic::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Statistic deleted successfully']);
    }

    public function createStatistic()
    {
        $this->validate();

        $statistic = new Statistic();
        $statistic->player_id = $this->playerId;
        $statistic->minute_play = $this->minutePlay;
        $statistic->goals = $this->goals;
        $statistic->assists = $this->assists;
        $statistic->subs_on = $this->subsOn;
        $statistic->subs_off = $this->subsOff;
        $statistic->yellow_card = $this->yellowCard;
        $statistic->red_card = $this->redCard;
        $statistic->match_id = $this->matchId;
        $statistic->status = $this->statisticStatus;

        $statistic->save();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Statistic created successfully']);
    }

    public function showEditModal($statisticId)
    {
        $this->reset(['name']);
        $this->statisticId = $statisticId;
        $statistic = Statistic::find($statisticId);
        $this->playerId = $statistic->player_id;
        $this->minutePlay = $statistic->minute_play;
        $this->goals = $statistic->goals;
        $this->assists = $statistic->assists;
        $this->subsOn = $statistic->subs_on;
        $this->subsOff = $statistic->subs_off;
        $this->yellowCard = $statistic->yellow_card;
        $this->redCard = $statistic->red_card;
        $this->matchId = $statistic->match_id;
        $this->statisticStatus = $statistic->status;

        $this->showStatisticModal = true;
    }
    
    public function updateStatistic()
    {
        $statistic = Statistic::findOrFail($this->statisticId);
        $this->validate();
  
        if ($this->statisticId) {
            if ($statistic) {

                $statistic = Statistic::where('id', $this->statisticId);
                $statistic->player_id = $this->playerId;
                $statistic->minute_play = $this->minutePlay;
                $statistic->goals = $this->goals;
                $statistic->assists = $this->assists;
                $statistic->subs_on = $this->subsOn;
                $statistic->subs_off = $this->subsOff;
                $statistic->yellow_card = $this->yellowCard;
                $statistic->red_card = $this->redCard;
                $statistic->match_id = $this->matchId;
                $statistic->status = $this->statisticStatus;

                $statistic->save();
            }
        }

        $this->reset();
        $this->showStatisticModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Statistic updated successfully']);
    }

    public function deleteStatistic($statisticId)
    {
        $statistic = Statistic::findOrFail($statisticId);
        
        $statistic->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Statistic deleted successfully']);
    }

    public function closeStatisticModal()
    {
        $this->showStatisticModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.statistic-index');
    }
}
