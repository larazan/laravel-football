<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CalendarTraining extends Component
{
    public function render()
    {
        return view('livewire.calendar-training')->layout('components.layouts.app');
    }
}
