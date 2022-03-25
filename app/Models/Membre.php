<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membre extends Model {
    use HasFactory;

    const CRETED_AT = 'cree_le';
    const UPDATED_AT = 'modifie_le';

    protected $fillable = [
        'pseudo',
        'mdp',
        'nom',
        'prenom',
        'email',
        'civilite',
        'statut',
        'date_enregistrement'
    ];
}
