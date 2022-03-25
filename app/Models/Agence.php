<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agence extends Model {
    use HasFactory;

    const CRETED_AT = 'cree_le';
    const UPDATED_AT = 'modifie_le';

    protected $fillable = [
        'titre',
        'adresse',
        'ville',
        'cp',
        'description',
        'photo',
    ];
}
