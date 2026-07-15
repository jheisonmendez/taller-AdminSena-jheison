@extends('layouts.app')
@section('content')
<h1>Crear Profesor</h1>
<form action="{{ route('teachers.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Area</label>
        <select name="area_id" class="form-select" required>
            <option value="">Seleccione</option>
            @foreach($areas as $area)
                <option value="{{ $area->id }}" {{ old('area_id') == $area->id ? 'selected' : '' }}>{{ $area->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Centro de Formacion</label>
        <select name="training_center_id" class="form-select" required>
            <option value="">Seleccione</option>
            @foreach($trainingCenters as $center)
                <option value="{{ $center->id }}" {{ old('training_center_id') == $center->id ? 'selected' : '' }}>{{ $center->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
