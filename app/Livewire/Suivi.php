<?php

namespace App\Livewire;

use App\Models\Dossier;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Suivi - CED')]
class Suivi extends Component
{
    public $id;

    public function mount($id)
    {
        $this->id = $id;
    }

    public function render()
    {
        $dossiers = Dossier::join('demandes', 'dossiers.demande_id', '=', 'demandes.id')
            ->where('dossiers.id', $this->id)
            ->select('dossiers.*', 'demandes.nom', 'demandes.postnom', 'demandes.prenom', 'demandes.phone_requerant', 'demandes.email_requerant', 'demandes.grade', 'demandes.option')
            ->first();
        return view('livewire.suivi', [
            'dossier' => $dossiers  // Dossier::where('id', $this->id)->firstOrFail()
        ]);
    }
}
