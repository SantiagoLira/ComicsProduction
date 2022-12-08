@extends('Plantilla_1')

@section('Contenido')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

@if (session()->has('mensaje'))
<div class="alert alert-success" role="alert" style="align-content: center">
  <p style="text-align: center">
Alta con exito
  </p>
</div>
@endif

<div class="container">

    <h1 class="display-4 text-center mt-5 mb-5">ALTA</h1>
    <div class="card text-center mb-5 p-3 mb-2 bg-secondary text-white">
        <div class="card-header">
            Comics
        </div>
        <div class="card-body">
            <form method="post" action="{{route('comic.store')}}">
                @csrf 
                <p class="text-start"><label class="fs-4 fw-bolder">Nombre:</label></p>
                <input type="text" name="Nombre" class="form-control" value="{{old("Nombre")}}">
                <p class="text-danger">{{ $errors->first('Nombre') }}</p>
            <div class="form-row">
                <div class="col">
                <p class="text-start"><label class="fs-4 fw-bolder">Edicion:</label></p>
                <input type="text" name="Edicion" class="form-control" value="{{old("Edicion")}}">
                <p class="text-danger">{{ $errors->first('Edicion') }}</p>
                </div>
                <div class="col">
                <p class="text-start"><label class="fs-4 fw-bolder">Precio Compra:</label></p>
                <input type="text" name="Precio_compra" class="form-control" value="{{old("Precio_compra")}}">
                <p class="text-danger">{{ $errors->first('Precio_compra') }}</p>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <p class="text-start"><label class="fs-4 fw-bolder">Compañia:</label></p>
                    <input type="text" name="Compañia" class="form-control" value="{{old("Compañia")}}">
                    <p class="text-danger">{{ $errors->first('Compañia') }}</p>
                </div>
          
            </div>    
            <div class="form-row">
            <div class="col">
            <p class="text-start"><label class="fs-4 fw-bolder">Cantidad:</label></p>
            <input type="text" name="Cantidad" class="form-control" value="{{old("Cantidad")}}">
            <p class="text-danger">{{ $errors->first('Cantidad') }}</p>
            </div>
            <div class="col">
            <p class="text-start"><label class="fs-4 fw-bolder">Fecha ingreso:</label></p>
            <input type="text" name="Fecha" class="form-control" value="{{old("Fecha")}}">
            <p class="text-danger">{{ $errors->first('Fecha') }}</p>
            </div>   
            </div> 
            <br>
            <label class="form-label fs-4 fst-italic">Proveedor:</label>
            <input type="text" name="Proveedor" class="form-control" value="{{old('idproveedor')}}">
            <p class="text-danger">{{ $errors->first('Proveedor') }}</p>
    
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-info fw-bold fst-italic">Guardar</button>
        </form>
        </div>
        
</div>
@stop