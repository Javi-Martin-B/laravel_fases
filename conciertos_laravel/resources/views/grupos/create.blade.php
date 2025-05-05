@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">Crear Nuevo Grupo</h1>
    <form action="{{ route('grupos.store') }}" method="POST">
        @csrf
        <!-- Nombre -->
        <div class="form-group">
            <label for="nombre">Nombre del Grupo</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>

        <!-- Manager -->
        <div class="form-group mt-2">
            <label for="manager_id">Seleccionar Manager</label>
            <select name="manager_id" id="manager_id" class="form-control" required>
                <option value="">-- Escoge un Manager --</option>
                @foreach ($managers as $manager)
                    <option value="{{ $manager->id }}">{{ $manager->nombre }}</option>
                @endforeach
            </select>
        </div>

        <!-- Espacios (relación n:m) -->
        <div class="form-group mt-2">
            <label for="espacios">Espacios Disponibles</label>
            <select name="espacios[]" id="espacios" class="form-control" multiple>
                @foreach ($espacios as $espacio)
                    <option value="{{ $espacio->id }}">{{ $espacio->nombre }}</option>
                @endforeach
            </select>
            <small class="form-text text-muted">Mantén presionada la tecla Ctrl (CMD en Mac) para seleccionar múltiples espacios.</small>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Crear Grupo</button>
    </form>
</div>
@endsection
