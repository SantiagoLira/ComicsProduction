<!-- Modal -->
<div class="modal fade" id="Editar_Comics{{$com->idcomic}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Editar_Comics{{$com->idcomic}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Editar Proveedor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('comic.update',$com->idcomic)}}">
                    @csrf 
                    {!!method_field('PUT')!!} 
                    <label class="form-label fs-4 fst-italic">Nombre:</label>
                    <input type="text" name="Nombre" class="form-control"  value="{{$com->nombre}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('Nombre')}}</p>
                
                    <label class="form-label fs-4 fst-italic">Edicion:</label>
                    <input type="text" name="Edicion" class="form-control"  value="{{$com->edicion}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('Edicion')}}</p>
                
                    <label class="form-label fs-4 fst-italic">Precio compra:</label>
                    <input type="text" name="Precio_compra" class="form-control" value="{{$com->precioCompra}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('Precio_compra')}}</p>
                
                    <label class="form-label fs-4 fst-italic">Compañia:</label>
                    <input type="text" name="Compañia" class="form-control" value="{{$com->compania}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('Compañia')}}</p>
                
                    <label class="form-label fs-4 fst-italic">Precion Venta:</label>
                    <input type="text" name="Precio_venta" class="form-control" value="{{$com->precioVenta}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('Precio_venta')}}</p>
                
                    <label class="form-label fs-4 fst-italic">Cantidad:</label>
                    <input type="text" name="Cantidad" class="form-control" value="{{$com->cantidad}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('Cantidad')}}</p>

                    <label class="form-label fs-4 fst-italic">Fecha ingreso:</label>
                    <input type="text" name="Fecha" class="form-control" value="{{$com->fechaIngreso}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('Fecha')}}</p>

                    <label class="form-label fs-4 fst-italic">Proveedor:</label>
                    <input type="text" name="Proveedor" class="form-control" value="{{$com->idproveedor}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('Proveedor')}}</p>
            </div>
        <div class="modal-footer">
        <button herf="Consulta_Comics" type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Regresar</button>
        <button type="submit" class="btn btn-outline-success">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>