<?php

namespace App\Livewire\Admin\Recipe;

use App\Models\Recipe;
use Livewire\Component;

class ViewRecipeComponent extends Component
{
    public $food_id;
    
    public function render()
    {
        $recipes = Recipe::where('food_id', $this->food_id)->get();
        return view('livewire.admin.recipe.view-recipe-component', ['recipes' => $recipes]);
    }
}
