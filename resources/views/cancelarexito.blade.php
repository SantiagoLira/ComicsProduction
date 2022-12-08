
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
  <div class="alert alert-success" role="alert" style="align-content: center">
    <p style="text-align: center">
Compra Cancelada
    </p>
  </div>
  @endif  @if(session()->has('n5'))
  <div class="alert alert-success" role="alert" style="align-content: center">
    <p style="text-align: center">
Compra Realizada
    </p>
  </div>
  @endif


  <a style="align-content: center" href="{{route('carrito.index')}}"><button class="btn btn-info fw-bold fst-italic">Continuar</button><a>
    <br><br>
</div>
</div>
@stop