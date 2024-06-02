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
        'email',
        'phone',
        'addresse',
        'identite_file',
        'visa_file',
        // Universite
        'nom_origine',
        'nom_fr',
        'secteur',
        'annee_creation',
        'pays',
        'province_ville',
        'siteweb',
        'etab_email1',
        'etab_email2',
        'etab_phone1',
        'etab_phone2',
        // Cursus
        'grade',
        'option',
        'num_diplome',
        'date_delivrance',
        'date_debut_cursus',
        'date_fin_cursus',
        'diplome_file',
        'releve_file',
    ];

    protected $casts = [
        'diplome_file' => 'array',
        'visa_file' => 'array',
        'releve_file' => 'array',
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