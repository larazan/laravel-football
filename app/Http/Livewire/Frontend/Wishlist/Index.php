<?php

namespace App\Http\Livewire\Frontend\Wishlist;

use App\Models\Wishlist;
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
        $wishlist = Wishlist::where('user_id', auth()->user()->id)->get();
        return view('livewire.frontend.wishlist.index', [
            'wishlist' => $wishlist
        ]);
    }
}
