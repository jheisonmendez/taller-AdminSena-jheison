@extends('layouts.app')
@section('content')
<h1>Crear Centro de Formacion</h1>
<form action="{{ route('training-centers.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Ubicacion</label>
        <input type="text" name="location" class="form-control" value="{{ old('location') }}" required>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="{{ route('training-centers.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
