@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">Editar Manager</h1>
    <form action="{{ route('managers.update', $manager) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre del Manager</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $manager->nombre) }}" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Actualizar Manager</button>
    </form>
</div>
@endsection
