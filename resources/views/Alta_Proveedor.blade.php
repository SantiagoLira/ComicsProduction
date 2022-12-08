@extends('Plantilla_1')

@section('Contenido')
<br>
<br>
<br>
<br>
<div class="container">

    <h1 class="display-4 text-center mt-5 mb-5">ALTA</h1>
    <div class="card text-center mb-5 p-3 mb-2 bg-secondary text-white">
        <div class="card-header">
            Proveedores
        </div>
        <div class="card-body">
            <form method="post" action="{{route('proveedor.store')}}">
                @csrf 
                <p class="text-start"><label class="fs-4 fw-bolder">Contacto:</label></p>
                <input type="text" name="Contacto" class="form-control" value="{{old("Contacto")}}">
                <p class="text-danger">{{ $errors->first('Contacto') }}</p>
            <div class="form-row">
                <div class="col">
                <p class="text-start"><label class="fs-4 fw-bolder">Empresa:</label></p>
                <input type="text" name="Empresa" class="form-control" value="{{old("Empresa")}}">
                <p class="text-danger">{{ $errors->first('Empresa') }}</p>
                </div>
                <div class="col">
            </div>
            <div class="form-row">
                <div class="col">
                    <p class="text-start"><label class="fs-4 fw-bolder">Direccion:</label></p>
                    <input type="text" name="Direccion" class="form-control" value="{{old("Direccion")}}">
                    <p class="text-danger">{{ $errors->first('Direccion') }}</p>
                </div>
                <div class="col">
                <p class="text-start"><label class="fs-4 fw-bolder">No Celular:</label></p>
                <input type="text" name="Celular" class="form-control" value="{{old("Celular")}}">
                <p class="text-danger">{{ $errors->first('Celular') }}</p>
                </div>   
            </div>    
            <div class="form-row">
            <div class="col">
            <p class="text-start"><label class="fs-4 fw-bolder">Pais:</label></p>
            <input type="text" name="Pais" class="form-control" value="{{old("Pais")}}">
            <p class="text-danger">{{ $errors->first('Pais') }}</p>
            </div>
            <div class="col">
            <p class="text-start"><label class="fs-4 fw-bolder">Correo:</label></p>
            <input type="text" name="Correo" class="form-control" value="{{old("Correo")}}">
            <p class="text-danger">{{ $errors->first('Correo') }}</p>
            </div>   
            </div> 
    
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-info fw-bold fst-italic">Guardar</button>
        </form>
        </div>
        
</div>
@if (session()->has('mensaje'))
<br>
<div class="alert alert-success" role="alert" style="align-content: center">
  <p style="text-align: center">
Alta con exito
  </p>
</div>

<br>
@endif
@stop