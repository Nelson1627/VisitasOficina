<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>visitas</title>

</head>
<body>
    {{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el titulo --}}
@section('title', 'visitas')

@section('content')

<h1 class="text-center">Crear</h1>
<h5 class="text-center">Formulario para crear visitas</h5></c>

<center> <div class="container">
    <form action="/visitas/store" method="POST">
      @csrf
  <div class="row">
    <div class="col-6">
      Fecha y Hora de Entrada	
      <input type="date" class="form-control" name="fecha y hora">
      @error('nombre')
      <span class="invalid-feedback d-block" role="alert">
        <strong>{{$message}}</strong>
      </span>
      @enderror
  </div>
  <div class="col-6">
    Fecha y Hora de Salida	
    <input type="date" class="form-control" name="fecha y hora">
    @error('nombre')
    <span class="invalid-feedback d-block" role="alert">
      <strong>{{$message}}</strong>
    </span>
    @enderror
</div>
<div class="col-6">
  Propósito		
  <input type="date" class="form-control" name="fecha y hora">
  @error('nombre')
  <span class="invalid-feedback d-block" role="alert">
    <strong>{{$message}}</strong>
  </span>
  @enderror
</div>

    </div>
  <br>
  <hr>
  <div class="col-12 mt-2">
  <button class="btn btn-success">Guardar</button>
  </div>
</form>
</div></center>

<hr>
@endsection
</body>
</html>