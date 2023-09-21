<?php

namespace App\Exports;

use App\Models\Schedule;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ScheduleExport implements FromQuery, WithMapping, WithHeadings
{
    use Exportable;

    public function map($schedule) : array
    {
        return [
            $schedule->id,
            $schedule->season,
            $schedule->competition_id,
            $schedule->stadion_id,
            $schedule->home_team,
            $schedule->away_team,
            $schedule->full_time_home_goal,
            $schedule->full_time_away_goal,
            $schedule->fixture_match,
            $schedule->hour,
            $schedule->minute,
        ];
    }

    public function headings(): array
    {
        return [
            '#ID',
            'DATE',
            'TIME',
            'HOME',
            'AWAY',
            'HOME GOAL',
            'AWAY GOAL',
            'COMPETITION',
            'SEASON',
            'STADION',
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function query()
    {
        return Schedule::orderBy('id', 'asc');
    }
}
