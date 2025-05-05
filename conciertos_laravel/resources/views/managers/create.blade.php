@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-4">Crear Nuevo Manager</h1>
    <form action="{{ route('managers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre del Manager</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Crear Manager</button>
    </form>
</div>
@endsection
