@extends('layouts.app')
@section('content')
<h1>Curso: {{ $course->course_number }}</h1>
<div class="card"><div class="card-body">
    <p><strong>ID:</strong> {{ $course->id }}</p>
    <p><strong>Numero:</strong> {{ $course->course_number }}</p>
    <p><strong>Dia:</strong> {{ $course->day }}</p>
    <p><strong>Area:</strong> {{ $course->area->name ?? 'N/A' }}</p>
    <p><strong>Centro:</strong> {{ $course->trainingCenter->name ?? 'N/A' }}</p>
    <p><strong>Profesores:</strong>
        @foreach($course->teachers as $teacher)
            <span class="badge bg-info">{{ $teacher->name }}</span>
        @endforeach
    </p>
    <p><strong>Aprendices:</strong> {{ $course->apprentices->count() }}</p>
</div></div>
<a href="{{ route('courses.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection
