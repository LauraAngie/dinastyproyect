<div class="modal fade" id="modal-update-citas-{{ $cita->id }}">
            <div class="modal-dialog">
                <div class="modal-content bg-default">
                    <div class="modal-header">
                        <h4 class="modal-title">Actualizar Cita</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        </div>
                    <form action="{{ route('admin.categories.update',$cita->id) }}" method="post">
                        {{csrf_field()}}
                        <div class="modal-body">
                            <!-- <p>Proximamente, Formulario....</p> -->
                            <div class="form-group">
                            <label for="name">Categoría</label>
                            <input type="text" name="name" class="form-control" id="category" value="{{$cita->name}}">
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
       