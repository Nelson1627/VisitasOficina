
    {{-- Heredamos la estructura del archivo app.blade.php --}}
@extends('layout.app')

{{-- Definimos el titulo --}}
@section('title', 'informes')

@section('content')
<h1>Informes</h1>
<h5>Listado de informes</h5>
<hr>
{{-- Botón para ir al formulario a agregar informes --}}
<a href="/informes/create" class="btn btn-danger">Agregar nuevo informe</a>
<table class="table table-hover table-bordered mt-2">
    <tr>
        <td>ID Informe</td>
        <td>ID Visita</td>
        <td>ID Usuario</td>
        <td>Fecha Informe</td>
        <td>Contenido</td>
        <td>Acciones</td>
    </tr>
    @foreach ($informes as $item)
    <tr>
        <td>{{$item->id_informe}}</td>
        <td>{{$item->id_visita}}</td>
        <td>{{$item->id_usuario}}</td>
        <td>{{$item->fecha_informe}}</td>
        <td>{{$item->contenido}}</td>
        <td>
            <a href="/informes/edit/{{$item->id_informe}}" class="btn btn-success btn-sm">Modificar</a>
            <button class="btn btn-danger btn-sm" url="/informes/destroy/{{$item->id_informe}}" token="{{ csrf_token() }}" onclick="destroy(this)">Eliminar</button>
        </td>
    </tr>
    @endforeach
</table>
@endsection

@section('scripts')
{{-- SweetAlert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- JS --}}
<script src="{{ asset('js/informes.js') }}"></script>
@endsection

