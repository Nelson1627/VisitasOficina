<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Trámites</title>
</head>
<body>
@extends('layout.app')

@section('title', 'Trámites')

@section('content')
<h1>Trámites</h1>
<h5>Listado de trámites</h5>
<hr>
<a href="/tramites/create" class="btn btn-danger">Agregar nuevo trámite</a>
<table class="table table-hover table-bordered mt-2">
    <tr>
        <td>ID Trámite</td>
        <td>Nombre</td>
        <td>ID Visita</td>
        <td>ID Usuario</td>
        <td>Descripción</td>
        <td>Estado</td>
        <td>Fecha Creación</td>
        <td>Acciones</td>
    </tr>
    @foreach ($tramites as $item)
    <tr>
        <td>{{$item->id_tramite}}</td>
        <td>{{$item->nombre}}</td>
        <td>{{$item->id_visita}}</td>
        <td>{{$item->id_usuario}}</td>
        <td>{{$item->descripcion}}</td>
        <td>{{$item->estado}}</td>
        <td>{{$item->fecha_creacion}}</td>
        <td>
            <a href="/tramites/edit/{{$item->id_tramite}}" class="btn btn-success btn-sm">Modificar</a>
            <button class="btn btn-danger btn-sm" url="/tramites/destroy/{{$item->id_tramite}}" token="{{ csrf_token() }}" onclick="destroy(this)">Eliminar</button>
        </td>
    </tr>
    @endforeach
</table>
@endsection

@section('scripts')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/tramites.js') }}"></script>
@endsection

</body>
</html>
