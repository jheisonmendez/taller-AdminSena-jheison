@extends('layouts.app')
@section('content')
<h1>Editar Aprendiz</h1>
<form action="{{ route('apprentices.update', $apprentice) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="name" class="form-control" value="{{ old('name', $apprentice->name) }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" value="{{ old('email', $apprentice->email) }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Telefono</label>
        <input type="text" name="cell_number" class="form-control" value="{{ old('cell_number', $apprentice->cell_number) }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Curso</label>
        <select name="course_id" class="form-select" required>
            @foreach($courses as $course)
                <option value="{{ $course->id }}" {{ old('course_id', $apprentice->course_id) == $course->id ? 'selected' : '' }}>{{ $course->course_number }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Computador</label>
        <select name="computer_id" class="form-select" required>
            @foreach($computers as $computer)
                <option value="{{ $computer->id }}" {{ old('computer_id', $apprentice->computer_id) == $computer->id ? 'selected' : '' }}>{{ $computer->number }} - {{ $computer->brand }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Actualizar</button>
    <a href="{{ route('apprentices.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
