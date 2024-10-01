<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXhXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Detalles del Visitante</title>
</head>
<body>
    {{-- Heredamos la estructura del archivo app.blade.php --}}
    @extends('layout.app')

    {{-- Definimos el título --}}
    @section('title', 'Detalles del Visitante')

    {{-- Definimos el contenido --}}
    @section('content')

    <h1 class="text-center">Detalles del Visitante</h1>
    <hr>
    
    <div class="container">
        <div class="row">
            <div class="col-6">
                <strong>ID Visitante:</strong> {{$visitante->id_visitante}}
            </div>
            <div class="col-6">
                <strong>Nombre:</strong> {{$visitante->nombre}}
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <strong>Documento ID:</strong> {{$visitante->documento_id}}
            </div>
            <div class="col-6">
                <strong>Teléfono:</strong> {{$visitante->telefono}}
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <strong>Correo:</strong> {{$visitante->correo}}
            </div>
        </div>
    </div>

    <div class="col-12 mt-3">
        <a href="/visitantes/edit/{{$visitante->id_visitante}}" class="btn btn-success">Modificar</a>
        <a href="/visitantes" class="btn btn-danger">Volver</a>
    </div>

    <hr>
    @endsection
</body>
</html>
