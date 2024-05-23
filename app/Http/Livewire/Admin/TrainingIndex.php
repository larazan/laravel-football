<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class TrainingIndex extends Component
{
    public function render()
    {
        return view('livewire.admin.training-index')->layout('components.layouts.app');
    }
}
