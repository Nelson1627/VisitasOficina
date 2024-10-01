
    {{-- Heredamos la estructura del archivo app.blade.php --}}
    @extends('layout.app')

    {{-- Definimos el título --}}
    @section('title', 'Visitas')

    @section('content')

    <h1 class="text-center">Crear</h1>
    <h5 class="text-center">Formulario para crear visitas</h5>

    <center>
        <div class="container">
            <form action="/visitas/store" method="POST">
                @csrf
                <div class="row">
                    <div class="col-6">
                        <label for="entrada">Fecha y Hora de Entrada</label>
                        <input type="datetime-local" class="form-control" name="fecha_hora_entrada" id="entrada" required>
                        @error('fecha_hora_entrada')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-6">
                        <label for="salida">Fecha y Hora de Salida</label>
                        <input type="datetime-local" class="form-control" name="fecha_hora_salida" id="salida" required>
                        @error('fecha_hora_salida')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-12 mt-3">
                        <label for="proposito">Propósito</label>
                        <input type="text" class="form-control" name="proposito" id="proposito" required>
                        @error('proposito')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <br>
                <hr>
                <div class="col-12 mt-2">
                    <button class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </center>

    <hr>
    @endsection
