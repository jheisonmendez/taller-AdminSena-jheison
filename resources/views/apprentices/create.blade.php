@extends('layouts.app')
@section('content')
<h1>Crear Aprendiz</h1>
<form action="{{ route('apprentices.store') }}" method="POST">
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
        <label class="form-label">Telefono</label>
        <input type="text" name="cell_number" class="form-control" value="{{ old('cell_number') }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Curso</label>
        <select name="course_id" class="form-select" required>
            <option value="">Seleccione</option>
            @foreach($courses as $course)
                <option value="{{ $course->id }}" {{ old('course_id') == $course->id ? 'selected' : '' }}>{{ $course->course_number }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Computador</label>
        <select name="computer_id" class="form-select" required>
            <option value="">Seleccione</option>
            @foreach($computers as $computer)
                <option value="{{ $computer->id }}" {{ old('computer_id') == $computer->id ? 'selected' : '' }}>{{ $computer->number }} - {{ $computer->brand }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="{{ route('apprentices.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
