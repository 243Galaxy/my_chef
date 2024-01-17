<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginComponent extends Component
{
    public $email, $password;

    function signin() {
        $validatedDate = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(\Auth::attempt(array('email' => $this->email, 'password' => $this->password) )){
                return redirect()->to('/admin/dashboard');
            }else{
                session()->flash('error', 'Invalid email and/or password.');
            }
    }

    public function render()
    {
        return view('livewire.login-component')->layout('layouts.home');
    }
}
