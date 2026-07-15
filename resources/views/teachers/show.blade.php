@extends('layouts.app')
@section('content')
<h1>Profesor: {{ $teacher->name }}</h1>
<div class="card"><div class="card-body">
    <p><strong>ID:</strong> {{ $teacher->id }}</p>
    <p><strong>Nombre:</strong> {{ $teacher->name }}</p>
    <p><strong>Email:</strong> {{ $teacher->email }}</p>
    <p><strong>Area:</strong> {{ $teacher->area->name ?? 'N/A' }}</p>
    <p><strong>Centro:</strong> {{ $teacher->trainingCenter->name ?? 'N/A' }}</p>
    <p><strong>Cursos:</strong>
        @foreach($teacher->courses as $course)
            <span class="badge bg-primary">{{ $course->course_number }}</span>
        @endforeach
    </p>
</div></div>
<a href="{{ route('teachers.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection
