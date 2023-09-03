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

    public $currentClubId = 9;
    public $showScheduleModal = false;
    public $schedule;
    public $season;
    // public $seasonOption = [];
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
    public $hour;
    public $minute;
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

    public function mount()
    {
        $this->date = today()->format('Y-m-d');
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
  
        // 
        if ($this->position === 'home') {
            $homeTeam = $this->currentClubId;
            $awayTeam = $this->opponent;
        }

        if ($this->position === 'away') {
            $homeTeam = $this->opponent;
            $awayTeam = $this->currentClubId;
        }

        Schedule::create([
            'season' => $this->season,
            'competition_id' => $this->competitionId,
            'stadion_id' => $this->stadionId,
            'home_team' => $homeTeam,
            'away_team' => $awayTeam,
            'fixture_match' => $this->date,
            'full_time_home_goal' => $this->fullTimeHomeGoal,
            'full_time_away_goal' => $this->fullTimeAwayGoal,
            'hour' => $this->hour,
            'minute' => $this->minute,

            'slug' => $this->slugGenerate($this->season, $this->competitionId, $homeTeam, $awayTeam),
            'status' => $this->scheduleStatus,
        ]);

        // Matchs create
        Matchs::create([
            'season' => $this->season,
            'competition_id' => $this->competitionId,
            'stadion_id' => $this->stadionId,
            'home_team' => $homeTeam,
            'away_team' => $awayTeam,
            'fixture_match' => $this->date,
            'full_time_home_goal' => $this->fullTimeHomeGoal,
            'full_time_away_goal' => $this->fullTimeAwayGoal,
            'hour' => $this->hour,
            'minute' => $this->minute,

            'slug' => $this->slugGenerate($this->season, $this->competitionId, $homeTeam, $awayTeam),
            'status' => $this->scheduleStatus,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Schedule created successfully']);
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

        $slug = $season . '_' . $this->competition . '_' . $this->homeTeam . '_vs_' . $this->awayTeam . '_' . time();
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
        $this->homeTeamId = $schedule->home_team;
        $this->awayTeamId = $schedule->away_team;
        $this->fullTimeHomeGoal = $schedule->full_time_home_goal;
        $this->fullTimeAwayGoal = $schedule->full_time_away_goal;
        $this->date = $schedule->fixture_match;
        $this->hour = $schedule->hour;
        $this->minute = $schedule->minute;
        $this->scheduleStatus = $schedule->status;
        $this->showScheduleModal = true;
    }
    
    public function updateSchedule()
    {
        $schedule = Schedule::findOrFail($this->scheduleId);
        $match = Matchs::findOrFail($this->scheduleId);
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
        
        if ($this->scheduleId) {
            if ($schedule) {
                $schedule->update([
                    'season' => $this->season,
                    'competition_id' => $this->competitionId,
                    'stadion_id' => $this->stadionId,
                    'home_team' => $homeTeam,
                    'away_team' => $awayTeam,
                    'fixture_match' => $this->date,
                    'full_time_home_goal' => $this->fullTimeHomeGoal,
                    'full_time_away_goal' => $this->fullTimeAwayGoal,
                    'hour' => $this->hour,
                    'minute' => $this->minute,

                    'slug' => $this->slugGenerate($this->season, $this->competitionId, $homeTeam, $awayTeam),
                    'status' => $this->scheduleStatus,
                ]);
                
                // Matchs Update
                $match->update([
                    'season' => $this->season,
                    'competition_id' => $this->competitionId,
                    'stadion_id' => $this->stadionId,
                    'home_team' => $homeTeam,
                    'away_team' => $awayTeam,
                    'fixture_match' => $this->date,
                    'full_time_home_goal' => $this->fullTimeHomeGoal,
                    'full_time_away_goal' => $this->fullTimeAwayGoal,
                    'hour' => $this->hour,
                    'minute' => $this->minute,

                    'slug' => $this->slugGenerate($this->season, $this->competitionId, $homeTeam, $awayTeam),
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

        $match = Matchs::findOrFail($scheduleId);
        $match->delete();
        
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
        $seasons = [];
        $this->date = today()->format('Y-m-d');
        $yearNow = Carbon::now()->format('Y');
        for ($i=$yearNow; $i < $yearNow + 2 ; $i++) {
            $seas = $i . '/' . $i + 1;
            array_push($seasons, $seas);
        }

        $hours = [];
        for ($i=0; $i < 24 ; $i++) { 
            array_push($hours, sprintf("%02d", $i));
        }

        $minutes = [];
        for ($i=0; $i < 60 ; $i++) { 
            array_push($minutes, sprintf("%02d", $i));
        }

        return view('livewire.schedule-index', [
            'schedules' => Schedule::search('id', $this->search)->orderBy('id', $this->sort)->paginate($this->perPage),
            'competitions' => Competition::OrderBy('name', 'asc')->get(),
            'stadions' => Stadion::OrderBy('name', 'asc')->get(),
            'clubs' => Club::OrderBy('name', 'asc')->get(),
            'seasonOption' => $seasons,
            'hourOption' => $hours,
            'minuteOption' => $minutes,
            
        ]);
    }
}
