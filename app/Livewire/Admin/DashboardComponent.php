<?php

namespace App\Livewire\Admin;

use App\Models\Category;
use App\Models\Food;
use App\Models\User;
use Livewire\Component;

class DashboardComponent extends Component
{
    public $categories = [
        [
            'Day'=>'Foods',
            'Value'=>22,
        ],
        ['Day'=>'Tue', 'Value'=>20],
        ['Day'=>'Wed', 'Value'=>15],
        ['Day'=>'Thu', 'Value'=>25],
        ['Day'=>'Fri', 'Value'=>30],
        ['Day'=>'Sat', 'Value'=>22],
        ['Day'=>'Sun', 'Value'=>18]
    ];
    public function render()
    {
        $summary = [
            'users'=>User::count(),
            'foods'=>Food::count(),
            'category'=>Category::count()
        ];

        return view('livewire.admin.dashboard-component', ['summary'=>$summary]);
    }
}
