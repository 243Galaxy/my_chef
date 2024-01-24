<?php

namespace App\Livewire\Admin\Food;

use App\Models\Food;
use Livewire\Component;

class ViewFoodComponent extends Component
{
    public $removeId = '';

    public function deleteId($id)
    {
        $this->removeId = $id;
    }
    
    function remove() { 
        $food = Food::find($this->removeId);
        unlink('imgs/uploads/'.$food->picture);
        $food->delete();
        session()->flash('success', 'Food Deleted!');
    }

    public function render()
    {
        $foods = Food::get();
        return view('livewire.admin.food.view-food-component', ['foods' => $foods]);
    }
}
