<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXhXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Crear Visitantes</title>
</head>
<body>
    {{-- Heredamos la estructura del archivo app.blade.php --}}
    @extends('layout.app')

    {{-- Definimos el título --}}
    @section('title', 'Crear Visitantes')

    {{-- Definimos el contenido --}}
    @section('content')

    <h1 class="text-center">Crear</h1>
    <h5 class="text-center">Formulario para crear visitantes</h5>
    <hr>

    <center>
        <div class="container">
            <form action="/visitantes/store" method="POST">
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

                <div class="row mt-2">
                    <div class="col-6">
                        <label for="documento_id">Documento ID</label>
                        <input type="text" class="form-control" name="documento_id" id="documento_id" required>
                        @error('documento_id')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-6">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" class="form-control" name="telefono" id="telefono" required>
                        @error('telefono')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-12">
                        <label for="correo">Correo</label>
                        <input type="email" class="form-control" name="correo" id="correo" required>
                        @error('correo')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-12 mt-3">
                    <button class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </center>

    <hr>
    @endsection
</body>
</html>
