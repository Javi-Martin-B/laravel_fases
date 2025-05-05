<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    // Permite asignación masiva; agrega otros campos que necesites
    protected $fillable = ['nombre'];

    // Un Manager puede gestionar varios Grupos
    public function grupos()
    {
        return $this->hasMany(Grupo::class);
    }

    // Un Manager crea y gestiona muchos Conciertos
    public function conciertos()
    {
        return $this->hasMany(Concierto::class);
    }
}
