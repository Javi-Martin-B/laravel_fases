@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar espacio</h1>

    <form action="{{ route('espacios.update', $espacio) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $espacio->nombre }}" required>

        <button type="submit">Actualizar</button>
    </form>
</div>
@endsection
