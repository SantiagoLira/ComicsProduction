@extends('Plantilla_1')

@section('Contenido')

<div class="text-center">
        <br>
        <a class="btn btn-default" href="{{route('varticulo.index')}}"><i class="fas fa-magic mr-1"></i> Articulos</a>
        <a class="btn btn-primary active ml-4" href="{{route('vcomic.index')}}">Comics <i class="fas fa-magic ml-1"></i></a>
    </div>


<br>
<!-- tablas -->
@if(session()->has('Actualiza'))
<div class="alert alert-success" role="alert" style="align-content: center">
  <p style="text-align: center">
Comic editado
  </p>
</div>
@endif
@if(session()->has('Elimina'))
<div class="alert alert-danger" role="alert" style="align-content: center">
  <p style="text-align: center">
Comic eliminado
  </p>
</div>
@endif
<div class="container col-md-8 table table-hover">
  <h1>Mostrador Comics</h1>
  <table style="align-content: center">

    <tr>

      <th>
        <table class="table">

          <tr>

            <th scope="col">Nombre</th>
            <th scope="col">Precio Venta</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Edicion</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Comprar</th>

          </tr>
          </thead>
          <tbody>
          @foreach($tablaCo2 as $com)
          @include('Editar_Comics')
          @include('Eliminar_Comics')
            <tr>
              <th scope="col">{{$com->nombre}}</th>
              <th scope="col">{{$com->precioVenta}}</th>
              <th scope="col">
                    @if(($com->cantidad)==0)
                <p style="color: red"> AGOTADO</p>
                @else 
            
                {{$com->cantidad}}

              @endif</th>
              <th scope="col">{{$com->edicion}}</th>
              <th>
                @if(($com->cantidad)==0): 

                
                    @else
                  
             
                    <form action="{{route('ventascomic2')}}" method="POST">  
                      @csrf
                      <input type="number" name="cantidad2" >
                      <input type="hidden" name="descripcion" value="{{$com->nombre}}">
                      <input type="hidden" name="id" value="{{$com->idcomic}}">   
                      <input type="hidden" name="cantidad1"value=" {{$com->cantidad}}"> 
                      <input type="hidden" name="precio"value=" {{$com->precioVenta}}">
                    </th>
                    <th>
                      <button type="submit" class="btn btn-info fw-bold fst-italic">Comprar</button>
                    </form>
              </th>
              @endif
            </tr>
          </tbody>
          @endforeach
        </table>


      </th>
      <th>
        <table class="table table-success table-striped">


         

        </table>
      </th>

    </tr>


  </table>

</div>

@stop