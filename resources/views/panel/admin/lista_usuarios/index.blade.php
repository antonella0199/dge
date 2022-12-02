@extends('adminlte::page')
@section('title', 'Lista de Usuarios')
@section('content_header')
<h1>Lista de Usuarios</h1>
@stop
@section('content')
    <table id="usuarios_id" class="table table-bordered data-table">
        <thead class="bg-primary text-center">
            <tr>
                <!--<th>Nro</th>-->
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Rol</th>
                <th>Barrio</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody></tbody>   
    </table>

    <div class="modal fade" id="ajaxModel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="modelHeading"></h4>
            </div>
            <div class="modal-body">
              <form id="userForm" name="userForm" class="form-horizontal">
                
                <div class="form-group" align="center">
                    <input type="hidden" id="id" value="0"/>
                  <label for="rol" class="col-sm-2 control-label">Rol</label>
                  <div class="col-sm-12">
                    <select name="rol" id="rol" maxlength="100">
                        <option value="representante">representante</option>
                        <option value="vecino">vecino</option>
                    </select>
                        
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
            ajax: "{{ route('users.index') }}",
            columns: [
            //{data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'id', name: 'id'},
            {data: 'nameU', name: 'nombre'},
            {data: 'apellido', name: 'apellido'},
            {data: 'rol', name: 'rol'},
            {data: 'nameB', name: 'nombre'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
        });
        $('body').on('click', '.editUser', function () {
            var user_id = $(this).data('id');
            
            $.get("{{route('users.index')}}" +'/'+ user_id+'/edit',
            function (data) {
                console.log(data);
                $('#modelHeading').html("Editar Rol de Usuario");
                $('#saveBtn').val("edit-user");
                $('#ajaxModel').modal('show');
                $('#id').val(data.id);
                $('#rol').val(data.rol);
            })
        });
        $('#saveBtn').click(function (e) {
            e.preventDefault();
            // break;
            $.ajax({
            // data: $('#userForm').serialize(),
            data: {
                rol: $('#rol').val(),
                id_usuario: $('#id').val()
            },
            url: "{{ route('users.store') }}",
            type: "POST",
            dataType: 'json',
            success: function (data) {
                
                $('#userForm').trigger("reset");
                $('#ajaxModel').modal('hide');
                table.draw();
                
            },
            error: function (data) {
                console.log('Error:', data);
            }
            });
        });
    });
</script>

@stop