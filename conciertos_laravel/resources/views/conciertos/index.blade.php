@extends('layouts.app')

@section('content')
<div class="container">
    <h1>conciertos</h1>
    <a href="{{ route('conciertos.create') }}">Crear nuevo concierto</a>

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
