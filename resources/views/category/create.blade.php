@extends('layouts.app')

@section('content')

<h1>Formulario Categoria</h1>

<form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>

<br>
<br>

<button type="submit">Crear:</button>
</form>

@endsection
