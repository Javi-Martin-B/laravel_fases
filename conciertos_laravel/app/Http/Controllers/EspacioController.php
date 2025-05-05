<?php

namespace App\Http\Controllers;

use App\Models\Espacio;
use Illuminate\Http\Request;

class EspacioController extends Controller
{
    /**
     * Muestra la lista de espacios.
     */
    public function index()
    {
        $espacios = Espacio::all();
        return view('espacios.index', compact('espacios'));
    }
    
    /**
     * Muestra el formulario para crear un nuevo espacio.
     */
    public function create()
    {
        return view('espacios.create');
    }
    
    /**
     * Almacena un espacio en la base de datos.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre'         => 'required|string|max:255',
            'capacidad'      => 'required|integer',
            'disponibilidad' => 'required|string|max:255',
        ]);
        
        Espacio::create($validated);
        return redirect()->route('espacios.index')->with('status', 'Espacio creado exitosamente.');
    }
    
    /**
     * Muestra detalles de un espacio.
     */
    public function show(Espacio $espacio)
    {
        return view('espacios.show', compact('espacio'));
    }
    
    /**
     * Muestra el formulario para editar un espacio.
     */
    public function edit(Espacio $espacio)
    {
        return view('espacios.edit', compact('espacio'));
    }
    
    /**
     * Actualiza un espacio existente.
     */
    public function update(Request $request, Espacio $espacio)
    {
        $validated = $request->validate([
            'nombre'         => 'required|string|max:255',
            'capacidad'      => 'required|integer',
            'disponibilidad' => 'required|string|max:255',
        ]);
        
        $espacio->update($validated);
        return redirect()->route('espacios.index')->with('status', 'Espacio actualizado exitosamente.');
    }
    
    /**
     * Elimina un espacio.
     */
    public function destroy(Espacio $espacio)
    {
        $espacio->delete();
        return redirect()->route('espacios.index')->with('status', 'Espacio eliminado exitosamente.');
    }
}
