<?php

namespace App\Http\Livewire\Frontend\Product;

use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Detail extends Component
{
    public $product;
    public $category;
    public $prodColorSelectedQty;
    public $prodSizeSelectedQty;
    public $quantityCount;
    public $measurements;
    public $conversions;
    public $sizeData;

    public function mount($product)
    {
        $this->product = $product;
        $this->measurements = collect([
            [
              'title' => "Chest",
              'small' => 48,
              'medium' => 51,
              'large' => 55,
              'extraLarge' => 61,
              'doubleXL' => 65,
              'tripleXL' => 70.5,
            ],
            [
              'title' => "Shoulders",
              'small' => 40,
              'medium' => 42,
              'large' => 43.5,
              'extraLarge' => 48,
              'doubleXL' => 48,
              'tripleXL' => 51,
            ],
            [
              'title' => "Hips",
              'small' => 47.5,
              'medium' => 49.5,
              'large' => 55.5,
              'extraLarge' => 60,
              'doubleXL' => 64,
              'tripleXL' => 69,
            ],
            [
              'title' => "Back length",
              'small' => 71,
              'medium' => 71,
              'large' => 73.5,
              'extraLarge' => 74,
              'doubleXL' => 77,
              'tripleXL' => 79,
            ],
            [
              'title' => "Sleeve length",
              'small' => 22,
              'medium' => 22.5,
              'large' => 24,
              'extraLarge' => 25.5,
              'doubleXL' => 28,
              'tripleXL' => 29,
            ],
        ]);
        
        $this->conversions = collect([
            [
                'uk' => 'S',
                'de' => '44-46',
                'fr' => '44-46',
                'it' => '46',
                'es' => '46',
                'us' => 'S',
            ],
            [
                'uk' => 'M',
                'de' => '48-50',
                'fr' => '48-50',
                'it' => '50',
                'es' => '50',
                'us' => 'M',
            ],
            [
                'uk' => 'L',
                'de' => '52-54',
                'fr' => '52-54',
                'it' => '54',
                'es' => '54',
                'us' => 'L',
            ],
            [
                'uk' => 'XL',
                'de' => '56-58',
                'fr' => '56-58',
                'it' => '58',
                'es' => '58',
                'us' => 'XL',
            ],
            [
                'uk' => 'XXL',
                'de' => '60-62',
                'fr' => '60-62',
                'it' => '62',
                'es' => '62',
                'us' => 'XXL',
            ],
            [
                'uk' => '3XL',
                'de' => '64-66',
                'fr' => '64-66',
                'it' => '66',
                'es' => '66',
                'us' => '3XL',
            ],
        ]);

        $this->sizeData = collect([
            [
              'size' => "S",
              'enabled' => true,
            ],
            [
              'size' => "M",
              'enabled' => true,
            ],
            [
              'size' => "L",
              'enabled' => true,
            ],
            [
              'size' => "XL",
              'enabled' => true,
            ],
            [
              'size' => "XXL",
              'enabled' => true,
            ],
            [
              'size' => "3XL",
              'enabled' => true,
            ],
        ]);
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
        $this->prodColorSelectedQty = $productColor->quantity;

        if ($this->prodColorSelectedQty == 0) {
            $this->prodColorSelectedQty = 'out of stock';
        }
    }

    public function sizeSelected($productSizeId)
    {
        $productSize = $this->product->productSizes()->where('id', $productSizeId)->first();
        $this->prodSizeSelectedQty = $productSize->quantity;

        if ($this->prodSizeSelectedQty == 0) {
            $this->prodSizeSelectedQty = 'out of stock';
        }
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
