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
<!-- tablas -->
<div class="container col-md-12 table table-hover">
 
  <h1>Pedidos</h1>
  <form class="d-flex" role="search">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="buscar">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>
  @if (session()->has('mensaje'))
  <div class="alert alert-success" role="alert" style="align-content: center">
    <p style="text-align: center">
      alta exitosa
    </p>
  </div>
  @endif
  @if (session('no_orden')=="nohay")
  <div class="alert alert-success" role="alert" style="align-content: center">
    <p style="text-align: center">
      no tenemos de eso
    </p>
  </div>
  @endif
  <table class="table table-success table-striped">


    <tr>


      <th scope="row"><button type="button" class="btn btn-primary"><a href="33">Crear Pedido</a></button></th>

    <tr>
    <tr>


     

    <tr>

    </tr>
    <tr>

    </tr>
  </table>
  <table style="align-content: center">
  
    <tr>
      <th>
        <table class="table">

          <tr>
            <th scope="col">No Pedido</th>
            <th scope="col">descripcion</th>
            <th scope="col">cantidad</th>
            <th scope="col">Precio</th>
            <th scope="col">fecha</th>
     
            <th scope="col">Eliminar</th>
            <th scope="col">PDF</th>
            <th scope="col">correo</th>
          </tr>
            @foreach ($datos as $dato)
            <tr>
              <th>{{$dato->idpedido}}</th>
              <th>{{$dato->descripcion}}</th>
              <th>{{$dato->cantidad}}</th>
              <th>{{$dato->precio}}</th>
              <th>{{$dato->fecha}}</th>
        
            <th scope="row">
              <form action="{{route('dead',$dato->idpedido)}} " method="POST">
                @csrf
              <button type="submit" class="btn btn-primary">Eliminar</button>
              </form>
            </a></th>
              <th scope="row">
                <form action="{{route('PDF',$dato->idpedido)}} " method="POST">
                  @csrf
                <button type="submit" class="btn btn-primary">Generar PDF</button>
                </form>
              </a></th>
              <th>
                <form action="{{route("correo.store")}}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-primary">correo</button>
                </form>
              </th>
            </tr>
            @endforeach
          
            </td>
            </tr>
         
          
        </table>


      </th>

      <th>
        
      </th>

    </tr>


  </table>

</div>

@stop