<?php

namespace App\Http\Livewire\Admin;

use App\Models\TrainingType;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\Component;

class TrainingTypeIndex extends Component
{
    use WithPagination;

    public $showTrainingModal = false;
    public $name;
    public $trainingId;

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
        $this->showTrainingModal = true;
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
        TrainingType::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Training deleted successfully']);
    }

    public function createTraining()
    {
        $this->validate();
        
        TrainingType::create([
          'name' => $this->name,
          'slug' => Str::slug($this->name),
          'parent_id' => $this->parentId,
        //   'status' => $this->catStatus,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Training created successfully']);
    }

    public function showEditModal($trainingId)
    {
        $this->reset(['name']);
        $this->trainingId = $trainingId;
        $training = TrainingType::find($trainingId);
        $this->name = $training->name;

        $this->showTrainingModal = true;
    }
    
    public function updateTraining()
    {
        $this->validate();

        $training = TrainingType::findOrFail($this->trainingId);
        $training->update([
            'name' => $this->name,
            'slug'     => Str::slug($this->name),
            'parent_id' => $this->parentId,
            // 'status' => $this->catStatus,
        ]);

        $this->reset();
        $this->showTrainingModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Training updated successfully']);
    }

    public function deleteTraining($trainingId)
    {
        $training = TrainingType::findOrFail($trainingId);
        $training->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Training deleted successfully']);
    }

    public function closeTrainingModal()
    {
        $this->showTrainingModal = false;
        $this->reset();
    }

    public function resetFilters()
    {
        $this->reset(['search', 'sort', 'perPage']);
    }

    public function render()
    {
        return view('livewire.admin.training-type-index', [
            'trainings' => TrainingType::liveSearch('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage)
        ])->layout('components.layouts.app');
    }
}
