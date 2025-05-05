@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-4xl font-bold mb-10 text-center text-orange-700">Panel Principal</h1>
    
    <!-- Sección de Grupos -->
    <div class="mb-10 p-6 bg-gradient-to-r from-orange-300 to-orange-500 rounded shadow-lg">
        <h2 class="text-2xl font-semibold text-orange-900 mb-4">Grupos</h2>
        <div class="mb-4">
            <a href="{{ route('grupos.create') }}" class="inline-block px-4 py-2 bg-orange-600 text-white rounded hover:bg-orange-700 transition duration-200">
                Crear nuevo Grupo
            </a>
        </div>
        <ul class="space-y-2">
            @foreach ($grupos as $grupo)
            <li class="p-2 bg-orange-100 rounded flex items-center justify-between">
                <a href="{{ route('grupos.show', $grupo) }}" class="text-orange-800 font-medium">
                    {{ $grupo->nombre }}
                </a>
                <div class="flex gap-2">
                    <a href="{{ route('grupos.edit', $grupo) }}" class="px-3 py-1 bg-orange-400 text-white rounded hover:bg-orange-500 transition duration-200">
                        Editar
                    </a>
                    <form action="{{ route('grupos.destroy', $grupo) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-3 py-1 bg-orange-500 text-white rounded hover:bg-orange-600 transition duration-200">
                            Eliminar
                        </button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    
    <!-- Sección de Conciertos -->
    <div class="mb-10 p-6 bg-gradient-to-r from-orange-200 to-orange-400 rounded shadow-lg">
        <h2 class="text-2xl font-semibold text-orange-900 mb-4">Conciertos</h2>
        <div class="mb-4">
            <a href="{{ route('conciertos.create') }}" class="inline-block px-4 py-2 bg-orange-600 text-white rounded hover:bg-orange-700 transition duration-200">
                Crear nuevo Concierto
            </a>
        </div>
        <ul class="space-y-2">
            @foreach ($conciertos as $concierto)
            <li class="p-2 bg-orange-100 rounded flex items-center justify-between">
                <a href="{{ route('conciertos.show', $concierto) }}" class="text-orange-800 font-medium">
                    {{ $concierto->nombre }}
                </a>
                <div class="flex gap-2">
                    <a href="{{ route('conciertos.edit', $concierto) }}" class="px-3 py-1 bg-orange-400 text-white rounded hover:bg-orange-500 transition duration-200">
                        Editar
                    </a>
                    <form action="{{ route('conciertos.destroy', $concierto) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-3 py-1 bg-orange-500 text-white rounded hover:bg-orange-600 transition duration-200">
                            Eliminar
                        </button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    
    <!-- Sección de Espacios -->
    <div class="mb-10 p-6 bg-gradient-to-r from-orange-100 to-orange-300 rounded shadow-lg">
        <h2 class="text-2xl font-semibold text-orange-900 mb-4">Espacios</h2>
        <div class="mb-4">
            <a href="{{ route('espacios.create') }}" class="inline-block px-4 py-2 bg-orange-600 text-white rounded hover:bg-orange-700 transition duration-200">
                Crear nuevo Espacio
            </a>
        </div>
        <ul class="space-y-2">
            @foreach ($espacios as $espacio)
            <li class="p-2 bg-orange-50 rounded flex items-center justify-between">
                <a href="{{ route('espacios.show', $espacio) }}" class="text-orange-800 font-medium">
                    {{ $espacio->nombre }}
                </a>
                <div class="flex gap-2">
                    <a href="{{ route('espacios.edit', $espacio) }}" class="px-3 py-1 bg-orange-400 text-white rounded hover:bg-orange-500 transition duration-200">
                        Editar
                    </a>
                    <form action="{{ route('espacios.destroy', $espacio) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-3 py-1 bg-orange-500 text-white rounded hover:bg-orange-600 transition duration-200">
                            Eliminar
                        </button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    
    <!-- Sección de Managers -->
    <div class="mb-10 p-6 bg-gradient-to-r from-orange-300 to-orange-500 rounded shadow-lg">
        <h2 class="text-2xl font-semibold text-orange-900 mb-4">Managers</h2>
        <div class="mb-4">
            <a href="{{ route('managers.create') }}" class="inline-block px-4 py-2 bg-orange-600 text-white rounded hover:bg-orange-700 transition duration-200">
                Crear nuevo Manager
            </a>
        </div>
        <ul class="space-y-2">
            @foreach ($managers as $manager)
            <li class="p-2 bg-orange-100 rounded flex items-center justify-between">
                <a href="{{ route('managers.show', $manager) }}" class="text-orange-800 font-medium">
                    {{ $manager->nombre }}
                </a>
                <div class="flex gap-2">
                    <a href="{{ route('managers.edit', $manager) }}" class="px-3 py-1 bg-orange-400 text-white rounded hover:bg-orange-500 transition duration-200">
                        Editar
                    </a>
                    <form action="{{ route('managers.destroy', $manager) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-3 py-1 bg-orange-500 text-white rounded hover:bg-orange-600 transition duration-200">
                            Eliminar
                        </button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
    
    <!-- Menú de navegación inferior -->
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 mt-8">
        <a href="{{ route('grupos.index') }}" class="bg-orange-500 text-white font-semibold py-3 px-4 rounded shadow text-center hover:bg-orange-600 transition">
            Grupos
        </a>
        <a href="{{ route('managers.index') }}" class="bg-orange-500 text-white font-semibold py-3 px-4 rounded shadow text-center hover:bg-orange-600 transition">
            Managers
        </a>
        <a href="{{ route('espacios.index') }}" class="bg-orange-500 text-white font-semibold py-3 px-4 rounded shadow text-center hover:bg-orange-600 transition">
            Espacios
        </a>
        <a href="{{ route('conciertos.index') }}" class="bg-orange-500 text-white font-semibold py-3 px-4 rounded shadow text-center hover:bg-orange-600 transition">
            Conciertos
        </a>
    </div>
</div>
@endsection
