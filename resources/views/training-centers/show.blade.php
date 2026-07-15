@extends('layouts.app')
@section('content')
<h1>Centro: {{ $trainingCenter->name }}</h1>
<div class="card"><div class="card-body">
    <p><strong>ID:</strong> {{ $trainingCenter->id }}</p>
    <p><strong>Nombre:</strong> {{ $trainingCenter->name }}</p>
    <p><strong>Ubicacion:</strong> {{ $trainingCenter->location }}</p>
    <p><strong>Profesores:</strong> {{ $trainingCenter->teachers->count() }}</p>
    <p><strong>Cursos:</strong> {{ $trainingCenter->courses->count() }}</p>
</div></div>
<a href="{{ route('training-centers.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection
