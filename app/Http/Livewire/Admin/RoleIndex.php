<?php

namespace App\Http\Livewire\Admin;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\Component;

class RoleIndex extends Component
{
    use WithPagination;

    public $roler;
    public $showRoleModal = false;
    public $name;
    public $roleId;

    public $permissionName;
    public $permissionId;
    public $allPermission = [];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 10;

    public $showConfirmModal = false;
    public $deleteId = '';

    public $roleStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    protected $listeners = [
        'permissionAdded' => 'permissionAdded',
        'permissionDetached' => 'permissionDetached',
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
        $this->reset();
        $this->roleId = $roleId;
        $role = Role::findOrFail($roleId);
        $this->name = $role->name;
        $this->showRoleModal = true;

        $this->roler = Role::findOrFail($roleId);
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
        $this->reset(
            [
                'name',
                'roleId',
            ]
        );
    }

    public function resetFilters()
    {
        $this->reset(['search', 'sort', 'perPage']);
    }

    public function render()
    {
        return view('livewire.admin.role-index', [
            'roles' => Role::orderBy('id', $this->sort)->paginate($this->perPage),
            'permissions' => Permission::all(),
        ]);
    }

    // public function givePermission($role)
    // {
    //     if($role->hasPermissionTo($this->permissionName)){

    //     }
    //     $role->givePermissionTo($this->permissionName);
    // }

    // public function revokePermission($role)
    // {
    //     if($role->hasPermissionTo($this->permissionId)){
    //         $role->revokePermissionTo($this->permissionId);
    //     }
    //     $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Permission deleted successfully']);
    // }

    public function permissionAdded()
    {
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Permission Added']);
        $this->reset();
    }

    public function permissionDetached()
    {
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Permission detached']);
        $this->reset();
    }
}
