<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Muestra todos los managers.
     */
    public function index()
    {
        $managers = Manager::all();
        return view('managers.index', compact('managers'));
    }
    
    /**
     * Muestra el formulario para crear un nuevo manager.
     */
    public function create()
    {
        return view('managers.create');
    }
    
    /**
     * Almacena un manager.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
        ]);
        
        Manager::create($validated);
        return redirect()->route('managers.index')->with('status', 'Manager creado exitosamente.');
    }
    
    /**
     * Muestra detalles de un manager.
     */
    public function show(Manager $manager)
    {
        return view('managers.show', compact('manager'));
    }
    
    /**
     * Muestra el formulario para editar un manager.
     */
    public function edit(Manager $manager)
    {
        return view('managers.edit', compact('manager'));
    }
    
    /**
     * Actualiza un manager.
     */
    public function update(Request $request, Manager $manager)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
        ]);
        
        $manager->update($validated);
        return redirect()->route('managers.index')->with('status', 'Manager actualizado exitosamente.');
    }
    
    /**
     * Elimina un manager.
     */
    public function destroy(Manager $manager)
    {
        $manager->delete();
        return redirect()->route('managers.index')->with('status', 'Manager eliminado exitosamente.');
    }
}
