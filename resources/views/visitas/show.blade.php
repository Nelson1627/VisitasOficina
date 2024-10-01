
    {{-- Heredamos la estructura del archivo app.blade.php --}}
    @extends('layout.app')

    {{-- Definimos el título --}}
    @section('title', 'Visitas')

 {{-- Definimos el contenido --}}
@section('content') 
    <div class="container-fluid">
        <h1>Visitas</h1>
        <h5>Listado de visitas</h5>
        <hr>

        {{-- Botón para ir al formulario a agregar visitas --}}
        <a href="/visitas/create" class="btn btn-danger">Agregar nueva visita</a>

        <table class="table table-hover table-bordered mt-2">
            <thead>
                <tr>
                    <th>ID Visita</th>
                    <th>ID Visitante</th>
                    <th>Fecha y Hora de Entrada</th>
                    <th>Fecha y Hora de Salida</th>
                    <th>Propósito</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($visitas as $item)
                <tr>
                    <td>{{ $item->id_visita }}</td>
                    <td>{{ $item->id_visitante }}</td>
                    <td>{{ $item->fecha_hora_entrada }}</td>
                    <td>{{ $item->fecha_hora_salida }}</td>
                    <td>{{ $item->proposito }}</td>
                    <td>
                        
                        <a href="/visitas/edit/{{ $item->id_visita }}" class="btn btn-success btn-sm">Modificar</a>
                        <button class="btn btn-danger btn-sm" url="/visitas/destroy/{{ $item->id_visita }}" token="{{ csrf_token() }}" onclick="destroy(this)">Eliminar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection

    
 
