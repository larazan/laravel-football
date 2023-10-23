<?php

namespace App\Http\Livewire\Admin;

use App\Models\Attribute;
use App\Models\AttributeOption;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use Livewire\WithPagination;
use Livewire\Component;

class AttributeOptionIndex extends Component
{
    use WithPagination;

    public $showAttributeOptionModal = false;
    public $url;
    public $paramID;
    public $name;
    public $attributeOptionId;
    public $attributeId;
    public $attributeName;
   
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

    public function mount($attributeId)
    {
        $this->attributeId = $attributeId;
        $this->url = url()->current();
        $this->paramID = Route::current()->parameter('attributeId');
        $this->attributeName = Attribute::where('id', $this->attributeId)->first()->name;
    }
   
    public function updatedAttributeId()
    {
        $this->paramID = Route::current()->parameter('attributeId');
        $this->attributeId = Route::current()->parameter('attributeId');
        $this->attributeName = Attribute::where('id', $this->attributeId)->first()->name;
    }

    public function showCreateModal()
    {
        $this->showAttributeOptionModal = true;
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
        AttributeOption::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Attribute deleted successfully']);
    }

    public function createAttribute()
    {
        // dd($this->publishedAt);
        $this->validate();
  
        AttributeOption::create([
            'attribute_id' => $this->attributeId,
            'name' => $this->name,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Attribute created successfully']);
    }

    public function showEditModal($attributeOptionId)
    {
        $this->reset(['name']);
        $this->attributeOptionId = $attributeOptionId;
        $attribute = AttributeOption::find($attributeOptionId);
        $this->name = $attribute->name;       
        $this->showAttributeOptionModal = true;
    }
    
    public function updateAttribute()
    {
        $attributeOption = AttributeOption::findOrFail($this->attributeOptionId);
        $this->validate();
        
        if ($this->attributeOptionId) {
            if ($attributeOption) {

                $attributeOption->update([
                    'attribute_id' => $this->attributeId,
                    'name' => $this->name,
                ]);
                
            }
        }

        $this->reset();
        $this->showAttributeOptionModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Attribute updated successfully']);
    }

    public function deleteAttribute($attributeOptionId)
    {
        $attributeOption = AttributeOption::findOrFail($attributeOptionId);
        $attributeOption->delete();

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Attribute deleted successfully']);
    }

    public function closeAttributeModal()
    {
        $this->showAttributeOptionModal = false;
        $this->reset();
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.attribute-option-index', [
            'attributeOptions' => AttributeOption::search('name', $this->search)->where('attribute_id', $this->attributeId)->orderBy('name', $this->sort)->paginate($this->perPage),
            // 'attribute' => $attribute,
        ]);
    }
}
