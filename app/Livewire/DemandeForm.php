<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Demande - CED')]
class DemandeForm extends Component
{
    public function render()
    {
        return view('livewire.demande-form');
    }
}
