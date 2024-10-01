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