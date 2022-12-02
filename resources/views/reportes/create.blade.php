@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 mb-3">
            <h1>Creación de un nuevo Reporte</h1>
            <a href="{{ route('reportes.index') }}" class="btn btn-sm btn-secondary text-uppercase">
                Volver al Listado
            </a>
        </div>
        <div class="col-12">
            @include('reportes.partials.form')
        </div>
    </div>
</div>
@endsection