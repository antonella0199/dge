@extends('layouts.app')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="nombre" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="apellido" class="col-md-4 col-form-label text-md-end">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}" required autocomplete="apellido" autofocus>

                                @error('apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="dni" class="col-md-4 col-form-label text-md-end">{{ __('Dni') }}</label>

                            <div class="col-md-6">
                                <input id="dni" type="text" class="form-control @error('dni') is-invalid @enderror" name="dni" value="{{ old('dni') }}" required autocomplete="dni" autofocus>

                                @error('dni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="telefono" class="col-md-4 col-form-label text-md-end">{{ __('Telefono') }}</label>

                            <div class="col-md-6">
                                <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus>

                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        
                        <div class="row mb-3">
                            <label for="departamento" class="col-md-4 col-form-label text-md-end">{{ __('Departamento') }}</label>
                            <div class="col-md-6">
                                <select name="departamento" id="departamento">
                                    <option value="">Departamento--</option>
                                  
                                   
                                </select>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="municipio" class="col-md-4 col-form-label text-md-end">{{ __('Municipio') }}</label>
                            <div class="col-md-6">
                                <select name="municipio" id="municipio">
                                    <option value="">Municipio--</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="barrio" class="col-md-4 col-form-label text-md-end">{{ __('Barrio') }}</label>
                            <div class="col-md-6">
                                <select name="barrio" id="barrio">
                                    <option value="">Barrio--</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="row mb-3">
                            <label for="direccion" class="col-md-4 col-form-label text-md-end">{{ __('Detalle dirección') }}</label>

                            <div class="col-md-6">
                                <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion" autofocus>

                                @error('direccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirma Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarme') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js'></script>
<script type="text/javascript">
    $(document).ready(function() {
        // por comodidad puedes asignar los selects a una variable, ya que los vas a usar mas de una vez
        var plantSelect = $('#departamento');
        var areaSelect = $('#municipio');
        var equipoSelect = $('#barrio');
        // primero obtienes las plantas y llenas el select
        function populatePlantSelect() {
            $.ajax({
                url: "{{ route('getdepartamento') }}",
                type: 'GET',
                dataType: 'json',
                success: function (response) {
                    $.each(response.data, function (key, value) {
                        plantSelect.append("<option value='" + value.id + "'>" + value.nombre + "</option>");
                    });
                },
                error: function () {
                    alert('Hubo un error obteniendo las plantas!');
                }
            });
        }
        populatePlantSelect();
        // luego indicas que cuando se seleccione una planta, se obtengan las areas correspondientes y se llene el select de areas
        plantSelect.change(function(){
            var plantId = $(this).val();
            areaSelect.empty();
            equipoSelect.empty();
    
            if (plantId) {
                $.ajax({
                    url: "{{ route('getmunicipio') }}",
                    type: 'GET',
                    data: { plant_id: plantId },
                    dataType: 'json',
                    success: function (response) {
                        areaSelect.append('<option value="">--Elije un area</option>')
                        $.each(response.data, function (key, value) {
                            areaSelect.append("<option value='" + value.id + "'>" + value.nombre + "</option>");
                        });
                    },
                    error : function(){
                        alert('Hubo un error obteniendo las areas!');
                    }
                });
            }
        });
        // finalmente, indicas que cuando se seleccione un area, se obtengan los equipos correspondientes y se llene el select de equipos
        areaSelect.change(function(){
            var areaId = $(this).val();
            equipoSelect.empty();
    
            if (areaId) {
                $.ajax({
                    url: "{{ route('getbarrio') }}",
                    type: 'GET',
                    data: { area_id: areaId },
                    dataType: 'json',
                    success: function (response) {
                        equipoSelect.append('<option value="">--Elije un equipo</option>')
                        $.each(response.data, function (key, value) {
                            equipoSelect.append("<option value='" + value.id + "'>" + value.nombre + "</option>");
                        });
                    },
                    error : function(){
                        alert('Hubo un error obteniendo los equipos!');
                    }
                });
            }
        });
    });
    </script>
@endsection
