<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles de los  Visitantes</title>
</head>
<body>
    {{-- Heredamos la estructura del archivo app.blade.php --}}
    @extends('layout.app')

    {{-- Definimos el título --}}
    @section('title', 'Detalles del Visitante')

    {{-- Definimos el contenido --}}
    @section('content')

    <h1 class="text-center">Detalles de los Visitantes</h1>
    <hr>
            {{-- Botón para ir al formulario a agregar visitas --}}
            <a href="/visitas/create" class="btn btn-danger">Agregar nueva visita</a>

            <table class="table table-hover table-bordered mt-2">
                <thead>
                    <tr>
                        <th>ID Visitante</th>
                        <th>Nombre</th>
                        <th>Documento ID</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($visitantes as $item)
                    <tr>
                        <td>{{ $item->id_visitante }}</td>
                        <td>{{ $item->id_nombre }}</td>
                        <td>{{ $item->documento_id }}</td>
                        <td>{{ $item->correo }}</td>
                      
                        <td>
                            
                            <a href="/visitantes/edit/{{ $item->id_visitante }}" class="btn btn-success btn-sm">Modificar</a>
                            <button class="btn btn-danger btn-sm" url="/visitas/destroy/{{ $item->id_visitante }}" token="{{ csrf_token() }}" onclick="destroy(this)">Eliminar</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    @endsection
</body>
</html>
