@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">Editar Grupo</h1>
    <form action="{{ route('grupos.update', $grupo) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Nombre -->
        <div class="form-group">
            <label for="nombre">Nombre del Grupo</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $grupo->nombre) }}" required>
        </div>

        <!-- Manager -->
        <div class="form-group mt-2">
            <label for="manager_id">Seleccionar Manager</label>
            <select name="manager_id" id="manager_id" class="form-control" required>
                @foreach ($managers as $manager)
                    <option value="{{ $manager->id }}" {{ $grupo->manager_id == $manager->id ? 'selected' : '' }}>
                        {{ $manager->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Espacios asociados -->
        <div class="form-group mt-2">
            <label for="espacios">Espacios Disponibles</label>
            <select name="espacios[]" id="espacios" class="form-control" multiple>
                @foreach ($espacios as $espacio)
                    <option value="{{ $espacio->id }}" 
                        {{ in_array($espacio->id, $grupo->espacios->pluck('id')->toArray()) ? 'selected' : '' }}>
                        {{ $espacio->nombre }}
                    </option>
                @endforeach
            </select>
            <small class="form-text text-muted">Mantén presionada la tecla Ctrl (CMD en Mac) para seleccionar múltiples espacios.</small>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Actualizar Grupo</button>
    </form>
</div>
@endsection
