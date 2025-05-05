<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Espacio extends Model
{
    // Los atributos asignables (por ejemplo, nombre, capacidad y disponibilidad)
    protected $fillable = ['nombre', 'capacidad', 'disponibilidad'];

    // Relación muchos a muchos con Grupos (tabla pivote: espacio_grupo)
    public function grupos()
    {
        return $this->belongsToMany(Grupo::class, 'espacio_grupo');
    }

    // Un Espacio puede albergar varios Conciertos
    public function conciertos()
    {
        return $this->hasMany(Concierto::class);
    }
}
