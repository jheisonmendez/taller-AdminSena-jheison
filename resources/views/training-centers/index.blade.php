@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Centros de Formacion</h1>
    <a href="{{ route('training-centers.create') }}" class="btn btn-primary">Nuevo</a>
</div>
<table class="table table-striped">
    <thead class="table-dark">
        <tr><th>#</th><th>Nombre</th><th>Ubicacion</th><th>Acciones</th></tr>
    </thead>
    <tbody>
        @forelse($trainingCenters as $center)
        <tr>
            <td>{{ $center->id }}</td>
            <td>{{ $center->name }}</td>
            <td>{{ $center->location }}</td>
            <td>
                <a href="{{ route('training-centers.show', $center) }}" class="btn btn-info btn-sm">Ver</a>
                <a href="{{ route('training-centers.edit', $center) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('training-centers.destroy', $center) }}" method="POST" class="d-inline" onsubmit="return confirm('Eliminar?')">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="4">No hay centros</td></tr>
        @endforelse
    </tbody>
</table>
@endsection
