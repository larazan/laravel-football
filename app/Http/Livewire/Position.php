<?php

namespace App\Http\Livewire;

use App\Models\Position as Pos;
use Livewire\Component;

class Position extends Component
{
    public $poss = [];

    public function render()
    {
        return view('livewire.position', [
            'positions' => Pos::get()
        ]);
    }
}
