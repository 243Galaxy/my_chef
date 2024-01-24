<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SidebarComponent extends Component
{
    function logout() {
        Auth::logout();
        return redirect()->route('home');
    }

    public function render()
    {
        $summary = [
            'users'=>User::count()
        ];

        return view('livewire.admin.sidebar-component', ['summary' => $summary]);
    }
}
