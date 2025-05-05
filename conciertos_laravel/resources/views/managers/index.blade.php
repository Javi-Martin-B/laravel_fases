@extends('layouts.app')

@section('content')
<div class="container">
    <h1>managers</h1>
    <a href="{{ route('managers.create') }}" class="inline-block mb-4 px-4 py-2 bg-orange-500 text-white rounded hover:bg-orange-600">Crear nuevo Manager</a>

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
