<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\DB;
use App\Models\BusinessSetting;
use Livewire\Component;

class ShippingPolicy extends Component
{
    public $body;
    public $trixId;

    public function mount()
    {
        $data = BusinessSetting::where(['key' => 'shipping_policy'])->first();
        if ($data) {
            $this->body = $data->value;
        } else {
            $this->body = $data;
        }
    }

    // public function updatedShippingPolicy()
    // {
    //     dd($this->shippingPolicy);
    // }

    public function updateShippingPolicy()
    {

        dd($this->body);
        // BusinessSetting::where(['key' => 'shipping_policy'])->update([
        //     'value' => $this->shippingPolicy,
        // ]);

        DB::table('business_settings')->updateOrInsert(['key' => 'shipping_policy'], [
            'value' => $this->body,
        ]);

        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Shipping Policy updated successfully']);
    }

    public function render()
    {
        return view('livewire.admin.shipping-policy')->layout('components.layouts.app');
    }
}
