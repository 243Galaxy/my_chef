<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Food;
use App\Models\Recipe;
use Livewire\Component;

class FoodComponent extends Component
{
    public $category_id;

    public function render()
    {
        $recipes = Recipe::get();
        $foods = Food::where('category_id', $this->category_id)->get();
        return view('livewire.food-component', ['foods' => $foods, 'recipes' => $recipes])->layout('layouts.home');
    }
}
