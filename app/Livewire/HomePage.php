<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Acceuil - CED')]
class HomePage extends Component
{
    public function render()
    {
        return view('livewire.home-page');
    }
}
