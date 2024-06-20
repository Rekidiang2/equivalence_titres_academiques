<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Verification - CED')]
class Verifier extends Component
{
    public function render()
    {
        return view('livewire.verifier');
    }
}
