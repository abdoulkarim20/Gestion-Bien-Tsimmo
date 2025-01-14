<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proprietaire extends Model
{
    protected $fillable = [
        'prenom',
        'nom',
        'dateNaissance',
        'lieuNaissance',
        'civilite',
        'codePieceIdentite',
        'numeroPieceIdentite'
    ];
    use HasFactory;
    public function proprietes()
    {
        return $this->hasMany(Propriete::class);
    }
}
