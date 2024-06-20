<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Changer Mot de Passe - CED')]
class ResetPassword extends Component
{
    public function render()
    {
        return view('livewire.auth.reset-password');
    }
}
