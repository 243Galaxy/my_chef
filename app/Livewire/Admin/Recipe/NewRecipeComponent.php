<?php

namespace App\Livewire\Admin\Recipe;

use App\Models\Recipe;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewRecipeComponent extends Component
{
    use WithFileUploads;
    public $name, $measure, $picture, $food_id;

    function newRecipe() {
        $this->validate([
            'name' => 'required',
            'measure' => 'required',
            'picture' => 'required'
        ]);

        $recipe = new Recipe();
        $recipe->name = $this->name;
        $recipe->measure = $this->measure;
        $recipe->food_id = $this->food_id;
        $imageName = Carbon::now()->timestamp.'.'.$this->picture->extension();
        $this->picture->storeAs('uploads', $imageName);
        $recipe->picture = $imageName;

        $recipe->save();
        session()->flash('success', 'Recipe Added!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.recipe.new-recipe-component');
    }
}
