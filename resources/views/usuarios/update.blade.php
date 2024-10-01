<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Modificar Usuario</title>
</head>
<body>
@extends('layout.app')

{{-- Definimos el título --}}
@section('title', 'Modificar Usuario')

@section('content')

<h1 class="text-center">Modificar</h1>
<h5 class="text-center">Formulario para actualizar usuarios</h5>
<hr>
<center>
    <div class="container">
        <form action="/usuarios/update/{{$usuarios->id_usuario}}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-6">
                    <label for="id_usuario">ID Usuario</label>
                    <input type="text" class="form-control" name="id_usuario" id="id_usuario" value="{{$usuarios->id_usuario}}" readonly>
                </div>

                <div class="col-6">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre" value="{{$usuarios->nombre}}" required>
                    @error('nombre')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <label for="rol">Rol</label>
                    <input type="text" class="form-control" name="rol" id="rol" value="{{$usuarios->rol}}" required>
                    @error('rol')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-6">
                    <label for="correo">Correo</label>
                    <input type="email" class="form-control" name="correo" id="correo" value="{{$usuarios->correo}}" required>
                    @error('correo')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

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
