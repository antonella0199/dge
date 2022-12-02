@extends('adminlte::page')
@section('title', 'Lista de Barrios')
@section('content_header')
<h1>Lista de Barrios</h1>
@stop
@section('content')
    <div class="container">
        @hasanyrole('representante|admin')
            <a class="btn   btn-success"   href="javascript:void(0)" id="createNewBarrio">Nuevo</a>
        @endhasanyrole
        <table id="usuarios_id" class="table table-bordered data-table">
            <thead class="bg-primary text-center">
                <tr>
                    <!--<th>Nro</th>-->
                    <th>ID</th>
                    <th>Departamento</th>
                    <th>Municipio</th>
                    <th>Barrio</th>                
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody></tbody>   
        </table>
    </div>
    <div class="modal fade" id="ajaxModel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="form-group">
              <form id="barrioForm" name="barrioForm"> 
                <input type="hidden" name="id" id="id">
                <div class="row mb-3">
                    <label for="departamento" class="col-md-4 col-form-label text-md-end">{{ __('Departamento') }}</label>
                    <div class="col-sm-12">
                        <select name="departamento" id="departamento">
                            <option value="">Departamento--</option>
                          
                           
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="municipio" class="col-md-4 col-form-label text-md-end">{{ __('Municipio') }}</label>
                    <div class="col-sm-12">
                        <select name="municipio" id="municipio">
                            <option value="">Municipio--</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="nombre" name="nombre" value="" maxlength="50" required="">
                    </div>
                </div>
                
                <div class="col-sm-offset-2 col-sm-10">
                    <button  type="submit"   class="btn   btn-primary"   id="saveBtn" value="create">Guardar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

@stop
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
@stop
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.3.2/bootbox.js" integrity="sha256-/xtAmLBY+m2arbG5tgC75nJ3pC0zGLdo0hw8zEOuVF4=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(function () {
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var table = $('.data-table').DataTable({
            responsive: true,
            autoWidth: false,
            processing: true,
            serverSide: true,
            
            language:{
                "decimal":        "",
                "emptyTable":     "No hay datos",
                "info":           "Mostrando _START_ a _END_ de _TOTAL_ registros",
                "infoEmpty":      "Mostrando 0 a 0 de 0 registros",
                "infoFiltered":   "(Filtro de _MAX_ total registros)",
                "infoPostFix":    "",
                "thousands":      ",",
                "lengthMenu":     "Mostrar _MENU_ registros",
                "loadingRecords": "Cargando...",
                "processing":     "Procesando...",
                "search":         "Buscar:",
                "zeroRecords":    "No se encontraron coincidencias",
                "paginate": {
                    "first":      "Primero",
                    "last":       "Ultimo",
                    "next":       "Próximo",
                    "previous":   "Anterior"
                },
                "aria": {
                    "sortAscending":  ": Activar orden de columna ascendente",
                    "sortDescending": ": Activar orden de columna desendente"
                }
            },
            ajax: "{{ route('barrios.index') }}",
            columns: [
            //{data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'id', name: 'id'},
            {data: 'nameD', name: 'nombre',searchable: true},
            {data: 'nameM', name: 'nombre',searchable: true},
            {data: 'nameB', name: 'nombre',searchable: true},
            {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
        });

        $('#saveBtn').click(function (e) {
            e.preventDefault();
            // break;
            $.ajax({
            // data: $('#userForm').serialize(),
            data: {
                nombre: $('#nombre').val(),
                id: $('#municipio').val()
            },
            url: "{{ route('barrios.store') }}",
            type: "POST",
            dataType: 'json',
            success: function (data) {
                
                $('#barrioForm').trigger("reset");
                $('#ajaxModel').modal('hide');
                table.draw();
                
            },
            error: function (data) {
                console.log('Error:', data);
            }
            });
            });

            $('body').on('click', '.deleteBarrio', function () {
                var product_id = $(this).data("id");
                bootbox.confirm({
                message: "Seguro desea eliminar el item?",
                buttons: {
                    confirm: {
                        label: 'SI',
                        className: 'btn-success'
                    },
                    cancel: {
                        label: 'No',
                        className: 'btn-danger'
                    }
                },
                callback: function (result){
                    if(result){
                        $.ajax({
                        type: "DELETE",
                        url: "{{ route('barrios.store') }}"+'/'+product_id,
                        success: function (data) {
                        table.draw();
                    },

                error: function (data) {
                    console.log('Error:', data);
                }
                });
                };
                }
                });
            });
        });

    $('#createNewBarrio').click(function(e) {
        e.preventDefault();

        $('#saveBtn').val("create-category");
        $('#category_id').val('');
        $('#categoryForm').trigger("reset");
        $('#modelHeading').html("Nuevo Barrio");
        $('#ajaxModel').modal('show');

        // por comodidad puedes asignar los selects a una variable, ya que los vas a usar mas de una vez
        var plantSelect = $('#departamento');
        var areaSelect = $('#municipio');
        // primero obtienes las plantas y llenas el select
        function populatePlantSelect() {
            $.ajax({
                url: "{{ route('panel.barrio.get-departamento')}}",
                type: 'GET',
                dataType: 'json',
                contentType: "application/json",
                success: function (response) {
                    $.each(response.data, function (key, value) {
                        plantSelect.append("<option value='" + value.id + "'>" + value.nombre + "</option>");
                    });
                },
                error: function (e) {
                    console.log('error', e)
                    // alert('Hubo un easd!');
                }
            });
        }
        populatePlantSelect();
        // luego indicas que cuando se seleccione una planta, se obtengan las areas correspondientes y se llene el select de areas
        plantSelect.change(function(e){
            e.preventDefault();

            var plantId = $(this).val();
            areaSelect.empty();
    
            if (plantId) {
                $.ajax({
                    url: "{{ route('panel.barrio.get-municipio')}}",
                    type: 'GET',
                    data: { plant_id: plantId },
                    dataType: 'json',
                    contentType: "application/json",
                    success: function (response) {
                        console.log('response', response);
                        areaSelect.append('<option value="">--Elije un area</option>')
                        $.each(response.data, function (key, value) {
                            areaSelect.append("<option value='" + value.id + "'>" + value.nombre + "</option>");
                        });
                    },
                    error : function(e){
                        console.log('error', e)
                        alert('Hubo un error obteniendo las areas!');
                    }
                });
            }
        });
    });
</script>

@stop