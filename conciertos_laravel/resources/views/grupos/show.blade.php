@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $grupo->nombre }}</h1>

    <p>ID: {{ $grupo->id }}</p>
    <p>Creado: {{ $grupo->created_at }}</p>

    <a href="{{ route('grupos.edit', $grupo) }}">Editar</a>
    <a href="{{ route('grupos.index') }}">Volver al listado</a>
</div>
@endsection
