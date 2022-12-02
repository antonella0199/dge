@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 mb-3">
            <h1>Reportes</h1>
            <a href="{{ route('reportes.create') }}" class="btn btn-success text-uppercase">Crear</a>
        </div>
        @if (session('alert'))
        <div class="col-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('alert') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        @endif
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if ($reportes->count())
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col" class="text-uppercase">Asunto</th>
                                    <th scope="col" class="text-uppercase">Barrio</th>
                                    <th scope="col" class="text-uppercase">Fecha de inicio</th>
                                    <th scope="col" class="text-uppercase">Descripcion</th>
                                    <th scope="col" class="text-uppercase">Archivo(jpg)</th>
                                    <th scope="col" class="text-uppercase">Creado por</th>
                                    <th scope="col" class="text-uppercase">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reportes as $reporte)
                                
                                <tr>
                                    <th>{{ $reporte->id }}</th>
                                    <td>{{ $reporte->asunto }}</td>
                                    <td>{{ $reporte->barrio->nombre }}</td>
                                    <td>{{ $reporte->fechaIni }}</td>
                                    <td>{{ Str::limit($reporte->descripcion, 50) }}</td>
                                    <td>
                                        <img src="{{ $reporte->imagen_url }}" alt="{{ $reporte->asunto }}" class="img-fluid" style="width: 150px;">
                                    </td>
                                    <td>{{ $reporte->user->nombre }}</td>
                                    <td>
                                        <div class="d-flex">

                                            <a href="{{ route('reportes.show', $reporte) }}" class="btn btn-sm btn-info text-white text-uppercase me-1">
                                                MOSTRAR
                                            </a>
                                            <a href="{{ route('reportes.edit', $reporte) }}" class="btn btn-sm btn-warning text-white text-uppercase me-1">
                                                Editar
                                            </a>

                                            <form action="{{ route('reportes.destroy', $reporte) }}" method="POST">
                                                @csrf @method('DELETE')
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger text-white text-uppercase me-1" style="font-size:11px" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    Eliminar
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">ELIMINAR REPORTE</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p> Está seguro que desea eliminar este reporte?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                        @hasanyrole('representante|admin')
                        <a href="{{ route('export') }}" class="btn btn-success"> Generar EXCEL</a>
                        <a href="{{ route('download-pdf') }}" class="btn btn-danger"> Generar PDF</a>
                        @endhasanyrole
                    </div>
                    @else
                    <h4 class="mb-0">No hay posts para mostrar.</h4>
                    @endif
                </div>

                @if ($reportes->count())
                <div class="card-footer">
                    {{ $reportes->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection