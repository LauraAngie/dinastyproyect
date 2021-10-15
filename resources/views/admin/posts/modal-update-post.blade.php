<div class="modal fade" id="modal-update-post-{{ $post->id }}">
            <div class="modal-dialog">
                <div class="modal-content bg-default">
                    <div class="modal-header">
                        <h4 class="modal-title">Actualizar Posts</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        </div>
                    <form action="{{ route('admin.posts.update',$post->id) }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="modal-body">
                            <!-- <p>Proximamente, Formulario....</p> -->
                            <div class="form-group">
                              <label for="title">Titulo del libro</label>
                              <input type="text" name="title" class="form-control" id="post" value="{{$post->title}}">
                            </div>
                             <div>
                             <label for="category_id">Categoría</label>
                             <select name="category_id" id="post" class="form-control">
                             <option value="{{$post->category_id}}">{{$post->category->name}}</option>
                             @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                             @endforeach
                             </select>
                            </div>
                            <div>
                             <label for="content">Contenido</label>
                             <textarea name="content" class="form-control" id="post" cols="30" rows="9">{{$post->content}}</textarea>
                             {{-- <input type="text" name="content" class="form-control" id="post">  --}}
                            </div>
                            <div>
                            <label for="autor">Autor</label>
                              <input type="text" name="autor" class="form-control" id="post" value="{{$post->autor}}">
                            </div>
                            <div>
                             <label for="featured">Imagen principal</label>
                             <input type="text" name="featured" class="form-control" id="post" value="{{$post->featured}}">
                             <!-- <img src="{{asset($post->featured)}}"  class="img-fluid" width="100px" height="180px"> -->
                             <input type="file" name="featured" class="form-control" id="featured">
                            </div>
                            <div>
                                <label for="pdf">PDF principal</label>
                                <input type="text" name="pdf" class="form-control" id="post" value="{{$post->pdf}}">
                                <input type="file" name="pdf" class="form-control" id="pdf">
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
       