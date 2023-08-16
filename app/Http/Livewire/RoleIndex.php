<?php

namespace App\Http\Livewire;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\Component;

class RoleIndex extends Component
{
    use WithPagination;

    public $role;
    public $showRoleModal = false;
    public $name;
    public $roleId;

    public $permissionName;
    public $permissionId;

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    public $showConfirmModal = false;
    public $deleteId = '';

    public $roleStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    protected $rules = [
        'name' => 'required|min:3',
    ];

    public function showCreateModal()
    {
        $this->showRoleModal = true;
    }

    public function closeConfirmModal()
    {
        $this->showConfirmModal = false;
    }

    public function deleteId($id)
    {
        $this->showConfirmModal = true;
        $this->deleteId = $id;
    }

    public function delete()
    {
        Role::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Role deleted successfully']);
    }

    public function createRole()
    {
        $this->validate();
        
        Role::create([
          'name' => $this->name,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Role created successfully']);
    }

    public function showEditModal($roleId)
    {
        $this->reset(['name']);
        $this->roleId = $roleId;
        $role = Role::find($roleId);
        $this->name = $role->name;
        // $this->roleStatus = $role->status;
        $this->showRoleModal = true;
    }
    
    public function updateRole()
    {
        $this->validate();

        $role = Role::findOrFail($this->roleId);
        $role->update([
            'name' => $this->name,
        ]);

        $this->reset();
        $this->showRoleModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Role updated successfully']);
    }

    public function deleteRole($roleId)
    {
        $role = Role::findOrFail($roleId);
        $role->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Role deleted successfully']);
    }

    public function closeRoleModal()
    {
        $this->showRoleModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.role-index', [
            'roles' => Role::all(),
            'permissions' => Permission::all(),
        ]);
    }

    public function givePermission($role)
    {
        if($role->hasPermissionTo($this->permissionName)){

        }
        $role->givePermissionTo($this->permissionName);
    }

    public function revokePermission($role)
    {
        if($role->hasPermissionTo($this->permissionId)){
            $role->revokePermissionTo($this->permissionId);
        }
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Permission deleted successfully']);
    }
}
