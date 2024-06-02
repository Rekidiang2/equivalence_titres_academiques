<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'demande_id',
        'user_id',
        'num_dossier',
        'statut',
        'grade_equivalenmt',
        'observation'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function demande()
    {
        return $this->belongsTo(Demande::class);
    }

    public function payement()
    {
        return $this->belongsTo(Payement::class);
    }
}
