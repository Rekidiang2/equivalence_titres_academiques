<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login - CED')]
class Login extends Component
{
    public $email;
    public $password;

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!auth()->attempt([
            'email' => $this->email,
            'password' => $this->password
        ])) {
            session()->flash('error', 'Email ou mot de passe incorrect');
            return;
        }
        return redirect()->intended();
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
