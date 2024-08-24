<?php

namespace App\Http\Livewire\Frontend\Wishlist;

use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public function removeWishlistItem($wishlistId)
    {
        Wishlist::where('user_id', auth()->user()->id)->where('id', $wishlistId)->delete();
        $this->emit('wishlistAddedUpdated');
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Wishlist item remove successfully']);
    }

    public function render()
    {
        if (Auth::check()) {
            $wishlist = Wishlist::where('user_id', Auth::user()->id)->get();
        } else {
            $wishlist = [];
        }
        
        return view('livewire.frontend.wishlist.index', [
            'wishlist' => $wishlist
        ]);
    }
}
