<?php

namespace App\Livewire;

use App\Models\Demande;
use App\Models\Payement as PayementModel;
use Livewire\Component;
use Livewire\WithFileUploads;

class Payement extends Component
{
    use WithFileUploads;

    public $demande_id;
    public $numero_note;
    public $date_taxation;
    public $copie_note;
    public $numero_bordereau;
    public $date_bordereau;
    public $copie_bordereau;

    public function mount($id)
    {
        $this->demande_id = $id;
    }

    public function payement()
    {
        $this->validate([
            'demande_id' => 'required|exists:demandes,id',
            'numero_note' => 'required',
            'date_taxation' => 'required|date',
            'copie_note' => 'required|file|mimes:pdf|max:2048',
            'numero_bordereau' => 'required',
            'date_bordereau' => 'required|date',
            'copie_bordereau' => 'required|file|mimes:pdf|max:2048',
        ]);

        $notePerceptionPath = $this->copie_note->store('copie_note', 'public');
        $bordereauPath = $this->copie_bordereau->store('copie_bordereau', 'public');

        PayementModel::create([
            'copie_note' => $notePerceptionPath,
            'copie_bordereau' => $bordereauPath,
            'demande_id' => $this->demande_id,
            'numero_note' => $this->numero_note,
            'date_taxation' => $this->date_taxation,
            'numero_bordereau' => $this->numero_bordereau,
            'date_bordereau' => $this->date_bordereau,
        ]);

        session()->flash('message', 'Demande soumise avec succès.');

        $this->reset([
            'numero_note',
            'date_taxation',
            'copie_note',
            'numero_bordereau',
            'date_bordereau',
            'copie_bordereau',
        ]);

        return redirect()->route('user.espace');
    }

    public function render()
    {
        $demande = Demande::find($this->demande_id);

        return view('livewire.payement', [
            'demande' => $demande,
        ]);
    }
}
