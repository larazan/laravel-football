<?php

namespace App\Http\Livewire\Admin;

use App\Models\TrainingType;
use App\Models\TrainingSession;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithPagination;
use Livewire\Component;

class TrainingSessionIndex extends Component
{
    use WithPagination;

    public $showSessionModal = false;
    public $name;
    public $focus;
    public $note;
    public $sessionId;
    public $type;
    public $typeId;
    public $sessionStatus = 'inactive';
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
        'name' => 'required',
        'focus' => 'required',
    ];

    public function showCreateModal()
    {
        $this->showSessionModal = true;
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
        TrainingSession::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Session deleted']);
    }
///////
    public function createSession()
    {
        TrainingSession::create([
          'name' => $this->name,
          'training_type_id' => $this->type,
          'focus' => $this->focus,
          'note' => $this->note,
        ]);
        
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Genre created successfully']);
    }

    public function showEditModal($sessionId)
    {
        $this->sessionId = $sessionId;
        $this->loadSession();
        $this->showSessionModal = true;
    }

    public function loadSession()
    {
        $session = TrainingSession::findOrFail($this->sessionId);
        $this->name = $session->name;
        $this->type = $session->training_type_id;
        $this->focus = $session->focus;
        $this->note = $session->note;
    }

    public function updateSession()
    {
        $this->validate();
        $session = TrainingSession::findOrFail($this->sessionId);
        $session->update([
            'name' => $this->name,
            'training_type_id' => $this->type,
            'focus' => $this->focus,
            'note' => $this->note,
        ]);
        
        $this->reset();
        $this->showSessionModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Session updated']);
    }

    public function closeSessionModal()
    {
        $this->showSessionModal = false;
        $this->reset();
        $this->resetValidation();
    }

    public function deleteSession($sessionId)
    {
        TrainingSession::findOrFail($sessionId)->delete();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Session deleted']);
        $this->reset();
    }

    public function resetFilters()
    {
        $this->reset(['search', 'sort', 'perPage']);
    }

    public function render()
    {
        return view('livewire.admin.training-session-index', [
            'sessions' => TrainingSession::liveSearch('name', $this->search)->orderBy('id', $this->sort)->paginate($this->perPage),
            'types' => TrainingType::OrderBy('name', $this->sort)->get()
        ])->layout('components.layouts.app');
    }
}
