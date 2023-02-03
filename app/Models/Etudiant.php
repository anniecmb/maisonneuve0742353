<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'adresse',
        'telephone',
        'courriel',
        'naissance',
        'ville_id'
    ];

    public function etudiantHasVille() {

        // $this réfère à la class Etudiant
        //                         model,         PK,      FK
        return $this->hasOne('App\Models\Ville', 'id', 'ville_id');
    }
}
