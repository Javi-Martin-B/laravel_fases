@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">Editar Concierto</h1>
    <form action="{{ route('conciertos.update', $concierto) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre del Concierto</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $concierto->nombre) }}" required>
        </div>
        <div class="form-group mt-2">
            <label for="fecha">Fecha del Concierto</label>
            <input type="date" name="fecha" id="fecha" class="form-control" value="{{ old('fecha', $concierto->fecha) }}">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Actualizar Concierto</button>
    </form>
</div>
@endsection
