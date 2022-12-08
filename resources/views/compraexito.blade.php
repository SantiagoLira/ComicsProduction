
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
<!-- tablas -->  <div class="container col-md-6">
  <br>
 
<div class="container" style="background-color: gray">
  <br><br>
  @if(session()->has('n1'))
  <div class="alert alert-danger" role="alert" style="align-content: center">
    <p style="text-align: center">
  no podemos vender 0 
    </p>
  </div>
  @endif
  @if(session()->has('n2'))
  <div class="alert alert-danger" role="alert" style="align-content: center">
    <p style="text-align: center">
  no tenemos tando producto lo sentimos
    </p>
  </div>
  @endif
  @if(session()->has('n3'))
  <div class="alert alert-danger" role="alert" style="align-content: center">
    <p style="text-align: center">
  no ingresar nuemro negativos porfavor
    </p>
  </div>
  @endif
  @if(session()->has('carrito'))
  <div class="alert alert-success" role="alert" style="align-content: center">
    <p style="text-align: center">
  Agregado al carrito
    </p>
  </div>
  @endif

  <a style="align-content: center" href="{{route('varticulo.index')}}"><button class="btn btn-info fw-bold fst-italic">Continuar</button><a>
    <br><br>
</div>
</div>
@stop