<?php

namespace App\Livewire\Admin\Recipe;

use App\Models\Recipe;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditRecipeComponent extends Component
{
    use WithFileUploads;
    public $name, $measure, $picture, $new_picture, $recipe_id, $food_id;

    function mount($recipe_id) {
        $recipe = Recipe::find($recipe_id);
        $this->recipe_id = $recipe->id;
        $this->name = $recipe->name;
        $this->measure = $recipe->measure;
        $this->picture = $recipe->picture;
    }

    function updateRecipe() {
        $this->validate([
            'name' => 'required',
            'measure' => 'required',
            'picture' => 'required'
        ]);

        $recipe = Recipe::find($this->recipe_id);
        $recipe->name = $this->name;
        $recipe->measure = $this->measure;
        if ($this->new_picture) {
            unlink('imgs/uploads/'.$recipe->picture);
            $imageName = Carbon::now()->timestamp.'.'.$this->new_picture->extension();
            $this->new_picture->storeAs('uploads', $imageName);
            $recipe->picture = $imageName;
        }

        $recipe->save();
        session()->flash('success', 'Recipe Updated Successfully');
    }

    public function render()
    {
        return view('livewire.admin.recipe.edit-recipe-component');
    }
}
