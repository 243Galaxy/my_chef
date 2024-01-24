<?php

namespace App\Livewire\Admin\Categories;

use App\Models\Category;
use Livewire\Component;

class NewCategoryComponent extends Component
{
    public $name;

    function newCategory() {
        $this->validate([
            'name' => 'required'
        ]);

        $category = new Category();
        $category->name = $this->name;

        $category->save();
        session()->flash('success', 'Category Added!');
        
        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.categories.new-category-component');
    }
}
