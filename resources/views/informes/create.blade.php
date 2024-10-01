
    {{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el titulo --}}
@section('title', 'informes')

@section('content')

<h1 class="text-center">Crear</h1>
<h5 class="text-center">Formulario para crear informes</h5>

<center>
<div class="container">
    <form action="/informes/store" method="POST">
      @csrf
      <div class="row">
        
        <div class="col-6">
          Fecha Informe
          <input type="date" class="form-control" name="fecha_informe" required>
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
          <textarea class="form-control" name="contenido" rows="4" required></textarea>
          @error('contenido')
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
</div>
</center>

<hr>
@endsection

