<div class="modal fade" id="modal-update-sucursales-{{ $sucursal->id }}">
            <div class="modal-dialog">
                <div class="modal-content bg-default">
                    <div class="modal-header">
                        <h4 class="modal-title">Actualizar Sucursal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        </div>
                    <form action="{{ route('admin.sucursales.update',$sucursal->id) }}" method="post">
                        {{csrf_field()}}
                       <div class="modal-body">
                            <!-- <p>Proximamente, Formulario....</p> -->
                            <div class="form-group">
                            <label for="alias">Nombre</label>
                            <input type="text" name="alias" class="form-control" id="sucursal" value="{{$sucursal->alias}}">
                            <label for="direc">Direccion</label>
                            <input type="text" name="direc" class="form-control" id="sucursal" value="{{$sucursal->direc}}">
                            <label for="telefono">Telefono</label>
                            <input type="text" name="telefono" class="form-control" id="sucursal" value="{{$sucursal->telefono}}">
                            <label for="horario">Horario</label>
                            <input type="text" name="horario" class="form-control" id="sucursal" value="{{$sucursal->horario}}">
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
       