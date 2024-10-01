<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXhXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Usuarios</title>
</head>
<body>
    {{-- Heredamos la estructura del archivo app.blade.php --}}
    @extends('layout.app')

    {{-- Definimos el título --}}
    @section('title', 'Usuarios')

    {{-- Definimos el contenido --}}
    @section('content')
    <h1>Usuarios</h1>
    <h5>Listado de usuarios</h5>
    <hr>
    <a href="/usuarios/create" class="btn btn-danger">Agregar nuevo usuario</a>
    <table class="table table-hover table-bordered mt-2">
        <tr>
            <td>ID Usuario</td>
            <td>Nombre</td>
            <td>Rol</td>
            <td>Correo</td>
            <td>Acciones</td>
        </tr>
        @foreach ($usuarios as $item)
        <tr>
            <td>{{ $item->id_usuario }}</td>
            <td>{{ $item->nombre }}</td>
            <td>{{ $item->rol }}</td>
            <td>{{ $item->correo }}</td>
            <td>
                <a href="/usuarios/edit/{{ $item->id_usuario }}" class="btn btn-success btn-sm">Modificar</a>
                <button class="btn btn-danger btn-sm" url="/usuarios/destroy/{{ $item->id_usuario }}" token="{{ csrf_token() }}" onclick="destroy(this)">Eliminar</button>
            </td>
        </tr>
        @endforeach
    </table>
    @endsection

    @section('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/usuarios.js') }}"></script>
    @endsection
</body>
</html>
