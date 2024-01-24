<?php

namespace App\Livewire\Admin\Food;

use App\Models\Category;
use App\Models\Food;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewFoodComponent extends Component
{
    use WithFileUploads;
    public $name, $category_id, $process, $picture, $other;

    function newFood() {
        $this->validate([
            'name' => 'required',
            'category_id' => 'required',
            'process' => 'required',
            'picture' => 'required',
            'other' => 'nullable|sometimes'
        ]);

        $food = new Food();
        $food->name = $this->name;
        $food->category_id = $this->category_id;
        $food->process = $this->process;
        $food->other = $this->other;
        $imageName = Carbon::now()->timestamp.'.'.$this->picture->extension();
        $this->picture->storeAs('uploads', $imageName);
        $food->picture = $imageName;

        $food->save();
        session()->flash('success', 'Food Added Successfully');

        $this->reset();
    }

    public function render()
    {
        $categories = Category::get();
        return view('livewire.admin.food.new-food-component', ['categories' => $categories]);
    }
}
