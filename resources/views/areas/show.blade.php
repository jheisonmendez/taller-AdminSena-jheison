@extends('layouts.app')
@section('content')
<h1>Area: {{ $area->name }}</h1>
<div class="card"><div class="card-body">
    <p><strong>ID:</strong> {{ $area->id }}</p>
    <p><strong>Nombre:</strong> {{ $area->name }}</p>
    <p><strong>Profesores:</strong> {{ $area->teachers->count() }}</p>
    <p><strong>Cursos:</strong> {{ $area->courses->count() }}</p>
</div></div>
<a href="{{ route('areas.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection
