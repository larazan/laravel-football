<?php

namespace App\Http\Livewire;

use App\Models\Schedule;
use App\Models\Matchs;
use App\Models\Competition;
use App\Models\Club;
use App\Models\Stadion;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithPagination;
use Livewire\Component;

class ScheduleIndex extends Component
{
    use WithPagination;

    public $showScheduleModal = false;
    public $schedule;
    public $season;
    public $seasonOption = [];
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
    public $opponent;
    public $position;
    public $positionOption = [
        'away',
        'home'
    ];
    public $scheduleId;
    public $scheduleStatus = 'inactive';
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
        $this->schedule = Schedule::find($id);
        $this->date = today()->format('Y-m-d');
        $yearNow = Carbon::now()->format('Y');
        for ($i=$yearNow; $i < $yearNow + 2 ; $i++) {
            $seas = $i . '/' . $i + 1;
            array_push($this->seasonOption, $seas);
        }
    }

    public function showCreateModal()
    {
        $this->showScheduleModal = true;
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
        Schedule::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Schedule deleted successfully']);
    }

    public function createSchedule()
    {
        $this->validate();
  
        Schedule::create([
            'season' => $this->season,
            'competition_id' => $this->competitionId,
            'stadion_id' => $this->stadionId,
            'home_team' => $this->home_team_id,
            'away_team' => $this->away_team_id,
            'fixture_match' => $this->date,
            'full_time_home_goal' => $this->full_time_home_goal,
            'full_time_away_goal' => $this->full_time_away_goal,

            'slug' => $this->slugGenerate($this->season, $this->competitionId, $this->home_team_id, $this->away_team_id),
            'status' => $this->scheduleStatus,
        ]);

        // Matchs create
        Matchs::create([
            'season' => $this->season,
            'competition_id' => $this->competitionId,
            'stadion_id' => $this->stadionId,
            'home_team' => $this->home_team_id,
            'away_team' => $this->away_team_id,
            'fixture_match' => $this->date,
            'full_time_home_goal' => $this->full_time_home_goal,
            'full_time_away_goal' => $this->full_time_away_goal,

            'slug' => $this->slugGenerate($this->season, $this->competitionId, $this->home_team_id, $this->away_team_id),
            'status' => $this->scheduleStatus,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Schedule created successfully']);
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

    public function showEditModal($scheduleId)
    {
        $this->reset(['scheduleName']);
        $this->scheduleId = $scheduleId;
        $schedule = Schedule::find($scheduleId);
        $this->season = $schedule->season;
        $this->competitionId = $schedule->competition_id;
        $this->stadionId = $schedule->stadion_id;
        $this->home_team_id = $schedule->home_team;
        $this->away_team_id = $schedule->away_team;
        $this->full_time_home_goal = $schedule->full_time_home_goal;
        $this->full_time_away_goal = $schedule->full_time_away_goal;
        $this->fixture_match = $schedule->fixture_match;
        $this->scheduleStatus = $schedule->status;
        $this->showScheduleModal = true;
    }
    
    public function updateSchedule()
    {
        $schedule = Schedule::findOrFail($this->scheduleId);
        $match = Matchs::findOrFail($this->scheduleId);
        $this->validate();
        
        if ($this->scheduleId) {
            if ($schedule) {
                $schedule->update([
                    'season' => $this->season,
                    'competition_id' => $this->competitionId,
                    'stadion_id' => $this->stadionId,
                    'home_team' => $this->home_team_id,
                    'away_team' => $this->away_team_id,
                    'fixture_match' => $this->date,
                    'full_time_home_goal' => $this->full_time_home_goal,
                    'full_time_away_goal' => $this->full_time_away_goal,

                    'slug' => $this->slugGenerate($this->season, $this->competitionId, $this->home_team_id, $this->away_team_id),
                    'status' => $this->scheduleStatus,
                ]);
                
                // Matchs Update
                $match->update([
                    'season' => $this->season,
                    'competition_id' => $this->competitionId,
                    'stadion_id' => $this->stadionId,
                    'home_team' => $this->home_team_id,
                    'away_team' => $this->away_team_id,
                    'fixture_match' => $this->date,
                    'full_time_home_goal' => $this->full_time_home_goal,
                    'full_time_away_goal' => $this->full_time_away_goal,

                    'slug' => $this->slugGenerate($this->season, $this->competitionId, $this->home_team_id, $this->away_team_id),
                    'status' => $this->scheduleStatus,
                ]);
            }
        }

        $this->reset();
        $this->showScheduleModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Schedule updated successfully']);
    }

    public function deleteSchedule($scheduleId)
    {
        $schedule = Schedule::findOrFail($scheduleId);
        $schedule->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Schedule deleted successfully']);
    }

    public function closeScheduleModal()
    {
        $this->showScheduleModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.schedule-index', [
            'schedules' => Schedule::search('id', $this->search)->orderBy('id', $this->sort)->paginate($this->perPage),
            'competition' => Competition::OrderBy('name', 'asc')->get(),
            'stadions' => Stadion::OrderBy('name', 'asc')->get(),
            'clubs' => Club::OrderBy('name', 'asc')->get(),
        ]);
    }
}
