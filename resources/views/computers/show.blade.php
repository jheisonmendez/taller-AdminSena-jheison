@extends('layouts.app')
@section('content')
<h1>Computador: {{ $computer->number }}</h1>
<div class="card"><div class="card-body">
    <p><strong>ID:</strong> {{ $computer->id }}</p>
    <p><strong>Numero:</strong> {{ $computer->number }}</p>
    <p><strong>Marca:</strong> {{ $computer->brand }}</p>
    <p><strong>Asignado a:</strong> {{ $computer->apprentice->name ?? 'Sin asignar' }}</p>
</div></div>
<a href="{{ route('computers.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection
