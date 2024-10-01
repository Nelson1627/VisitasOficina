
    @extends('layout.app')

    {{-- Definimos el título --}}
    @section('title', 'Modificar Visitante')

    {{-- Definimos el contenido --}}
    @section('content')

    <h1 class="text-center">Modificar Visitante</h1>
    <h5 class="text-center">Formulario para actualizar visitantes</h5>
    <hr>
    
    <center>
        <div class="container">
            <form action="/visitantes/update/{{$visitante->id_visitante}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-6">
                        <label for="id_visitante">ID Visitante</label>
                        <input type="text" class="form-control" name="id_visitante" id="id_visitante" value="{{$visitante->id_visitante}}" readonly>
                    </div>

                    <div class="col-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" value="{{$visitante->nombre}}" required>
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
                        <input type="text" class="form-control" name="documento_id" id="documento_id" value="{{$visitante->documento_id}}" required>
                        @error('documento_id')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-6">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" class="form-control" name="telefono" id="telefono" value="{{$visitante->telefono}}" required>
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
                        <input type="email" class="form-control" name="correo" id="correo" value="{{$visitante->correo}}" required>
                        @error('correo')
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-12 mt-3">
                    <button class="btn btn-success">Actualizar</button>
                </div>
            </form>
        </div>
    </center>

    <hr>
    @endsection
