@extends('adminlte::page')

@section('title', 'Admin Citas')
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
@section('content_header')
<h1>
    Citas
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-citas">
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
                    <h3 class="card-title">Listado de Citas</h3>
                </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="citas" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Servicios</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Total</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($citas as $cita)
                            <tr>
                                <td>{{ $cita->id }}</td>
                                <td>{{ $cita->nombre }}</td>
                                <td>{{ $cita->apellido }}</td>
                                <td>{{ $cita->fecha }}</td>
                                <td>{{ $cita->hora }}</td>
                                <td>{{ $cita->total }}</td>
                                <td>{{ $cita->alias }}</td>
                                <td>
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-update-citas-{{$cita->id}}" style="margin-right:10px; float:left">
                                    Editar
                                    </button>
                                <form action="" method="post" style="margin: 5px;">
                                    {{csrf_field() }}
                                   {{--  @method('DELETE') --}}
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                                </td>
                            </tr>

                        <!-- modal UPDATE CATEGORIES     -->
                    {{--   @include('admin.citas.modal-update-citas') --}}
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Servicios</th>
                            <th>Fecha</th>
                            <th>Hora</th>
                            <th>Total</th>
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
<div class="modal fade" id="modal-create-citas">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Crear Sucursal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                </div>
            <form action="" method="post">
                {{csrf_field()}}
                <div class="modal-body">
                    <!-- <p>Proximamente, Formulario....</p> -->
                     <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="nombre">
                        <label for="apellido">Apellido</label>
                        <input type="text" name="apellido" class="form-control" id="apellido">
                        <label for="alias">Servicio</label>
                        <input type="text" name="alias" class="form-control" id="alias">
                        <label for="fecha">Fecha</label>
                        <input type="text" name="fecha" class="form-control" id="fecha">
                        <label for="hora">Hora</label>
                        <input type="text" name="hora" class="form-control" id="hora">
                        <label for="total">Total</label>
                        <input type="text" name="total" class="form-control" id="total">
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
    $('#citas').DataTable( {
        "order": [[ 1, "desc" ]]
    } );
} );
</script>
@stop