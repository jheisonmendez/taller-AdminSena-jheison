@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Computadores</h1>
    <a href="{{ route('computers.create') }}" class="btn btn-primary">Nuevo</a>
</div>
<table class="table table-striped">
    <thead class="table-dark">
        <tr><th>#</th><th>Numero</th><th>Marca</th><th>Acciones</th></tr>
    </thead>
    <tbody>
        @forelse($computers as $computer)
        <tr>
            <td>{{ $computer->id }}</td>
            <td>{{ $computer->number }}</td>
            <td>{{ $computer->brand }}</td>
            <td>
                <a href="{{ route('computers.show', $computer) }}" class="btn btn-info btn-sm">Ver</a>
                <a href="{{ route('computers.edit', $computer) }}" class="btn btn-warning btn-sm">Editar</a>
                <form action="{{ route('computers.destroy', $computer) }}" method="POST" class="d-inline" onsubmit="return confirm('Eliminar?')">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </td>
        </tr>
        @empty
        <tr><td colspan="4">No hay computadores</td></tr>
        @endforelse
    </tbody>
</table>
@endsection
