@extends('adminlte::page')

@section('title', 'Admin Sucursales')
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('content_header')
<h1>
    Sucursales
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-category">
        Crear
    </button>
</h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de Sucursales</h3>
                </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="sucursales" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Dirección</th>
                            <th>Telefono</th>
                            <th>Horario</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sucursales as $sucursal)
                            <tr>
                                <td>{{ $sucursal->id }}</td>
                                <td>{{ $sucursal->alias }}</td>
                                <td>{{ $sucursal->direc }}</td>
                                <td>{{ $sucursal->telefono }}</td>
                                <td>{{ $sucursal->horario }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-update-sucursales-{{$sucursal->id}}" style="margin-right:10px; float:left">
                                    Editar
                                    </button>
                                    <form action="{{ route('admin.sucursales.delete',$sucursal->id) }}" method="post">
                                        {{csrf_field() }}
                                       @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>

                        <!-- modal UPDATE CATEGORIES     -->
                       @include('admin.sucursales.modal-update-sucursales')
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                             <th>Id</th>
                            <th>Nombre</th>
                            <th>Dirección</th>
                            <th>Telefono</th>
                            <th>Horario</th>
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
            <form action="{{ route('admin.sucursales.store') }}" method="post">
                {{csrf_field()}}
                <div class="modal-body">
                    <!-- <p>Proximamente, Formulario....</p> -->
                    <div class="form-group">
                    <label for="alias">Nombre</label>
                    <input type="text" name="alias" class="form-control" id="sucursal">
                     <label for="direc">Direccion</label>
                    <input type="text" name="direc" class="form-control" id="sucursal">
                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" class="form-control" id="sucursal">
                    <label for="horario">Horario</label>
                    <input type="text" name="horario" class="form-control" id="sucursal">
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
    $('#sucursales').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
</script>
@stop