@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 mb-3">
            <h1>Datos del Reporte "{{ $reporte->asunt }}"</h1>
            <a href="{{ route('reportes.index') }}" class="btn btn-sm btn-secondary text-uppercase">
                Volver al Listado
            </a>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="mb-3">
                    <h2>{{ $reporte->asunto }}</h2>
                    </div>
                    <div class="mb-3">
                        <p>Barrio: {{ $reporte->barrio->nombre }}</p>
                    </div>
                    <div class="mb-3">
                        <p>Fecha de inicio del problema: {{ $reporte->fechaIni }}.</p>
                    </div>
                    <div class="mb-3">
                        <p>Descripción del problema: {{ $reporte->descripcion }}</p>
                    </div>
                    <div class="mb-3">
                        <p>Creado por {{ $reporte->user->name }} el {{ $reporte->created_at }} </p>
                    </div>
                    
                    <div class="mb-3">
                        <img src="{{ $reporte->imagen_url }}" alt="{{ $reporte->asunto }}"
                        id="image_preview" class="img-fluid" style="object-fit: cover; object-position: center; height: 420px;
                        width: 100%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection