<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payement extends Model
{
    use HasFactory;

    protected $fillable = [
        'demande_id',
        'montant_cdf',
        'montant_usd',
        'numero_note',
        'date_taxation',
        'copie_note',
        'numero_bordereau',
        'date_bordereau',
        'copie_bordereau',
        'deja_paye',
    ];

    protected $casts = [
        // 'preuve_paiement' => 'array',
    ];

    public function payement()
    {
        return $this->belongsTo(Demande::class);
    }

    public function demande()
    {
        return $this->belongsTo(Demande::class);
    }

    public function dossier()
    {
        return $this->hasOne(Dossier::class);
    }
}
