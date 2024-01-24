<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $categories = Category::take(5)->get();
        return view('livewire.home-component', ['categories' => $categories])->layout('layouts.home');
    }
}
