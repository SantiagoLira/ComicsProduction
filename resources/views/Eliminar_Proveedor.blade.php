<!-- Modal -->
<div class="modal fade" id="Eliminar_Proveedor{{$prove->idproveedor}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Eliminar_Proveedor{{$prove->idproveedor}}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Eliminar Proveedor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
            {{$prove->empresa}}
            <br>{{$prove->contacto}}
            <br>{{$prove->correo}}
      </div>
      <div class="modal-footer">
        <form action="{{route('proveedor.destroy',$prove->idproveedor)}}" method="POST">
            @csrf
            @method('delete')
            <button herf="Proveedor_Catalogo" type="button" class="btn btn-outline-success" data-bs-dismiss="modal">Regresar</button>
            <button type="submit" class="btn btn-outline-danger">Eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>