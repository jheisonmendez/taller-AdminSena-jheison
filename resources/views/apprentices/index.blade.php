@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Aprendices</h1>
    <a href="{{ route('apprentices.create') }}" class="btn btn-primary">Nuevo</a>
</div>
<table class="table table-striped">
    <thead class="table-dark">
        <tr><th>#</th><th>Nombre</th><th>Email</th><th>Telefono</th><th>Curso</th><th>Computador</th><th>Acciones</th></tr>
    </thead>
    <tbody>
        @forelse($apprentices as $apprentice)
        <tr>
            <td>{{ $apprentice->id }}</td>
            <td>{{ $apprentice->name }}</td>
            <td>{{ $apprentice->email }}</td>
            <td>{{ $apprentice->cell_number }}</td>
            <td>{{ $apprentice->course->course_number ?? 'N/A' }}</td>
            <td>{{ $apprentice->computer->number ?? 'N/A' }}</td>
            <td>
                <a href="{{ route('apprentices.show', $apprentice) }}" class="btn btn-info btn-sm">Ver</a>
                <a href="{{ route('apprentices.edit', $apprentice) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('apprentices.destroy', $apprentice) }}" method="POST" class="d-inline" onsubmit="return confirm('Eliminar?')">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="7">No hay aprendices</td></tr>
        @endforelse
    </tbody>
</table>
@endsection
