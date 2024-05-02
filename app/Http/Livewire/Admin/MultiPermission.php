<?php

namespace App\Http\Livewire\Admin;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Livewire\Component;

class MultiPermission extends Component
{
    public $queryPermission = '';
    public $role;
    public $permissions = []; 

    public function mount($role)
    {
        $this->role = $role;
    }

    public function updated($role)
    {
        $this->role = $role;
    }

    public function updatedQueryPermission()
    {
        $this->permissions = Permission::liveSearch('name', $this->queryPermission)->get();
    }

    public function addPermission($permissionName)
    {
        $this->role->givePermissionTo($permissionName);
        $this->reset('queryPermission');
        $this->emit('permissionAdded');
    }

    public function detachPermission($permissionId)
    {
        if($this->role->hasPermissionTo($permissionId)){
            $this->role->revokePermissionTo($permissionId);
        }
    }

    public function render()
    {
        return view('livewire.admin.multi-permission');
    }
}
