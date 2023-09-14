<?php

namespace App\Http\Livewire;

use App\Models\Position;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\Component;

class PositionIndex extends Component
{
    use WithPagination;

    public $showPositionModal = false;
    public $name;
    public $positionId;
    public $parentId;

    public $search = '';
    public $sort = 'asc';
    public $perPage = 10;

    public $showConfirmModal = false;
    public $deleteId = '';

    public $catStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    protected $rules = [
        'name' => 'required|max:255',
    ];

    public function showCreateModal()
    {
        $this->showPositionModal = true;
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
        Position::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Position deleted successfully']);
    }

    public function createPosition()
    {
        $this->validate();
        
        Position::create([
          'name' => $this->name,
          'slug' => Str::slug($this->name),
          'parent_id' => $this->parentId,
          'status' => $this->catStatus,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Position created successfully']);
    }

    public function showEditModal($positionId)
    {
        $this->reset(['name']);
        $this->positionId = $positionId;
        $position = Position::find($positionId);
        $this->name = $position->name;
        $this->parentId = $position->parent_id;
        $this->catStatus = $position->status;
        $this->showPositionModal = true;
    }
    
    public function updatePosition()
    {
        $this->validate();

        $position = Position::findOrFail($this->positionId);
        $position->update([
            'name' => $this->name,
            'slug'     => Str::slug($this->name),
            'parent_id' => $this->parentId,
            'status' => $this->catStatus,
        ]);

        $this->reset();
        $this->showPositionModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Position updated successfully']);
    }

    public function deletePosition($positionId)
    {
        $position = Position::findOrFail($positionId);
        $position->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Position deleted successfully']);
    }

    public function closePositionModal()
    {
        $this->showPositionModal = false;
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.position-index', [
            'positions' => Position::search('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage)
        ]);
    }
}