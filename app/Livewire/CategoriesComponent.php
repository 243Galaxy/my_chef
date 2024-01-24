<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class CategoriesComponent extends Component
{
    public function render()
    {
        $categories = Category::get();
        return view('livewire.categories-component', ['categories' => $categories])->layout('layouts.home');
    }
}
