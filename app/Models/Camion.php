<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    protected $fillable = ['tipo', 'modelo', 'matricula', 'potencia'];

    public function camioneros()
    {
        return $this->belongsToMany(Camionero::class, 'conduce');
    }
}

