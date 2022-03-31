<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quartier extends Model
{
    protected $fillable = ['libelle'];
    public function proprietes()
    {
        return $this->hasMany(Propriete::class);
    }
}
