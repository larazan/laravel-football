<?php

namespace App\Http\Livewire\Schedule;

use App\Models\Event as Schedule;
use Carbon\CarbonImmutable;
use Livewire\Component;

class Index extends Component
{

    protected $listeners = ['refreshCalendar'];

    public function mount()
    {
        
    }

    public function render()
    {
        return view('livewire.schedule.index');
    }

    public function getEvents($start, $end): array
    {
        $range = [
            CarbonImmutable::create($start)->format('Y-m-d'),
            CarbonImmutable::create($end)->format('Y-m-d'),
        ];

        return Schedule::query()
            ->whereBetween('day', $range)
            ->get()
            ->map(fn($schedule) => $this->convertToEventByScheduleForFullcalendar($schedule))
            ->toArray();
    }

    private function convertToEventByScheduleForFullcalendar(Schedule $schedule): array
    {
        $startDateTime = new CarbonImmutable($schedule->day . ' ' . $schedule->start);
        $endDateTime = new CarbonImmutable($schedule->day . ' ' . $schedule->end);
        return [
            'title' => $schedule->title,
            'start' => $startDateTime->format('c'),
            'end' => $endDateTime->format('c'),
            'resourceId' => $schedule->user_id,
            'extendedProps' => [
                'schedule_id' => $schedule->id
            ]
        ];
    }

    public function refreshCalendar(): void
    {
        $this->dispatchBrowserEvent('refreshCalendar');
    }
}
