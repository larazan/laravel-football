<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Multiple extends Component
{
    // public $options = [];
    // public $selected = [];
    public $trackBy;
    public $label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $trackBy = 'value', $label = 'name')
    {
        
        $this->trackBy = $trackBy;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.multiple');
    }
}
