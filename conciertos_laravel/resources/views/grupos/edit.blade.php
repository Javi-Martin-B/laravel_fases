@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Grupo</h1>

    <form action="{{ route('grupos.update', $grupo) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $grupo->nombre }}" required>

        <button type="submit">Actualizar</button>
    </form>
</div>
@endsection
