<div class="modal fade" id="modal-update-servicio-{{ $servicio->id }}">
            <div class="modal-dialog">
                <div class="modal-content bg-default">
                    <div class="modal-header">
                        <h4 class="modal-title">Actualizar Servicio</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        </div>
                    <form action="{{ route('admin.servicios.update',$servicio->id) }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                    <div class="modal-body">
                        <!-- <p>Proximamente, Formulario....</p> -->
                        <div class="form-group">
                            <label for="alias">Nombre</label>
                            <input type="text" name="alias" class="form-control" id="alias" value="{{$servicio->alias}}">
                            <label for="desc_serv">Descripción</label>
                            <input type="text" name="desc_serv" class="form-control" id="desc_serv" value="{{$servicio->desc_serv}}">
                            <label for="tiempo">Tiempo estimado</label>
                            <input type="text" name="tiempo" class="form-control" id="tiempo" value="{{$servicio->tiempo}}">
                            <label for="costo">Costo</label>
                            <input type="text" name="costo" class="form-control" id="costo" value="{{$servicio->costo}}">
                            <label for="name_img">Imagen principal</label>
                            <input type="text" name="name_img" class="form-control" id="post" value="{{$servicio->name_img}}">
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
       