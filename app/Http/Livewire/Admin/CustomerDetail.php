<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Route;
use Livewire\WithPagination;
use Livewire\Component;

class CustomerDetail extends Component
{

    use WithPagination;
    
    public $url;
    public $customerId;
    public $paramID;

    public $search = '';
    public $sort = 'asc';
    public $perPage = 10;

    public function mount($customerId)
    {
        $this->customerId = $customerId;
        $this->url = url()->current();
        $this->paramID = Route::current()->parameter('customerId');
    }
   
    public function updatedCustomerId()
    {
        $this->paramID = Route::current()->parameter('customerId');
        $this->customerId = Route::current()->parameter('customerId');
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.customer-detail', [
            'customer' => User::where('id', $this->customerId)->get(),
            'orders' => Order::liveSearch('id', $this->search)->where(['user_id' => $this->customerId])->orderBy('id', $this->sort)->paginate($this->perPage),
        ])->layout('components.layouts.app');
    }
}
