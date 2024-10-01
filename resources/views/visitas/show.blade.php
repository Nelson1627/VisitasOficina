<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Visitas</title>
</head>
<body>
    {{-- Heredamos la estructura del archivo app.blade.php --}}
    @extends('layout.app')

    {{-- Definimos el título --}}
    @section('title', 'Visitas')

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
                @foreach ($visita as $item)
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

    <script>
        function destroy(button) {
            const url = button.getAttribute('url');
            const token = button.getAttribute('token');

            if (confirm('¿Estás seguro de que deseas eliminar esta visita?')) {
                fetch(url, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': token,
                        'Content-Type': 'application/json'
                    },
                })
                .then(response => {
                    if (response.ok) {
                        window.location.reload(); // Recargar la página para ver los cambios
                    } else {
                        alert('Error al eliminar la visita.');
                    }
                });
            }
        }
    </script>

</body>
</html>
