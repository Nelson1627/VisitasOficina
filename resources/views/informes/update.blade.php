<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>informes</title>
</head>
<body>
@extends('layout.app')

{{-- Definimos el titulo --}}
@section('title', 'informes')

@section('content')

<h1 class="text-center">Modificar</h1>
<h5 class="text-center">Formulario para actualizar informes</h5>
<hr>
<center>
<div class="container">
    <form action="/informes/update/{{$informes->id_informe}}" method="POST">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-6">
          ID Informe
          <input type="text" class="form-control" name="id_informe" value="{{$informes->id_informe}}" readonly>
          @error('id_informe')
          <span class="invalid-feedback d-block" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
        </div>
        <div class="col-6">
          ID Visita
          <input type="text" class="form-control" name="id_visita" value="{{$informes->id_visita}}" required>
          @error('id_visita')
          <span class="invalid-feedback d-block" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-6">
          ID Usuario
          <input type="text" class="form-control" name="id_usuario" value="{{$informes->id_usuario}}" required>
          @error('id_usuario')
          <span class="invalid-feedback d-block" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
        </div>
        <div class="col-6">
          Fecha Informe
          <input type="date" class="form-control" name="fecha_informe" value="{{$informes->fecha_informe}}" required>
          @error('fecha_informe')
          <span class="invalid-feedback d-block" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-12">
          Contenido
          <textarea class="form-control" name="contenido" rows="4" required>{{$informes->contenido}}</textarea>
          @error('contenido')
          <span class="invalid-feedback d-block" role="alert">
            <strong>{{$message}}</strong>
          </span>
          @enderror
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
