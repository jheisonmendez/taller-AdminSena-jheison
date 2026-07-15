@extends('layouts.app')
@section('content')
<h1>Editar Profesor</h1>
<form action="{{ route('teachers.update', $teacher) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $teacher->name) }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $teacher->email) }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Area</label>
        <select name="area_id" class="form-select" required>
            @foreach($areas as $area)
                <option value="{{ $area->id }}" {{ old('area_id', $teacher->area_id) == $area->id ? 'selected' : '' }}>{{ $area->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Centro de Formacion</label>
        <select name="training_center_id" class="form-select" required>
            @foreach($trainingCenters as $center)
                <option value="{{ $center->id }}" {{ old('training_center_id', $teacher->training_center_id) == $center->id ? 'selected' : '' }}>{{ $center->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Actualizar</button>
    <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
