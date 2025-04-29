@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $espacio->nombre }}</h1>

    <p>ID: {{ $espacio->id }}</p>
    <p>Creado: {{ $espacio->created_at }}</p>

    <a href="{{ route('espacios.edit', $espacio) }}">Editar</a>
    <a href="{{ route('espacios.index') }}">Volver al listado</a>
</div>
@endsection
