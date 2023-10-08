<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\DB;
use App\Models\BusinessSetting;
use Livewire\Component;

class ShippingPolicy extends Component
{
    public $shippingPolicy;

    public function mount()
    {
        $data = BusinessSetting::where(['key' => 'shipping_policy'])->first();
        $this->shippingPolicy = $data;
    }

    // public function updatedShippingPolicy()
    // {
    //     dd($this->shippingPolicy);
    // }

    public function updateShippingPolicy()
    {

        dd($this->shippingPolicy);
        // BusinessSetting::where(['key' => 'shipping_policy'])->update([
        //     'value' => $this->shippingPolicy,
        // ]);

        DB::table('business_settings')->updateOrInsert(['key' => 'shipping_policy'], [
            'value' => $this->shippingPolicy,
        ]);

        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Shipping Policy updated successfully']);
    }

    public function render()
    {
        return view('livewire.admin.shipping-policy');
    }
}
