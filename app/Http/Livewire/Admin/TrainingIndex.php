<?php

namespace App\Http\Livewire\Admin;

use App\Models\Training;
use App\Models\TrainingSession;
use App\Models\TrainingType;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class TrainingIndex extends Component
{

    public $showTrainingModal = false;
    public $trainingId;
    public $sessionId;
    public $date;
    public $day;
    public $dayOption = [
        'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'
    ];
    public $session;
    public $sessionOption = [
        's1', 's2', 's3'
    ];
    public $intensity;
    public $intensityOption = [
        'low', 'medium', 'high'
    ];
    public $color;
    public $colorOption = [

    ];

    protected $rules = [
        'sessionId' =>  'required',
        'date' =>  'required',
        'day' =>  'required',
        'session' =>  'required',
    ];

    public function showCreateModal()
    {
        $this->showTrainingModal = true;
    }

    public function createTraining()
    {
        $this->validate();

        Training::create([
            'user_id' => Auth::user()->id,
            'training_session_id' => $this->sessionId,
            'date' => $this->date,
            'day' => $this->day,
            'session' => $this->session,
            'intensity' => $this->intensity,
            'color' => $this->color,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Training created successfully']);    
    }

    public function showEditModal($trainingId)
    {
        // $this->reset();
        $training = Training::find($trainingId);
        $this->sessionId = $training->training_session_id;
        $this->date = $training->date;
        $this->day = $training->day;
        $this->session = $training->session;
        $this->intensity = $training->intensity;
        $this->color = $training->color;

        $this->showTrainingModal = true;
    }

    public function updateTraining()
    {
        $training = Training::findOrFail($this->trainingId);
        $this->validate();

        if ($this->trainingId) {
            if ($training) {
                $training->update([
                    'user_id' => Auth::user()->id,
                    'training_session_id' => $this->sessionId,
                    'date' => $this->date,
                    'day' => $this->day,
                    'session' => $this->session,
                    'intensity' => $this->intensity,
                    'color' => $this->color,
                ]);
            }
        }
        $this->reset();
        $this->showTrainingModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Training updated successfully']);
    }

    public function closeTrainingModal()
    {
        $this->showTrainingModal = false;
        $this->reset([
            'trainingId',
            'date',
        ]);
        $this->resetValidation();
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        $this->date = today()->format('Y-m-d');
        return view('livewire.admin.training-index', [
            'types' => TrainingType::get(),
            'sessions' => TrainingSession::get(),
        ])->layout('components.layouts.app');
    }
}
