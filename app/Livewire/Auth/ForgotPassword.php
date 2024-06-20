<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Oublie Mot de Passe - CED')]
class ForgotPassword extends Component
{
    public function render()
    {
        return view('livewire.auth.forgot-password');
    }
}
