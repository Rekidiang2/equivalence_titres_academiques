<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Demande extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        // Identite
        'nom',
        'postnom',
        'prenom',
        'genre',
        'lieu_naissance',
        'date_naissance',
        'photo',
        'nationalite',
        'type_identite',
        'numero_identite',
        'email_requerant',
        'phone_requerant',
        'addresse_requerant',
        'piece_identite_copy',
        'preuve_sejour_copy',
        'lettre_demande_copy',
        // Universite
        'nom_univ_origine',
        'nom_univ_fr',
        'secteur_univ',
        'date_creation',
        'pays_etude',
        'province_ville_etude',
        'siteweb_univ',
        'email_univ',
        'phone_univ',
        // Cursus
        'grade',
        'option',
        'num_diplome',
        'date_diplome',
        'date_debut_cursus',
        'date_fin_cursus',
        'diplome_base_copy',
        'diplome_univ_copy',
        'releve_cote_copy',
        'mode_enseignement',
    ];

    protected $casts = [
        'diplome_univ_copy' => 'array',
        'preuve_sejour_copy' => 'array',
        'releve_cote_copy' => 'array',
    ];

    public function payement()
    {
        return $this->hasOne(Payement::class);
    }

    public function dossier()
    {
        return $this->hasOne(Dossier::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $appends = ['fullName'];

    public function getFullNameAttribute()
    {
        return $this->nom . ' ' . $this->postnom . ' ' . $this->prenom;
    }
}
