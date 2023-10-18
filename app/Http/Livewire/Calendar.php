<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Illuminate\Support\Arr;
use Livewire\Component;

class Calendar extends Component
{
    
    public $events = [];

    protected $listeners = [
        'eventAdded' => 'showCreateModal', 
        'refreshCalendar' => 'refreshCalendar'
    ];

    public function mount()
    {
        $eve = Event::all()
            ->map( fn ($item) => [
                'id' => $item->id,
                'title' => $item->title,
                'start' => $item->start_date,
                'end' => date('Y-m-d',strtotime($item->end_date)),
                'category' => $item->category,
                'className' => ['bg-'. $item->category]
            ]);

        $this->events = json_encode($eve);
    }

    public function eventChange($event)
    {
        $e = Event::find($event['id']);
        $e->start_date = $event['start'];
        if(Arr::exists($event, 'end')) {
            $e->end_date = $event['end'];
        }
        $e->save();
        $this->dispatchBrowserEvent('refreshCalendar');
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Event created successfully']);
    }

    public function eventAdd($event)
    {
        Event::create($event);
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Event created successfully']);
    }

    public function eventRemove($id)
    {
        Event::destroy($id);
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Event deleted successfully']);
    }

    public function refreshCalendar()
    {
        $this->dispatchBrowserEvent('refreshCalendar');
    }

    public function render()
    {
        $eve = Event::all()
            ->map( fn ($item) => [
                'id' => $item->id,
                'title' => $item->title,
                'start' => $item->start_date,
                'end' => date('Y-m-d',strtotime($item->end_date)),
                'category' => $item->category,
                'className' => ['bg-'. $item->category]
            ]);

        $this->events = json_encode($eve);
        return view('livewire.calendar', [
            'events' => $this->events
        ]);
    }
}
