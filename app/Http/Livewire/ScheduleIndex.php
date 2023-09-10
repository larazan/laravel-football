<?php

namespace App\Http\Livewire;

use App\Models\Schedule;
use App\Models\Matchs;
use App\Models\Competition;
use App\Models\Club;
use App\Models\Setting;
use App\Models\Stadion;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithPagination;
use Livewire\Component;

class ScheduleIndex extends Component
{
    use WithPagination;

    public $currentClubId;
    public $current;
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
        'home',
        // 'neutral'
    ];
    public $scheduleId;
    public $scheduleStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 10;
    public $perSeason;

    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rules = [
        'season' =>  'required',
    ];

    public function boot()
    {
        $this->currentClubId = Schedule::pinnedClub();
    }

    public function mount()
    {
        // $this->date = today()->format('Y-m-d');
        $yearNow = Carbon::now()->format('Y');
        $this->perSeason = $yearNow . '/' . $yearNow + 1;
    }

    public function hydrate()
    {
        $this->currentClubId = Schedule::pinnedClub();
        $yearNow = Carbon::now()->format('Y');
        $this->perSeason = $yearNow . '/' . $yearNow + 1;
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
            'hour' => strval($this->hour),
            'minute' => strval($this->minute),

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
            'hour' => strval($this->hour),
            'minute' => strval($this->minute),

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
        $this->reset();
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
                    'hour' => strval($this->hour),
                    'minute' => strval($this->minute),

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
                    'hour' => strval($this->hour),
                    'minute' => strval($this->minute),

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
        for ($i=$yearNow - 1; $i < $yearNow + 2 ; $i++) {
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

        $seasonNow = Carbon::now()->format('Y') . '/' . Carbon::now()->format('Y') + 1;

        $dates = Schedule::selectRaw('id, slug, season, competition_id, stadion_id, home_team, away_team, fixture_match, hour, minute, DATE_FORMAT(fixture_match, "%M") as match_date')
            ->orderBy('match_date', 'asc')
            ->where('season', $this->perSeason)
            ->get()
            ->groupBy('match_date');

        return view('livewire.schedule-index', [
            'dates' => $dates,
            // 'schedules' => Schedule::search('id', $this->search)->orderBy('id', $this->sort)->paginate($this->perPage),
            'competitions' => Competition::OrderBy('name', 'asc')->get(),
            'stadions' => Stadion::OrderBy('name', 'asc')->get(),
            'clubs' => Club::OrderBy('name', 'asc')->get(),
            'seasonOption' => $seasons,
            'hourOption' => $hours,
            'minuteOption' => $minutes,
            
        ]);
    }
}
