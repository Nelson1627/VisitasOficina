<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informes</title>
</head>
<body>
    {{-- Heredamos la estructura del archivo app.blade.php --}}
    @extends('layout.app')

    {{-- Definimos el título --}}
    @section('title', 'Informes')

    {{-- Definimos el contenido --}}
    @section('content')

    <h1 class="text-center">Modificar</h1>
    <h5 class="text-center">Formulario para actualizar informes</h5>
    <hr>
    
    <div class="container">       
         <form action="/informes/update/{{$informes->id_informe}}" method="PUT">

            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-6">
                    <label>ID Informe</label>
                    <input type="text" class="form-control" name="id_informe" value="{{$informes->id_informe}}" readonly>
                    @error('id_informe')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-6">
                    <label>ID Visita</label>
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
                    <label>ID Usuario</label>
                    <input type="text" class="form-control" name="id_usuario" value="{{$informes->id_usuario}}" required>
                    @error('id_usuario')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-6">
                    <label>Fecha Informe</label>
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
                    <label>Contenido</label>
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

    <hr>
    @endsection
</body>
</html>
