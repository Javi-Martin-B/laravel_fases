@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">Editar Espacio</h1>
    <form action="{{ route('espacios.update', $espacio) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre del Espacio</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $espacio->nombre) }}" required>
        </div>
        <div class="form-group mt-2">
            <label for="capacidad">Capacidad</label>
            <input type="number" name="capacidad" id="capacidad" class="form-control" value="{{ old('capacidad', $espacio->capacidad) }}" required>
        </div>
        <div class="form-group mt-2">
            <label for="disponibilidad">Disponibilidad</label>
            <input type="text" name="disponibilidad" id="disponibilidad" class="form-control" value="{{ old('disponibilidad', $espacio->disponibilidad) }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Actualizar Espacio</button>
    </form>
</div>
@endsection
