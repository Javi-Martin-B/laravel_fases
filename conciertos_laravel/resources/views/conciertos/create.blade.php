@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">Crear Nuevo Concierto</h1>
    <form action="{{ route('conciertos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre del Concierto</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') }}" required>
        </div>
        <div class="form-group mt-2">
            <label for="grupo_id">Grupo</label>
            <select name="grupo_id" id="grupo_id" class="form-control" required>
                <option value="">-- Escoge un Grupo --</option>
                @foreach ($grupos as $grupo)
                    <option value="{{ $grupo->id }}" {{ old('grupo_id') == $grupo->id ? 'selected' : '' }}>
                        {{ $grupo->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-2">
            <label for="espacio_id">Espacio</label>
            <select name="espacio_id" id="espacio_id" class="form-control" required>
                <option value="">-- Escoge un Espacio --</option>
                @foreach ($espacios as $espacio)
                    <option value="{{ $espacio->id }}" {{ old('espacio_id') == $espacio->id ? 'selected' : '' }}>
                        {{ $espacio->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-2">
            <label for="manager_id">Manager</label>
            <select name="manager_id" id="manager_id" class="form-control" required>
                <option value="">-- Escoge un Manager --</option>
                @foreach ($managers as $manager)
                    <option value="{{ $manager->id }}" {{ old('manager_id') == $manager->id ? 'selected' : '' }}>
                        {{ $manager->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group mt-2">
            <label for="fecha">Fecha del Concierto</label>
            <input type="date" name="fecha" id="fecha" class="form-control" value="{{ old('fecha') }}">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Crear Concierto</button>
    </form>
</div>
@endsection
