<?php

namespace App\Livewire;

use App\Models\Recipe;
use Livewire\Component;

class RecipeComponent extends Component
{
    public $food_id;

    public function render()
    {
        $recipes = Recipe::where('food_id', '=', $this->food_id)->get();
        return view('livewire.recipe-component', ['recipes' => $recipes])->layout('layouts.home');
    }
}
