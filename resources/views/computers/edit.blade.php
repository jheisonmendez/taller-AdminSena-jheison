@extends('layouts.app')
@section('content')
<h1>Editar Computador</h1>
<form action="{{ route('computers.update', $computer) }}" method="POST">
    @csrf @method('PUT')
    <div class="mb-3">
        <label class="form-label">Numero</label>
        <input type="text" name="number" class="form-control" value="{{ old('number', $computer->number) }}" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Marca</label>
        <input type="text" name="brand" class="form-control" value="{{ old('brand', $computer->brand) }}" required>
    </div>
    <button type="submit" class="btn btn-success">Actualizar</button>
    <a href="{{ route('computers.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
