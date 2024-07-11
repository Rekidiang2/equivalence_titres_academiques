<?php

namespace App\Livewire;

use App\Models\Demande;
use App\Models\Dossier;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Espace Utilisateur - CED')]
class UserEspace extends Component
{
    use WithPagination;

    public function render()
    {
        $user_id = auth()->user()->id;
        // $demandes = Demande::where('user_id', 1)->get();
        $demandes = Demande::leftJoin('payements', 'demandes.id', '=', 'payements.demande_id')
            ->where('demandes.user_id', $user_id)
            ->select('demandes.*', 'payements.*')
            ->get();

        $dossiers = Dossier::join('demandes', 'dossiers.demande_id', '=', 'demandes.id')
            ->where('dossiers.user_id', $user_id)
            ->select('dossiers.*', 'demandes.*')
            ->get();
        // $demandes = Demande::query()->where('user_id', 1);
        // $dossiers = Dossier::where('user_id', 1)->get();
        return view('livewire.user-espace', [
            'demandes' => $demandes,  // ->paginate(5),
            'dossiers' => $dossiers,
            // 'demandes' => $demandes,
        ]);
    }
}
