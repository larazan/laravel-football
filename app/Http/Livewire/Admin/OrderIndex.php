<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Illuminate\Support\Facades\Route;
use Livewire\WithPagination;
use Livewire\Component;

class OrderIndex extends Component
{
    use WithPagination;


    public $search = '';
    public $sort = 'asc';
    public $perPage = 10;

    public $showConfirmModal = false;
    public $deleteId = '';
    
    public function render()
    {
        return view('livewire.admin.order-index', [
            'orders' => Order::liveSearch('order_id', $this->search)->orderBy('id', $this->sort)->paginate($this->perPage),
        ]);
    }
}
