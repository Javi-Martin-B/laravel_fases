<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    // Permite asignación masiva de estos campos
    protected $fillable = ['nombre', 'manager_id'];

    // Cada Grupo pertenece a un Manager
    public function manager()
    {
        return $this->belongsTo(Manager::class);
    }

    // Grupo y Espacio: relación muchos a muchos (tabla pivote: espacio_grupo)
    public function espacios()
    {
        return $this->belongsToMany(Espacio::class, 'espacio_grupo');
    }

    // Un Grupo puede tener muchos Conciertos
    public function conciertos()
    {
        return $this->hasMany(Concierto::class);
    }
}
