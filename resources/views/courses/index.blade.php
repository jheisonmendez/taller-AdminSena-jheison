@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Cursos</h1>
    <a href="{{ route('courses.create') }}" class="btn btn-primary">Nuevo</a>
</div>
<table class="table table-striped">
    <thead class="table-dark">
        <tr><th>#</th><th>Numero</th><th>Dia</th><th>Area</th><th>Centro</th><th>Profesores</th><th>Acciones</th></tr>
    </thead>
    <tbody>
        @forelse($courses as $course)
        <tr>
            <td>{{ $course->id }}</td>
            <td>{{ $course->course_number }}</td>
            <td>{{ $course->day }}</td>
            <td>{{ $course->area->name ?? 'N/A' }}</td>
            <td>{{ $course->trainingCenter->name ?? 'N/A' }}</td>
            <td>
                @foreach($course->teachers as $teacher)
                    <span class="badge bg-info">{{ $teacher->name }}</span>
                @endforeach
            </td>
            <td>
                <a href="{{ route('courses.show', $course) }}" class="btn btn-info btn-sm">Ver</a>
                <a href="{{ route('courses.edit', $course) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('courses.destroy', $course) }}" method="POST" class="d-inline" onsubmit="return confirm('Eliminar?')">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="7">No hay cursos</td></tr>
        @endforelse
    </tbody>
</table>
@endsection
