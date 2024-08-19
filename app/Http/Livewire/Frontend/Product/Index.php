<?php

namespace App\Http\Livewire\Frontend\Product;

use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public $products;
    public $category;
    public $brandInputs = [];
    public $min;
    public $max;

    protected $queryString = [
        'brandInputs' => ['except' => '', 'as' => 'brand'],
    ];

    public function mount($category)
    {
        $this->category = $category;
        $this->min = 0;
        $this->max = 10000;
    }

    public function render()
    {
        $this->products = Product::where('category_id', $this->category->id)
        ->when($this->brandInputs, function($q) {
            $q->whereIn('brand', $this->brandInputs);
        })
        ->whereBetween('price', [$this->min, $this->max])
        ->where('status', '0')
        ->get();

        return view('livewire.frontend.product.index', [
            'products' => $this->products,
            'category' => $this->category,
        ]);
    }
}
