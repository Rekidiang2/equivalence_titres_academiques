<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Payement - CED')]
class Payement extends Component
{
    public function render()
    {
        return view('livewire.payement');
    }
}
