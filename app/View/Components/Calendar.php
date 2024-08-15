<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Support\Calendar as Cal;

class Calendar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $calendar = Cal::buildMonth(year: 2022, month: 2);
        $calendar = Cal::buildYear(2022);
        return view('components.calendar');
    }
}
