@extends('layouts.app')

@section('content')

<h1>FRM restar</h1>

<form action="{{route('sumar.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Numero 1:
    <br>
    <input type="number" name="numero1">
</label>
<br>
<label>
    Numero 2:
    <br>
    <input type="number" name="numero2">
</label>
<br>
<br>

<button type="submit">Sumar:</button>
</form>

@endsection
