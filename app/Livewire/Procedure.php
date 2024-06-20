<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Procédure - CED')]
class Procedure extends Component
{
    public function render()
    {
        return view('livewire.procedure');
    }
}
