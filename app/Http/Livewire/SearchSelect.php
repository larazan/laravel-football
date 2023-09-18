<?php

namespace App\Http\Livewire;

use App\Models\Player;
use Livewire\Component;

class SearchSelect extends Component
{
    public $personel_adi = '';
    public $kullanicilar;
    public $yonetici_id = NULL;

    protected $rules = [

    ];

    public function mount()
    {
        $this->kullanicilar = Player::all();
    }

    public function getPersonellerProperty()
    {
        if ($this->personel_adi != NULL) {
            return Player::where('name', 'like', '%'.$this->personel_adi.'%')->paginate(10);
        } else {
            return Player::all();
        }
    }

    public function render()
    {
        return view('livewire.search-select');
    }
}
