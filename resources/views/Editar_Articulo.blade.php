<!-- Modal -->
<div class="modal fade" id="Editar_Articulo{{$art->idarticulo}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Editar_Articulo{{$art->idarticulo}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Editar Proveedor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('articulo.update',$art->idarticulo)}}">
                    @csrf 
                    {!!method_field('PUT')!!} 
                    <label class="form-label fs-4 fst-italic">Tipo:</label>
                    <input type="text" name="Tipo" class="form-control"  value="{{$art->tipo}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('Tipo')}}</p>
                
                    <label class="form-label fs-4 fst-italic">Marca:</label>
                    <input type="text" name="Marca" class="form-control"  value="{{$art->Marca}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('Marca')}}</p>
                
                    <label class="form-label fs-4 fst-italic">Fecha ingreso:</label>
                    <input type="text" name="fecha" class="form-control" value="{{$art->FechaIngreso}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('fecha')}}</p>
                
                    <label class="form-label fs-4 fst-italic">Precio compra:</label>
                    <input type="text" name="Precio_compra" class="form-control" value="{{$art->PrecioCompra}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('Precio_compra')}}</p>
                
                    <label class="form-label fs-4 fst-italic">Cantidad:</label>
                    <input type="text" name="Cantidad" class="form-control" value="{{$art->cantidad}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('Cantidad')}}</p>
                
                    <label class="form-label fs-4 fst-italic">Precio venta:</label>
                    <input type="text" name="Precio_venta" class="form-control" value="{{$art->PrecioVenta}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('Precio_venta')}}</p>

                    <label class="form-label fs-4 fst-italic">Descripcion:</label>
                    <input type="text" name="Descripcion" class="form-control" value="{{$art->descripcion}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('Descripcion')}}</p>

                    <label class="form-label fs-4 fst-italic">Proveedor:</label>
                    <input type="text" name="Proveedor" class="form-control" value="{{$art->idproveedor}}">
                    <p class="font-monospace text-danger fw-bold text-start">{{ $errors->first('Proveedor')}}</p>
            </div>
        <div class="modal-footer">
        <button herf="Consulta_Articulos" type="button" class="btn btn-outline-info" data-bs-dismiss="modal">Regresar</button>
        <button type="submit" class="btn btn-outline-success">Actualizar</button>
        </form>
      </div>
    </div>
  </div>
</div>