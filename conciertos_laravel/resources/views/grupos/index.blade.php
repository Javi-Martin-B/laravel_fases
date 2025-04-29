@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Grupos</h1>
    <a href="{{ route('grupos.create') }}">Crear nuevo grupo</a>

    <ul>
        @foreach ($grupos as $grupo)
            <li>
                <a href="{{ route('grupos.show', $grupo) }}">{{ $grupo->nombre }}</a>
                <a href="{{ route('grupos.edit', $grupo) }}">Editar</a>
                <form action="{{ route('grupos.destroy', $grupo) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
