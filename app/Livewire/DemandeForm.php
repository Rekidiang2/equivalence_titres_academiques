<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Title('Demande - CED')]
class DemandeForm extends Component
{
    use WithFileUploads;

    public $user_id;

    // Identite
    public $nom;
    public $postnom;
    public $prenom;
    public $genre;
    public $lieu_naissance;
    public $date_naissance;
    public $photo;
    public $nationalite;
    public $type_identite;
    public $numero_identite;
    public $email;
    public $phone;
    public $addresse;
    public $identite_file;
    public $visa_file;

    // Universite
    public $nom_origine;
    public $nom_fr;
    public $secteur;
    public $annee_creation;
    public $pays;
    public $province_ville;
    public $siteweb;
    public $etab_email1;
    public $etab_email2;
    public $etab_phone1;
    public $etab_phone2;

    // Cursus
    public $grade;
    public $option;
    public $num_diplome;
    public $date_delivrance;
    public $date_debut_cursus;
    public $date_fin_cursus;
    public $diplome_file;
    public $releve_file;

    public function demander()
    {
        $this->validate([
            'user_id' => 'required',
            'nom' => 'required',
            'postnom' => 'required',
            'prenom' => 'required',
            'genre' => 'required',
            'lieu_naissance' => 'required',
            'date_naissance' => 'required',
            'photo' => 'required|image|max:1024',
            'nationalite' => 'required',
            'type_identite' => 'required',
            'numero_identite' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'addresse' => 'required',
            'identite_file' => 'required',
            'visa_file' => 'required',
            'nom_origine' => 'required',
            'nom_fr' => 'required',
            'secteur' => 'required',
            'annee_creation' => 'required',
            'pays' => 'required',
            'province_ville' => 'required',
            'siteweb' => 'required',
            'etab_email1' => 'required',
            'etab_phone1' => 'required',
            'grade' => 'required',
            'option' => 'required',
            'num_diplome' => 'required',
            'date_delivrance' => 'required',
            'date_debut_cursus' => 'required',
            'date_fin_cursus' => 'required',
            'diplome_file' => 'required',
            'releve_file' => 'required',
        ]);
    }

    public function render()
    {
        return view('livewire.demande-form');
    }
}
