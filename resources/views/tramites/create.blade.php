<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Trámites</title>
</head>
<body>
@extends('layout.app')

@section('title', 'Trámites')

@section('content')

<h1 class="text-center">Crear</h1>
<h5 class="text-center">Formulario para crear trámites</h5>
<center>
<div class="container">
    <form action="/tramites/store" method="POST">
      @csrf
      <div class="row">      
        <div class="col-6">
          Descripción
          <input type="text" class="form-control" name="descripcion" required>
          @error('descripcion')
          <span class="invalid-feedback d-block" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-6">
          Estado
          <input type="text" class="form-control" name="estado" required>
          @error('estado')
          <span class="invalid-feedback d-block" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
        </div>
        <div class="col-6">
          Fecha Creación
          <input type="date" class="form-control" name="fecha_creacion" required>
          @error('fecha_creacion')
          <span class="invalid-feedback d-block" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
        </div>
      </div>
      <br>
      <div class="col-12 mt-2">
        <button class="btn btn-success">Guardar</button>
      </div>
    </form>
</div>
</center>

<hr>
@endsection
</body>
</html>



