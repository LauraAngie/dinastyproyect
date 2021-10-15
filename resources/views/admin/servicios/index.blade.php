@extends('adminlte::page')

@section('title', 'Admin DinastyClub')
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('content_header')
<h1>
    Servicios
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-category">
        Crear
    </button>
</h1>
{{-- <h2>
    Seleccionar Sucursal
</h2>
<select class="form-select" aria-label="Default select example">
    <option selected>Open this select menu</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
</select> --}}
@stop

@section('content')
<style>
.cort{
  width: 70px;
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden;
}
</style> 

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de Servicios</h3>
                </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="servicios" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Tiempo estimado</th>
                            <th>Costo</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($servicios as $servicio)
                            <tr>
                                <td>{{ $servicio->id }}</td>
                                <td>{{ $servicio->alias }}</td>
                                <td>{{ $servicio->desc_serv }}</td>
                                <td>{{ $servicio->tiempo }}</td>
                                <td>{{ $servicio->costo }}</td>
                                <td>
                                     <img src="{{asset($servicio->name_img)}}" alt="{{$servicio->title}}" class="img-fluid" width="100px" height="180px">
                                </td>
                                <td>
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-update-servicio-{{$servicio->id}}" style="margin-right:10px; float:left">
                                    Editar
                                    </button>
                                <form action="{{ route('admin.servicios.delete',$servicio->id) }}" method="post" style="margin: 5px;">
                                    {{csrf_field() }}
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                                </td>
                            </tr>

                        <!-- modal UPDATE CATEGORIES     -->
                      @include('admin.servicios.modal-update-servicio')
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Tiempo estimado</th>
                            <th>Costo</th>
                            <th>Imagen</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>

<!-- modal -->
<div class="modal fade" id="modal-create-category">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Crear Sucursal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
            <form action="{{ route('admin.servicios.store') }}" method="post"  enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-body">
                    <!-- <p>Proximamente, Formulario....</p> -->
                     <div class="form-group">
                        <label for="alias">Nombre</label>
                        <input type="text" name="alias" class="form-control" id="alias">
                        <label for="desc_serv">Descripción</label>
                        <input type="text" name="desc_serv" class="form-control" id="desc_serv">
                        <label for="tiempo">Tiempo estimado</label>
                        <input type="text" name="tiempo" class="form-control" id="tiempo">
                        <label for="costo">Costo</label>
                        <input type="text" name="costo" class="form-control" id="costo">
                        <label for="name_img">Imagen principal</label>
                        <input type="file" name="name_img" class="form-control" id="name_img">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-outline-primary">Guardar</button>
                </div>
            </form>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@stop


@section('js')
<script>
$(document).ready(function() {
    $('#servicios').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
</script>
@stop