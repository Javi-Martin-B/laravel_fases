@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">Crear Nuevo Espacio</h1>
    <form action="{{ route('espacios.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre del Espacio</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="form-group mt-2">
            <label for="capacidad">Capacidad</label>
            <input type="number" name="capacidad" id="capacidad" class="form-control" required>
        </div>
        <div class="form-group mt-2">
            <label for="disponibilidad">Disponibilidad</label>
            <input type="text" name="disponibilidad" id="disponibilidad" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Crear Espacio</button>
    </form>
</div>
@endsection
