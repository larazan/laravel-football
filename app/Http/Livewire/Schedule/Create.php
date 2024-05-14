<?php

namespace App\Http\Livewire\Schedule;

use App\Models\Event as Schedule;
use Livewire\Component;

class Create extends Component
{

    public Schedule $schedule;

    public function mount()
    {
        $this->schedule = new Schedule();
    }

    public function openModal()
    {
        $this->dispatchBrowserEvent('showCreateScheduleModal');
    }

    public function setScheduleStart($start): void
    {
        $this->schedule->start = $start;
        if ($this->isStartTimeExceededEndTime()) {
            $this->schedule->end = null;
        }
    }

    private function isStartTimeExceededEndTime(): bool
    {
        return strtotime($this->schedule->start) >= strtotime($this->schedule->end);
    }

    public function create(): void
    {
        $this->validate();
        $this->schedule->save();
        $this->schedule = new Schedule();
        $this->dispatchBrowserEvent('closeCreateScheduleModal');
        $this->emitUp('refreshCalendar');
    }

    protected function rules(): array
    {
        return [
            'schedule.title' => 'required',
            'schedule.day' => 'required',
            'schedule.start' => 'required',
            'schedule.end' => 'required',
        ];
    }

    protected function validationAttributes(): array
    {
        return [
            'schedule.title' => 'タイトル',
            'schedule.day' => '日付',
            'schedule.start' => '開始時間',
            'schedule.end' => '終了時間',
        ];
    }

    public function render()
    {
        return view('livewire.schedule.create')->layout('components.layouts.app');
    }
}
