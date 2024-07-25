<?php

namespace App\Livewire;

use App\Models\Demande;
use Livewire\Component;

class VoirDemande extends Component
{
    public $id;

    public function mount($id)
    {
        $this->id = $id;
    }

    public function render()
    {
        $demandes = Demande::where('demandes.id', $this->id)
            ->select('demandes.*')
            ->first();
        return view('livewire.voir-demande', [
            'demande' => $demandes,
        ]);
    }
}
