<?php

namespace App\Http\Livewire\Frontend\Product;

use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Detail extends Component
{
    public $product;
    public $category;
    public $prodColorSelected;
    public $prodSizeSelected;
    public $quantityCount;

    public function mount($category, $product)
    {
        $this->product = $product;
        $this->category = $category;
    }

    public function addToWishlist($productId)
    {
        if (Auth::check()) {
            if (Wishlist::where('user_id',auth()->user()->id)->where('product_id',$productId)->exists()) {
                $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Already addedd to wishlist']);
                // return false;
            } else {
                Wishlist::create([
                    'user_id' => auth()->user()->id,
                    'product_id' => $productId
                ]);
                $this->emit('wishlistAddedUpdated');
                $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Wishlist added successfully']);
            }
        } else {
            session()->flash('message', 'Please Login to continue');
            return false;
        }
        
    }

    public function colorSelected($productColorId) 
    {
        $productColor = $this->product->productColors()->where('id', $productColorId)->first();
    }

    public function sizeSelected($productSizeId)
    {

    }

    public function incrementQty()
    {
        if ($this->quantityCount < 10) {
            $this->quantityCount++;
        }
    }

    public function decrementQty()
    {
        if ($this->quantityCount > 1) {
            $this->quantityCount--;
        }
    }

    public function render()
    {
        return view('livewire.frontend.product.detail', [
            'category' => $this->category,
            'product' => $this->product,
        ]);
    }
}
