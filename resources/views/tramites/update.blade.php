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

<h1 class="text-center">Modificar</h1>
<h5 class="text-center">Formulario para actualizar trámites</h5>
<hr>
<center>
<div class="container">
    <form action="/tramites/update/{{$tramites->id_tramite}}" method="POST">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-6">
          ID Trámite
          <input type="text" class="form-control" name="id_tramite" value="{{$tramites->id_tramite}}" readonly>
        </div>
        <div class="col-6">
          ID Visita
          <input type="text" class="form-control" name="id_visita" value="{{$tramites->id_visita}}" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-6">
          ID Usuario
          <input type="text" class="form-control" name="id_usuario" value="{{$tramites->id_usuario}}" required>
        </div>
        <div class="col-6">
          Descripción
          <input type="text" class="form-control" name="descripcion" value="{{$tramites->descripcion}}" required>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-6">
          Estado
          <input type="text" class="form-control" name="estado" value="{{$tramites->estado}}" required>
        </div>
        <div class="col-6">
          Fecha Creación
          <input type="date" class="form-control" name="fecha_creacion" value="{{$tramites->fecha_creacion}}" required>
        </div>
      </div>
      <br>
      <div class="col-12 mt-2">
        <button class="btn btn-success">Actualizar</button>
      </div>
    </form>
</div>
</center>

<hr>
@endsection
</body>
</html>
  