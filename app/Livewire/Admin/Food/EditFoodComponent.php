<?php

namespace App\Livewire\Admin\Food;

use App\Models\Category;
use App\Models\Food;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class EditFoodComponent extends Component
{
    use WithFileUploads;

    public $name, $category_id, $process, $picture, $other, $food_id, $new_picture;

    function mount($food_id) {
        $food = Food::find($food_id);
        $this->food_id = $food->id;
        $this->name = $food->name;
        $this->category_id = $food->category_id;
        $this->process = $food->process;
        $this->picture = $food->picture;
        $this->other = $food->other;
    }
    function updateFood() {
        $this->validate([
            'name' => 'required',
            'category_id' => 'required',
            'process' => 'required',
            'picture' => 'required',
            'other' => 'nullable|sometimes'
            
        ]);
        $food = Food::find($this->food_id);
        $food->name = $this->name;
        $food->category_id = $this->category_id;
        $food->process = $this->process;
        $food->other = $this->other;
        if ($this->new_picture) {
            unlink('imgs/uploads/'.$food->picture);
            $imageName = Carbon::now()->timestamp.'.'.$this->new_picture->extension();
            $this->new_picture->storeAs('uploads', $imageName);
            $food->picture = $imageName;
        }
        
        $food->save();
        session()->flash('success', 'Food Updated!');
    }

    public function render()
    {
        $categories = Category::get();
        return view('livewire.admin.food.edit-food-component', ['categories' => $categories]);
    }
}
