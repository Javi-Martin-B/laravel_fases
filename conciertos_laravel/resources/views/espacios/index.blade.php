@extends('layouts.app')

@section('content')
<div class="container">
    <h1>espacios</h1>
    <a href="{{ route('espacios.create') }}">Crear nuevo espacio</a>

    <ul>
        @foreach ($espacios as $espacio)
            <li>
                <a href="{{ route('espacios.show', $espacio) }}">{{ $espacio->nombre }}</a>
                <a href="{{ route('espacios.edit', $espacio) }}">Editar</a>
                <form action="{{ route('espacios.destroy', $espacio) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
