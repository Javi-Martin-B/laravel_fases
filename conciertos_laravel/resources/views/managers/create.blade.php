@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear manager</h1>

    <form action="{{ route('managers.store') }}" method="POST">
        @csrf
        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <button type="submit">Guardar</button>
    </form>
</div>
@endsection
