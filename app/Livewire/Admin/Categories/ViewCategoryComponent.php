<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class ViewCategoryComponent extends Component
{
    public $removeId = '';

    public function deleteId($id)
    {
        $this->removeId = $id;
    }
    
    function remove() { 
        $category = Category::find($this->removeId);
        $category->delete();
        session()->flash('success', 'Category Deleted!');
    }

    public function render()
    {
        $categories = Category::get();
        return view('livewire.admin.categories.view-category-component', ['categories' => $categories]);
    }
}
