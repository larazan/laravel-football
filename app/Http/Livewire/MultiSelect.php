<?php

namespace App\Http\Livewire;

use App\Models\Stadion;
use Livewire\Component;

class MultiSelect extends Component
{
    public function render()
    {
        return view('livewire.multi-select', [
            'stadions' => Stadion::orderBy('id', 'asc')->get(),
        ]);
    }
}
