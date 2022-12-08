<!-- Modal -->
<div class="modal fade" id="Eliminar_Articulo{{$art->idarticulo}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Eliminar_Articulo{{$art->idarticulo}}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Eliminar Articulo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
            {{$art->Marca}}
            <br>{{$art->descripcion}}
      </div>
      <div class="modal-footer">
        <form action="{{route('articulo.destroy',$art->idarticulo)}}" method="POST">
            @csrf
            @method('delete')
            <button herf="Consulta_Articulos" type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Regresar</button>
            <button type="submit" class="btn btn-outline-danger">Eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>