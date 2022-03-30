<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propriete extends Model
{
    protected $fillable = [
        'libelle',
        'superficie',
        'nombrePiece',
        'quartier_id',
        'deduction_id',
        'agence_id',
        'type_id',
        'proprietaire_id'
    ];

    public function proprietaire()
    {
        return $this->belongsTo(Proprietaire::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function deduction()
    {
        return $this->belongsTo(Deduction::class);
    }
    public function agence()
    {
        return $this->belongsTo(Agence::class);
    }
    public function quartier()
    {
        return $this->belongsTo(Quartier::class);
    }
}
