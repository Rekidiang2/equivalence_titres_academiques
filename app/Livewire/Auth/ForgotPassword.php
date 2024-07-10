<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Password;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Mot de Passe Oublie - CED')]
class ForgotPassword extends Component
{
    public $email;

    public function save()
    {
        $this->validate([
            'email' => 'required|email|exists:users,email|max:255'
        ]);

        // dd($this->email);

        $status = Password::sendResetLink(['email' => $this->email]);

        if ($status === Password::RESET_LINK_SENT) {
            session()->flash('success', 'Le lien de réinitialisation du mot de passe a été envoyé à votre adresse e-mai !');
            $this->email = '';
        }
    }

    public function render()
    {
        return view('livewire.auth.forgot-password');
    }
}
