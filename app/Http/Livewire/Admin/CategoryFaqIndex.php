<?php

namespace App\Http\Livewire\Admin;

use App\Models\CategoryFaq;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Livewire\Component;

class CategoryFaqIndex extends Component
{
    use WithPagination;

    public $showCategoryModal = false;
    public $name;
    public $categoryId;
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
        $this->showCategoryModal = true;
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
        CategoryFaq::find($this->deleteId)->delete();
        $this->showConfirmModal = false;
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Category deleted successfully']);
    }

    public function createCategory()
    {
        $this->validate();
        
        CategoryFaq::create([
          'name' => $this->name,
          'slug' => Str::slug($this->name),
        //   'status' => $this->catStatus,
        ]);

        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Category created successfully']);
    }

    public function showEditModal($categoryId)
    {
        $this->reset(['name']);
        $this->categoryId = $categoryId;
        $category = CategoryFaq::find($categoryId);
        $this->name = $category->name;
        // $this->catStatus = $category->status;
        $this->showCategoryModal = true;
    }
    
    public function updateCategory()
    {
        $this->validate();

        $category = CategoryFaq::findOrFail($this->categoryId);
        $category->update([
            'name' => $this->name,
            'slug'     => Str::slug($this->name),
            // 'status' => $this->catStatus,
        ]);

        $this->reset();
        $this->showCategoryModal = false;
        $this->dispatchBrowserEvent('banner-message', ['style' => 'success', 'message' => 'Category updated successfully']);
    }

    public function deleteCategory($categoryId)
    {
        $category = CategoryFaq::findOrFail($categoryId);
        $category->delete();
        $this->reset();
        $this->dispatchBrowserEvent('banner-message', ['style' => 'danger', 'message' => 'Category deleted successfully']);
    }

    public function closeCategoryModal()
    {
        $this->showCategoryModal = false;
        $this->reset();
    }

    public function resetFilters()
    {
        $this->reset(['search', 'sort', 'perPage']);
    }
    
    public function render()
    {
        return view('livewire.admin.category-faq-index', [
            'categories' => CategoryFaq::liveSearch('name', $this->search)->orderBy('name', $this->sort)->paginate($this->perPage)
        ]);
    }
}
