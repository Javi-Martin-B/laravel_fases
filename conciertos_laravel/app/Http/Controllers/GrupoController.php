<?php

namespace App\Http\Controllers;

use App\Models\Grupo;
use App\Models\Manager;
use App\Models\Espacio;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    /**
     * Muestra la lista de grupos.
     */
    public function index()
    {
        $grupos = Grupo::with('manager', 'espacios')->get();
        return view('grupos.index', compact('grupos'));
    }
    
    /**
     * Muestra el formulario para crear un nuevo grupo.
     */
    public function create()
    {
        // Trae todos los managers y espacios para llenar los selects.
        $managers = Manager::all();
        $espacios = Espacio::all();
        return view('grupos.create', compact('managers', 'espacios'));
    }
    
    /**
     * Guarda un nuevo grupo en la base de datos.
     */
    public function store(Request $request)
    {
        // Valida los campos: nombre, manager y espacios (es opcional)
        $validated = $request->validate([
            'nombre'     => 'required|string|max:255',
            'manager_id' => 'required|exists:managers,id',
        ]);

        // Crea el Grupo
        $grupo = Grupo::create($validated);

        // Si se han elegido espacios, sincroniza la relación n:m
        if($request->has('espacios')) {
            // $request->espacios debe ser un array de IDs
            $grupo->espacios()->attach($request->espacios);
        }

        return redirect()->route('grupos.index')->with('status', 'Grupo creado exitosamente.');
    }
    
    /**
     * Muestra los detalles de un grupo.
     */
    public function show(Grupo $grupo)
    {
        $grupo->load('manager', 'espacios');
        return view('grupos.show', compact('grupo'));
    }
    
    /**
     * Muestra el formulario para editar un grupo.
     */
    public function edit(Grupo $grupo)
    {
        $managers = Manager::all();
        $espacios = Espacio::all();
        return view('grupos.edit', compact('grupo', 'managers', 'espacios'));
    }
    
    /**
     * Actualiza un grupo existente.
     */
    public function update(Request $request, Grupo $grupo)
    {
        $validated = $request->validate([
            'nombre'     => 'required|string|max:255',
            'manager_id' => 'required|exists:managers,id',
        ]);

        $grupo->update($validated);

        // Sincroniza la relación con espacios (puede ser vacío)
        if($request->has('espacios')) {
            $grupo->espacios()->sync($request->espacios);
        } else {
            // Si no se envía ningún espacio, se quita la relación
            $grupo->espacios()->detach();
        }
        
        return redirect()->route('grupos.index')->with('status', 'Grupo actualizado exitosamente.');
    }
    
    /**
     * Elimina un grupo.
     */
    public function destroy(Grupo $grupo)
    {
        $grupo->delete();
        return redirect()->route('grupos.index')->with('status', 'Grupo eliminado exitosamente.');
    }
}
