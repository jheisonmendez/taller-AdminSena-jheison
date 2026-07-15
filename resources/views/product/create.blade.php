@extends('layouts.app')

@section('content')

<h1>Formulario Producto</h1>

<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>

<label>
    precio:
    <br>
    <input type="number" name="price">
</label>
<br>

<label>
    descripcion:
    <br>
    <input type="text" name="description">
</label>
<br>

<label>
    peso:
    <br>
    <input type="number" name="weigth">
</label>
<br>

<label>
    cantidad:
    <br>
    <input type="number" name="cant">
</label>
<br>

<br>
<br>

<button type="submit">Crear:</button>
</form>

@endsection
