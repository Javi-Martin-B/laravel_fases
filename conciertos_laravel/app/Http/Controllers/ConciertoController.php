<?php

namespace App\Http\Controllers;

use App\Models\Concierto;
use App\Models\Grupo;
use App\Models\Espacio;
use App\Models\Manager;
use Illuminate\Http\Request;

class ConciertoController extends Controller
{
    /**
     * Muestra la lista de conciertos.
     */
    public function index()
    {
        $conciertos = Concierto::with('grupo', 'espacio', 'manager')->get();
        return view('conciertos.index', compact('conciertos'));
    }
    
    /**
     * Muestra el formulario para crear un nuevo concierto.
     */
    public function create()
    {
        // Trae todos los registros necesarios para llenar los selects.
        $grupos   = Grupo::all();
        $espacios = Espacio::all();
        $managers = Manager::all();
        return view('conciertos.create', compact('grupos', 'espacios', 'managers'));
    }
    
    /**
     * Guarda un concierto.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre'      => 'required|string|max:255',
            'grupo_id'    => 'required|exists:grupos,id',
            'espacio_id'  => 'required|exists:espacios,id',
            'manager_id'  => 'required|exists:managers,id',
            'fecha'       => 'nullable|date',
        ]);
        
        Concierto::create($validated);
        return redirect()->route('conciertos.index')->with('status', 'Concierto creado exitosamente.');
    }
    
    /**
     * Muestra los detalles de un concierto.
     */
    public function show(Concierto $concierto)
    {
        $concierto->load('grupo', 'espacio', 'manager');
        return view('conciertos.show', compact('concierto'));
    }
    
    /**
     * Muestra el formulario para editar un concierto.
     */
    public function edit(Concierto $concierto)
    {
        $grupos   = Grupo::all();
        $espacios = Espacio::all();
        $managers = Manager::all();
        return view('conciertos.edit', compact('concierto', 'grupos', 'espacios', 'managers'));
    }
    
    /**
     * Actualiza un concierto.
     */
    public function update(Request $request, Concierto $concierto)
    {
        $validated = $request->validate([
            'nombre'      => 'required|string|max:255',
            'grupo_id'    => 'required|exists:grupos,id',
            'espacio_id'  => 'required|exists:espacios,id',
            'manager_id'  => 'required|exists:managers,id',
            'fecha'       => 'nullable|date',
        ]);
        
        $concierto->update($validated);
        return redirect()->route('conciertos.index')->with('status', 'Concierto actualizado exitosamente.');
    }
    
    /**
     * Elimina un concierto.
     */
    public function destroy(Concierto $concierto)
    {
        $concierto->delete();
        return redirect()->route('conciertos.index')->with('status', 'Concierto eliminado exitosamente.');
    }
}
