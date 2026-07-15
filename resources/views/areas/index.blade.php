@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Areas</h1>
    <a href="{{ route('areas.create') }}" class="btn btn-primary">Nueva</a>
</div>
<table class="table table-striped">
    <thead class="table-dark">
        <tr><th>#</th><th>Nombre</th><th>Acciones</th></tr>
    </thead>
    <tbody>
        @forelse($areas as $area)
        <tr>
            <td>{{ $area->id }}</td>
            <td>{{ $area->name }}</td>
            <td>
                <a href="{{ route('areas.show', $area) }}" class="btn btn-info btn-sm">Ver</a>
                <a href="{{ route('areas.edit', $area) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('areas.destroy', $area) }}" method="POST" class="d-inline" onsubmit="return confirm('Eliminar?')">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="3">No hay areas</td></tr>
        @endforelse
    </tbody>
</table>
@endsection
