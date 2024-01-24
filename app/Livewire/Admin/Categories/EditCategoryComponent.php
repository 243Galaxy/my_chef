<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class EditCategoryComponent extends Component
{
    public $name, $category_id;

    function mount($category_id) {
        $category = Category::find($category_id);
        $this->category_id = $category->id;
        $this->name = $category->name;
    }

    function updateCategory() {
        $this->validate([
            'name' => 'required'
        ]);

        $category = Category::find($this->category_id);
        $category->name = $this->name;

        $category->save();
        session()->flash('success', 'Category Updated!');
    }

    public function render()
    {
        return view('livewire.admin.categories.edit-category-component');
    }
}
