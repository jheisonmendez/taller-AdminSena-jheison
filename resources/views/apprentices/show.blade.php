@extends('layouts.app')
@section('content')
<h1>Aprendiz: {{ $apprentice->name }}</h1>
<div class="card"><div class="card-body">
    <p><strong>ID:</strong> {{ $apprentice->id }}</p>
    <p><strong>Nombre:</strong> {{ $apprentice->name }}</p>
    <p><strong>Email:</strong> {{ $apprentice->email }}</p>
    <p><strong>Telefono:</strong> {{ $apprentice->cell_number }}</p>
    <p><strong>Curso:</strong> {{ $apprentice->course->course_number ?? 'N/A' }}</p>
    <p><strong>Computador:</strong> {{ $apprentice->computer->number ?? 'N/A' }} {{ $apprentice->computer->brand ?? '' }}</p>
</div></div>
<a href="{{ route('apprentices.index') }}" class="btn btn-secondary mt-3">Volver</a>
@endsection
