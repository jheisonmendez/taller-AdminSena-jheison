@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Profesores</h1>
    <a href="{{ route('teachers.create') }}" class="btn btn-primary">Nuevo</a>
</div>
<table class="table table-striped">
    <thead class="table-dark">
        <tr><th>#</th><th>Nombre</th><th>Email</th><th>Area</th><th>Centro</th><th>Acciones</th></tr>
    </thead>
    <tbody>
        @forelse($teachers as $teacher)
        <tr>
            <td>{{ $teacher->id }}</td>
            <td>{{ $teacher->name }}</td>
            <td>{{ $teacher->email }}</td>
            <td>{{ $teacher->area->name ?? 'N/A' }}</td>
            <td>{{ $teacher->trainingCenter->name ?? 'N/A' }}</td>
            <td>
                <a href="{{ route('teachers.show', $teacher) }}" class="btn btn-info btn-sm">Ver</a>
                <a href="{{ route('teachers.edit', $teacher) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('teachers.destroy', $teacher) }}" method="POST" class="d-inline" onsubmit="return confirm('Eliminar?')">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="6">No hay profesores</td></tr>
        @endforelse
    </tbody>
</table>
@endsection
