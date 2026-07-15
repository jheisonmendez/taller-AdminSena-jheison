@extends('layouts.app')
@section('content')
<h1>Editar Centro de Formacion</h1>
<form action="{{ route('training-centers.update', $trainingCenter) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $trainingCenter->name) }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Ubicacion</label>
        <input type="text" name="location" class="form-control" value="{{ old('location', $trainingCenter->location) }}" required>
    </div>
    <button type="submit" class="btn btn-success">Actualizar</button>
    <a href="{{ route('training-centers.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
