<?php

namespace App\Http\Livewire\Admin;

use App\Models\Currency;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\Component;

class CurrencyIndex extends Component
{
    use WithPagination;
    
    public $showCurrencyModal = false;
    public $country;
    public $currencyCode;
    public $currencySymbol;
    public $exchangeRate;
    public $currencyId;

    public $catStatus = 'inactive';
    public $statuses = [
        'active',
        'inactive'
    ];

    public $search = '';
    public $sort = 'asc';
    public $perPage = 30;

    public $showConfirmModal = false;
    public $deleteId = '';

    protected $rules = [
        'country' => 'required|max:255',
    ];

    public function showCreateModal()
    {
        $this->showCurrencyModal = true;
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
        Currency::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Currency deleted successfully']);
    }

    public function createCurrency()
    {
        $this->validate();
        
        Currency::create([
          'country' => $this->country,
          'currency_code' => $this->currencyCode,
          'currency_symbol' => $this->currencySymbol,
          'exchange_rate' => $this->exchangeRate,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Currency created successfully']);
    }

    public function showEditModal($currencyId)
    {
        $this->reset(['country']);
        $this->currencyId = $currencyId;
        $currency = Currency::find($currencyId);
        $this->country = $currency->country;
        $this->currencyCode = $currency->currency_code;
        $this->currencySymbol = $currency->currency_symbol;
        $this->exchangeRate = $currency->exchange_rate;
       
        $this->showCurrencyModal = true;
    }
    
    public function updateCurrency()
    {
        $this->validate();

        $currency = Currency::findOrFail($this->currencyId);
        $currency->update([
            'country' => $this->country,
            'currency_code' => $this->currencyCode,
            'currency_symbol' => $this->currencySymbol,
            'exchange_rate' => $this->exchangeRate,
        ]);
        $this->reset();
        $this->showCurrencyModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Currency updated successfully']);
    }

    public function deleteCurrency($currencyId)
    {
        $currency = Currency::findOrFail($currencyId);
        $currency->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Currency deleted successfully']);
    }

    public function closeCurrencyModal()
    {
        $this->showCurrencyModal = false;
        $this->reset(
            [
                'currencyId',
                'country',
                
            ]
        );
    }

    public function resetFilters()
    {
        $this->reset(['search', 'sort', 'perPage']);
    }

    public function render()
    {
        return view('livewire.admin.currency-index', [
            'currencies' => Currency::liveSearch('country', $this->search)->orderBy('country', $this->sort)->paginate($this->perPage)
        ])->layout('components.layouts.app');
    }
}
