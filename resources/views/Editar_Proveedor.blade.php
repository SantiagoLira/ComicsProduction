<!-- Modal -->
<div class="modal fade" id="Editar_Proveedor{{$prove->idproveedor}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Editar_Proveedor{{$prove->idproveedor}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Editar Proveedor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('proveedor.update',$prove->idproveedor)}}">
                    @csrf 
                    {!!method_field('PUT')!!} 
                    <label class="form-label fs-4 fst-italic">Contacto:</label>
                    <input type="text" name="Contacto" class="form-control"  value="{{$prove->contacto}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('Contacto')}}</p>
                
                    <label class="form-label fs-4 fst-italic">Empresa:</label>
                    <input type="text" name="Empresa" class="form-control"  value="{{$prove->empresa}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('Empresa')}}</p>
                
                    <label class="form-label fs-4 fst-italic">Direccion:</label>
                    <input type="text" name="Direccion" class="form-control" value="{{$prove->direccion}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('Direccion')}}</p>
                
                    <label class="form-label fs-4 fst-italic">No Celular:</label>
                    <input type="text" name="Celular" class="form-control" value="{{$prove->telefono}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('Celular')}}</p>
                
                    <label class="form-label fs-4 fst-italic">Pais:</label>
                    <input type="text" name="Pais" class="form-control" value="{{$prove->pais}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('Pais')}}</p>
                
                    <label class="form-label fs-4 fst-italic">Correo:</label>
                    <input type="text" name="Correo" class="form-control" value="{{$prove->correo}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('Correo')}}</p>
            </div>
        <div class="modal-footer">
        <button herf="Proveedor_Catalogo" type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Regresar</button>
        <button type="submit" class="btn btn-outline-success">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>