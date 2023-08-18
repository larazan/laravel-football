<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\Component;

class ContactIndex extends Component
{
    use WithPagination;

    public $showContactModal = false;

    public $firstName;
    public $lastName;
    public $email;
    public $message;
    public $opened;
    public $openedStatus = [
        0 => 'no',
        1 => 'yes',
    ];
    public $reply;
    public $feedback;
    public $contactId;
    public $competition;
    public $competitionId;
    public $contactStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 5;

    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rules = [
        'message' => 'required|min:3',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'contactStatus' => 'required',
        ]);
    }

    public function showCreateModal()
    {
        $this->showContactModal = true;
    }
/////// 
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
        Contact::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Contact deleted']);
    }
///////
    public function createContact()
    {
        $this->validate([
            'name' => 'required',
        ]);

        Contact::create([
          'first_name' => $this->firstName,
          'last_name' => $this->lastName,
          'message' => $this->message,
          'opened' => $this->openedStatus,
          'status' => $this->contactStatus,
      ]);
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Genre created successfully']);
    }

    public function showEditModal($contactId)
    {
        $this->contactId = $contactId;
        $this->loadContact();
        $this->showContactModal = true;
    }

    public function loadContact()
    {
        $contact = Contact::findOrFail($this->contactId);
        $this->firstName = $contact->first_name;
        $this->lastName = $contact->last_name;
        $this->message = $contact->message;
        $this->openedStatus = $contact->opened;
        $this->contactStatus = $contact->status;
    }

    public function updateContact()
    {
        $this->validate();
        $contact = Contact::findOrFail($this->contactId);
        $contact->update([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'message' => $this->message,
            'opened' => $this->openedStatus,
            'status' => $this->contactStatus,
        ]);
        
        $this->reset();
        $this->showContactModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Contact updated']);
    }

    public function closeContactModal()
    {
        $this->showContactModal = false;
        $this->reset();
        $this->resetValidation();
    }

    public function deleteContact($contactId)
    {
        Contact::findOrFail($contactId)->delete();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Contact deleted']);
        $this->reset();
    }

    public function resetFilters()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-index', [
            'contacts' => Contact::search('first_name', $this->search)->orderBy('first_name', $this->sort)->paginate($this->perPage)
        ]);
    }

    public function reply()
    {
        
    }
}
