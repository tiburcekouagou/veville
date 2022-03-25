<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model {
    use HasFactory;

    const CRETED_AT = 'cree_le';
    const UPDATED_AT = 'modifie_le';

    protected $fillable = [
        'date_heure_depart',
        'date_heure_fin',
        'prix_total',
        'date_enregistrement',
    ];
}
