@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $manager->nombre }}</h1>

    <p>ID: {{ $manager->id }}</p>
    <p>Creado: {{ $manager->created_at }}</p>

    <a href="{{ route('managers.edit', $manager) }}">Editar</a>
    <a href="{{ route('managers.index') }}">Volver al listado</a>
</div>
@endsection
