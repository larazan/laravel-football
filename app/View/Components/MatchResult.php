<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MatchResult extends Component
{
    public $slug;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.match-result');
    }
}
