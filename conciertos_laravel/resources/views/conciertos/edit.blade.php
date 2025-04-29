@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar concierto</h1>

    <form action="{{ route('conciertos.update', $concierto) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $concierto->nombre }}" required>

        <button type="submit">Actualizar</button>
    </form>
</div>
@endsection
