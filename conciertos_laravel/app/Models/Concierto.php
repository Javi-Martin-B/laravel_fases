<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Concierto extends Model
{
    // Permite asignación masiva de los campos (asegúrate de tenerlos en la migración)
    protected $fillable = ['nombre', 'grupo_id', 'espacio_id', 'manager_id', 'fecha'];

    // Cada Concierto pertenece a un Grupo
    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }

    // Cada Concierto se celebra en un Espacio
    public function espacio()
    {
        return $this->belongsTo(Espacio::class);
    }

    // Cada Concierto es creado por un Manager
    public function manager()
    {
        return $this->belongsTo(Manager::class);
    }
}
