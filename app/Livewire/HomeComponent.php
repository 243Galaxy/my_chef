<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        // $categories = Category::get();
        return view('livewire.home-component')->layout('layouts.home');
    }
}
