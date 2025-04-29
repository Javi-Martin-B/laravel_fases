@extends('layouts.app')

@section('content')
<div class="container">
    <h1>managers</h1>
    <a href="{{ route('managers.create') }}">Crear nuevo manager</a>

    <ul>
        @foreach ($managers as $manager)
            <li>
                <a href="{{ route('managers.show', $manager) }}">{{ $manager->nombre }}</a>
                <a href="{{ route('managers.edit', $manager) }}">Editar</a>
                <form action="{{ route('managers.destroy', $manager) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection
