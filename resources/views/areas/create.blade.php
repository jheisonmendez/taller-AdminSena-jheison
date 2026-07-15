@extends('layouts.app')
@section('content')
<h1>Crear Area</h1>
<form action="{{ route('areas.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="{{ route('areas.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
