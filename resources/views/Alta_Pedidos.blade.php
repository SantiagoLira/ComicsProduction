
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
           Pedido
        </div>
        <div class="card-body">
            <form action="guardarPedido" method="POST">  
                @csrf 
                <p class="text-start"><label class="fs-4 fw-bolder">descripcion del producto:</label></p>
                <input type="text" name="descripcion" class="form-control" value="{{old("descripcion")}}">
                <p class="text-danger">{{ $errors->first('descripcion') }}</p>
            <div class="form-row">
                <div class="col">
                <p class="text-start"><label class="fs-4 fw-bolder">cantidad:</label></p>
                <input type="text" name="cantidad" class="form-control" value="{{old("cantidad")}}">
                <p class="text-danger">{{ $errors->first('cantidad') }}</p>
                </div>
                <div class="col">
                <p class="text-start"><label class="fs-4 fw-bolder">Precio:</label></p>
                <input type="text" name="Precio" class="form-control" value="{{old("Precio")}}">
                <p class="text-danger">{{ $errors->first('Precio') }}</p>
                </div>
                <br>
                <div class="col">
                  <p class="text-start"><label class="fs-4 fw-bolder">Provedor:</label></p>
                  <input type="text" name="Provedor" class="form-control" value="{{old("Provedor")}}">
                  <p class="text-danger">{{ $errors->first('Provedor') }}</p>
                  </div>
                


                 
                 
                 
            </div>
           
    
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-info fw-bold fst-italic">Guardar</button>
        </form>
        </div>
        
</div>
@stop