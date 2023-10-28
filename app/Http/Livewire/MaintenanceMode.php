<?php

namespace App\Http\Livewire;

use App\Models\BusinessSetting;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class MaintenanceMode extends Component
{
    public $config;
    public $showConfirmModal = false;

    public function showConfirmModal()
    {
        $this->showConfirmModal = true;
    }

    public function closeConfirmModal()
    {
        $this->showConfirmModal = false;
    }

    public function submit()
    {
        $maintenance_mode = BusinessSetting::where('key', 'maintenance_mode')->first();
        if (isset($maintenance_mode) == false) {
            DB::table('business_settings')->insert([
                'key' => 'maintenance_mode',
                'value' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        } else {
            DB::table('business_settings')->where(['key' => 'maintenance_mode'])->update([
                'key' => 'maintenance_mode',
                'value' => $maintenance_mode->value == 1 ? 0 : 1,
                'updated_at' => now(),
            ]);
        }

        if (isset($maintenance_mode) && $maintenance_mode->value) {
            $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Maintenance is off.']);
        }
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Maintenance is on.']);
    }

    public function render()
    {
        return view('livewire.maintenance-mode');
    }
}
