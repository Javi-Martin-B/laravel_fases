@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar manager</h1>

    <form action="{{ route('managers.update', $manager) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $manager->nombre }}" required>

        <button type="submit">Actualizar</button>
    </form>
</div>
@endsection
