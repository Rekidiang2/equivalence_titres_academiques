<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Apropos - CED')]
class Apropos extends Component
{
    public function render()
    {
        return view('livewire.apropos');
    }
}
