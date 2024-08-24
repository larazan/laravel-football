<?php

namespace App\Http\Livewire\Frontend\Wishlist;

use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Count extends Component
{
    public $wishlistCount;

    protected $listeners = ['wishlistAddedUpdated', 'checkWislistCount'];

    public function checkWislistCount()
    {
        if (Auth::check()) {
            return $this->wishlistCount = Wishlist::where('user_id', Auth::user()->id)->count();
        } else {
            return $this->wishlistCount = 0;
        }
        
    }

    public function render()
    {
        $this->wishlistCount = $this->checkWislistCount();
        return view('livewire.frontend.wishlist.count', [
            'wishlistCount' => $this->wishlistCount,
        ]);
    }
}
