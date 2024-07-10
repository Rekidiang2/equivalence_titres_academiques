<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Title('Payement - CED')]
class Payement extends Component
{
    use WithFileUploads;

    public $demande_id;
    public $montant_cdf;
    public $montant_usd;
    public $numero_note;
    public $date_taxation;
    public $copie_note;
    public $numero_bordereau;
    public $date_bordereau;
    public $copie_bordereau;
    public $deja_paye;

    public function payement()
    {
        $this->validate([
            'demande_id' => 'required',
            'montant_cdf' => 'required',
            'montant_usd' => 'required',
            'numero_note' => 'required',
            'date_taxation' => 'required',
            'copie_note' => 'required',
            'numero_bordereau' => 'required',
            'date_bordereau' => 'required',
            'copie_bordereau' => 'required',
            'deja_paye' => 'required',
        ]);
    }

    public function render()
    {
        return view('livewire.payement');
    }
}
