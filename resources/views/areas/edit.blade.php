@extends('layouts.app')
@section('content')
<h1>Editar Area</h1>
<form action="{{ route('areas.update', $area) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $area->name) }}" required>
    </div>
    <button type="submit" class="btn btn-success">Actualizar</button>
    <a href="{{ route('areas.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
