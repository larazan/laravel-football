<?php

namespace App\Http\Livewire\Admin;

use App\Models\Attribute;
use App\Models\AttributeOption;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Livewire\WithPagination;
use Livewire\Component;

class AttributeIndex extends Component
{
    use WithPagination;

    public $showAttributeModal = false;

    public $code;
    public $name;
    public $type;
    public $attributeId;
    public $validation;
    public $required;
    public $unique;
    public $filterable;
    public $configurable;
    public $attributeStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 10;

    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rules = [
        'name' => 'required|min:3',
    ];

    // public function mount()
    // {
    //     $this->publishedAt = today()->format('Y-m-d');
    // }

    public function showCreateModal()
    {
        $this->showAttributeModal = true;
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
        Attribute::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Attribute deleted successfully']);
    }

    public function createAttribute()
    {
        // dd($this->publishedAt);
        $this->validate();
//   dd($this->required);
        Attribute::create([
            'code' => $this->code,
            'name' => $this->name,
            'type' => $this->type,
            'validation' => $this->validation,
            'is_required' => $this->required == null ? false : true,
            'is_unique' => $this->unique == null ? false : true,
            'is_filterable' => $this->filterable == null ? false : true,
            'is_configurable' => $this->configurable == null ? false : true,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Attribute created successfully']);
    }

    public function showEditModal($attributeId)
    {
        $this->reset(['name']);
        $this->attributeId = $attributeId;
        $attribute = Attribute::find($attributeId);
        $this->name = $attribute->name;
        $this->code = $attribute->code;
        $this->type = $attribute->type;
        $this->validation = $attribute->validation;
        $this->required = $attribute->is_required;
        $this->unique = $attribute->is_unique;
        $this->filterable = $attribute->is_filterable;
        $this->configurable = $attribute->is_configurable;
    }
    
    public function updateAttribute()
    {
        $attribute = Attribute::findOrFail($this->attributeId);
        $this->validate();
        
        if ($this->attributeId) {
            if ($attribute) {

                $attribute->update([
                    'code' => $this->code,
                    'name' => $this->name,
                    'type' => $this->type,
                    'validation' => $this->validation,
                    'is_required' => $this->required,
                    'is_unique' => $this->unique,
                    'is_filterable' => $this->filterable,
                    'is_configurable' => $this->configurable,
                ]);
                
            }
        }

        $this->reset();
        $this->showAttributeModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Attribute updated successfully']);
    }

    public function deleteAttribute($attributeId)
    {
        $attribute = Attribute::findOrFail($attributeId);
        $attribute->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Attribute deleted successfully']);
    }

    public function closeAttributeModal()
    {
        $this->showAttributeModal = false;
        $this->reset(
            [
                'code',
                'name',
                'type',
                'attributeId',
                'validation',
                'required',
                'unique',
                'filterable',
                'configurable',
                'attributeStatus',
            ]
        );
    }

    public function resetFilters()
    {
        $this->reset(
            [
                'search',
                'sort',
                'perPage',
            ]
        );
    }

    public function render()
    {
        return view('livewire.admin.attribute-index', [
            'attributes' => Attribute::liveSearch('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage),
            'types' => Attribute::types(),
            'booleanOptions' => Attribute::booleanOptions(),
            'validations' => Attribute::validations(),
        ])->layout('components.layouts.app');
    }
}
