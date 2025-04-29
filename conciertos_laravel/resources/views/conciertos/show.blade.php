@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $concierto->nombre }}</h1>

    <p>ID: {{ $concierto->id }}</p>
    <p>Creado: {{ $concierto->created_at }}</p>

    <a href="{{ route('conciertos.edit', $concierto) }}">Editar</a>
    <a href="{{ route('conciertos.index') }}">Volver al listado</a>
</div>
@endsection
