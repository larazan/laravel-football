<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Player;

class Select extends Component
{
    public $options = [];
    public $selections = [];

    public function render()
    {
        return view('livewire.select');
    }

    public function search($term)
    {
        $results = Player::search($term);

        $preserve = collect($this->options)
                  ->filter(fn ($option) => 
                    in_array(
                      $option['value'],
                      $this->selections
                    )
                  )
                  ->unique();

        $this->options = collect($results)
                       ->map(fn ($item) =>
                         [
                           'label' => $item->name,
                           'value' => $item->id
                         ])
                       ->merge($preserve)
                       ->unique();

        $this->emit('select-options-updated', $this->options);
    }

    
}
