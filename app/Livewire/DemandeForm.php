<?php

namespace App\Livewire;

use App\Models\Demande;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Title('Demande - CED')]
class DemandeForm extends Component
{
    use WithFileUploads;

    public $user_id;

    // Identité
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
    public $email_requerant;
    public $phone_requerant;
    public $addresse_requerant;
    public $lettre_demande_copy;
    public $piece_identite_copy;
    public $preuve_sejour_copy;

    // Université
    public $nom_univ_origine;
    public $nom_univ_fr;
    public $secteur_univ;
    public $date_creation;
    public $pays_etude;
    public $province_ville_etude;
    public $siteweb_univ;
    public $email_univ;
    public $phone_univ;

    // Cursus
    public $grade;
    public $option;
    public $num_diplome;
    public $date_diplome;
    public $date_debut_cursus;
    public $date_fin_cursus;
    public $mode_enseignement;
    public $diplome_base_copy;
    public $diplome_univ_copy;
    public $releve_cote_copy;

    public function demander()
    {
        $this->validate([
            // 'user_id' => 'required',
            'nom' => 'required',
            'postnom' => 'required',
            'prenom' => 'required',
            'genre' => 'required',
            'lieu_naissance' => 'required',
            'date_naissance' => 'required|date',
            'photo' => 'required|image|max:1024',
            'nationalite' => 'required',
            'type_identite' => 'required',
            'numero_identite' => 'required',
            'email_requerant' => 'required|email',
            'phone_requerant' => 'required|numeric',
            'addresse_requerant' => 'required',
            'piece_identite_copy' => 'required|file|mimes:pdf|max:2048',
            'preuve_sejour_copy' => 'required|file|mimes:pdf|max:2048',
            'nom_univ_origine' => 'required',
            'nom_univ_fr' => 'required',
            'secteur_univ' => 'required',
            'date_creation' => 'required|date',
            'pays_etude' => 'required',
            'province_ville_etude' => 'required',
            'siteweb_univ' => 'required|url',
            'email_univ' => 'required|email',
            'phone_univ' => 'required|numeric',
            'grade' => 'required',
            'option' => 'required',
            'num_diplome' => 'required',
            'date_diplome' => 'required|date',
            'date_debut_cursus' => 'required|date',
            'date_fin_cursus' => 'required|date',
            'diplome_base_copy' => 'required|file|mimes:pdf|max:2048',
            'diplome_univ_copy' => 'required|file|mimes:pdf|max:2048',
            'releve_cote_copy' => 'required|file|mimes:pdf|max:2048',
            'lettre_demande_copy' => 'required|file|mimes:pdf|max:2048',
            'mode_enseignement' => 'required',
        ]);

        // Store each file in a different folder
        $photoPath = $this->photo->store('photos', 'public');
        $pieceIdentitePath = $this->piece_identite_copy->store('piece_identite', 'public');
        $preuveSejourPath = $this->preuve_sejour_copy->store('preuve_sejour', 'public');
        $lettreDemandePath = $this->lettre_demande_copy->store('lettre_demande', 'public');
        $diplomeBasePath = $this->diplome_base_copy->store('diplome_base', 'public');
        $diplomeUnivPath = $this->diplome_univ_copy->store('diplome_univ', 'public');
        $releveCotePath = $this->releve_cote_copy->store('releve_cote', 'public');

        // Save file paths or other processing
        Demande::create([
            'photo' => $photoPath,
            'piece_identite_copy' => $pieceIdentitePath,
            'preuve_sejour_copy' => $preuveSejourPath,
            'lettre_demande_copy' => $lettreDemandePath,
            'diplome_base_copy' => $diplomeBasePath,
            'diplome_univ_copy' => $diplomeUnivPath,
            'releve_cote_copy' => $releveCotePath,
            'user_id' => auth()->user()->id,
            'nom' => $this->nom,
            'postnom' => $this->postnom,
            'prenom' => $this->prenom,
            'genre' => $this->genre,
            'lieu_naissance' => $this->lieu_naissance,
            'date_naissance' => $this->date_naissance,
            'nationalite' => $this->nationalite,
            'type_identite' => $this->type_identite,
            'numero_identite' => $this->numero_identite,
            'email_requerant' => $this->email_requerant,
            'phone_requerant' => $this->phone_requerant,
            'addresse_requerant' => $this->addresse_requerant,
            'nom_univ_origine' => $this->nom_univ_origine,
            'nom_univ_fr' => $this->nom_univ_fr,
            'secteur_univ' => $this->secteur_univ,
            'date_creation' => $this->date_creation,
            'pays_etude' => $this->pays_etude,
            'province_ville_etude' => $this->province_ville_etude,
            'siteweb_univ' => $this->siteweb_univ,
            'email_univ' => $this->email_univ,
            'phone_univ' => $this->phone_univ,
            'grade' => $this->grade,
            'option' => $this->option,
            'num_diplome' => $this->num_diplome,
            'date_diplome' => $this->date_diplome,
            'date_debut_cursus' => $this->date_debut_cursus,
            'date_fin_cursus' => $this->date_fin_cursus,
            'mode_enseignement' => $this->mode_enseignement,
        ]);

        // Show success message
        session()->flash('message', 'Demande soumise avec succès.');

        // Reset form fields
        $this->reset([
            'diplome_base_copy',
            'diplome_univ_copy',
            'releve_cote_copy',
            'lettre_demande_copy',
            'photo',
            'piece_identite_copy',
            'preuve_sejour_copy'
        ]);

        // Redirect to another page
        return redirect()->route('user.espace');
    }

    public function render()
    {
        return view('livewire.demande-form');
    }
}
