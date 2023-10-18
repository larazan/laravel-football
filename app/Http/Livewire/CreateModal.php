<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;

class CreateModal extends Component
{
    public $showEventModal = false;
    public $eventId;
    public $title;
    public $start;
    public $end;
    public $category;

    protected $rules = [
        'title' => 'required',
        'start' => 'required',
        'end' => 'required',
        'category' => 'required',
    ];

    public function mount()
    {
        $this->start = today()->format('Y-m-d');
    }

    public function showCreateModal()
    {
        $this->showEventModal = true;
    }

    public function createEvent()
    {
        $this->validate();

        $event = new Event();
        $event->start_date = $this->start;
        $event->end_date = $this->end;
        $event->title = $this->title;
        $event->category = $this->category;
        $event->save();

        $this->reset();
        $this->showEventModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Event created successfully']);
        $this->emitUp('refreshCalendar');
    }

    public function closeEventModal()
    {
        $this->showEventModal = false;
    }

    public function render()
    {
        return view('livewire.create-modal');
    }
}
