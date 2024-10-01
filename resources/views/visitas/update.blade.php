<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>visitas</title>
</head>
<body>
@extends('layout.app')

{{-- Definimos el titulo --}}
@section('title', 'visitas')

@section('content')

<h1 class="text-center">Modificar</h1>
<h5 class="text-center">Formulario para actualizar visitas</h5></center>
<hr>
<center> <div class="container">
    <form action="/visitas/update/{{$visitas->codigo}}" method="POST">
      @csrf
      @method('PUT')
  <div class="row">
    <div class="col-6">
      Nombre
      <input type="text" class="form-control" name="nombre" value="{{$visitas->nombre}}">
      @error('nombre')
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span>
      @enderror
  </div>
    </div>
  
  <div class="col-12 mt-2">
  <button class="btn btn-success">Actualizar</button>
  </div>
</form>
</div></center>

<hr>
@endsection
</body>
</html>