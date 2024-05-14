<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\DB;
use App\Models\BusinessSetting;
use Livewire\Component;

class RefundPolicy extends Component
{
    public $body;
    public $trixId;

    public function mount()
    {
        $data = BusinessSetting::where(['key' => 'refund_policy'])->first();
        if ($data) {
            $this->body = $data->value;
        } else {
            $this->body = $data;
        }
    }

    // public function updatedRefundPolicy()
    // {
    //     dd($this->refundPolicy);
    // }

    public function updateRefundPolicy()
    {

        dd($this->body);
        // BusinessSetting::where(['key' => 'refund_policy'])->update([
        //     'value' => $this->refundPolicy,
        // ]);

        DB::table('business_settings')->updateOrInsert(['key' => 'refund_policy'], [
            'value' => $this->body,
        ]);

        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Refund Policy updated successfully']);
    }

    public function render()
    {
        return view('livewire.admin.refund-policy')->layout('components.layouts.app');
    }
}
