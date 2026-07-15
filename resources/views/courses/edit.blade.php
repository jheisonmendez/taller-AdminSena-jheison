@extends('layouts.app')
@section('content')
<h1>Editar Curso</h1>
<form action="{{ route('courses.update', $course) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label class="form-label">Numero de Curso</label>
        <input type="text" name="course_number" class="form-control" value="{{ old('course_number', $course->course_number) }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Dia</label>
        <input type="text" name="day" class="form-control" value="{{ old('day', $course->day) }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Area</label>
        <select name="area_id" class="form-select" required>
            @foreach($areas as $area)
                <option value="{{ $area->id }}" {{ old('area_id', $course->area_id) == $area->id ? 'selected' : '' }}>{{ $area->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Centro de Formacion</label>
        <select name="training_center_id" class="form-select" required>
            @foreach($trainingCenters as $center)
                <option value="{{ $center->id }}" {{ old('training_center_id', $course->training_center_id) == $center->id ? 'selected' : '' }}>{{ $center->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Profesores</label>
        @php $courseTeacherIds = $course->teachers->pluck('id')->toArray(); @endphp
        @foreach($teachers as $teacher)
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="teachers[]" value="{{ $teacher->id }}" {{ in_array($teacher->id, old('teachers', $courseTeacherIds)) ? 'checked' : '' }}>
                <label class="form-check-label">{{ $teacher->name }}</label>
            </div>
        @endforeach
    </div>
    <button type="submit" class="btn btn-success">Actualizar</button>
    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
