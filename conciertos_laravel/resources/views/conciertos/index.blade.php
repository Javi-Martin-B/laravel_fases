@extends('layouts.app')

@section('content')
<div class="container">
    <h1>conciertos</h1>
    <a href="{{ route('conciertos.create') }}" class="inline-block mb-4 px-4 py-2 bg-orange-500 text-white rounded hover:bg-orange-600">Crear nuevo Concierto</a>

    <ul>
        @foreach ($conciertos as $concierto)
            <li>
                <a href="{{ route('conciertos.show', $concierto) }}">{{ $concierto->nombre }}</a>
                <a href="{{ route('conciertos.edit', $concierto) }}">Editar</a>
                <form action="{{ route('conciertos.destroy', $concierto) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
