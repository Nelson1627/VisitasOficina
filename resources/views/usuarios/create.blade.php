<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Usuarios</title>
</head>
<body>
    {{-- Heredamos la estructura del archivo app.blade.php --}}
    @extends('layout.app')

    {{-- Definimos el título --}}
    @section('title', 'Usuarios')

    {{-- Definimos el contenido --}}
    @section('content')

    <h1 class="text-center">Crear</h1>
    <h5 class="text-center">Formulario para crear usuarios</h5>
    <hr>

    <center>
        <div class="container">
            <form action="/usuarios/store" method="POST">
                @csrf
                <div class="row">               

                    <div class="col-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" required>
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
                        <input type="text" class="form-control" name="rol" id="rol" required>
                        @error('rol')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-6">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control" name="correo" id="correo" required>
                        @error('correo')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

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
