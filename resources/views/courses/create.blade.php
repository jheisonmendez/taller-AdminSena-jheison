@extends('layouts.app')
@section('content')
<h1>Crear Curso</h1>
<form action="{{ route('courses.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label">Numero de Curso</label>
        <input type="text" name="course_number" class="form-control" value="{{ old('course_number') }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Dia</label>
        <input type="text" name="day" class="form-control" value="{{ old('day') }}" required>
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
    <div class="mb-3">
        <label class="form-label">Profesores</label>
        @foreach($teachers as $teacher)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="teachers[]" value="{{ $teacher->id }}" {{ in_array($teacher->id, old('teachers', [])) ? 'checked' : '' }}>
                <label class="form-check-label">{{ $teacher->name }}</label>
            </div>
        @endforeach
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
