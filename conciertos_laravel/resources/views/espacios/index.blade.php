@extends('layouts.app')

@section('content')
<div class="container">
    <h1>espacios</h1>
    <a href="{{ route('espacios.create') }}" class="inline-block mb-4 px-4 py-2 bg-orange-500 text-white rounded hover:bg-orange-600">Crear nuevo Espacio</a>

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
