@extends('Plantilla_1')

@section('Contenido')

<div class="text-center">
        <br>
        <a class="btn btn-primary active ml-4" href="{{route('varticulo.index')}}"><i class="fas fa-magic mr-1"></i> Articulos</a>
        <a class="btn btn-default" href="{{route('vcomic.index')}}">Comics <i class="fas fa-magic ml-1"></i></a>
    </div>


<br>
<!-- tablas -->

<div class="container col-md-8 table table-hover">
  <h1>Mostrador Articulos</h1>
  <table style="align-content: center">

    <tr>

      <th>
        <table class="table">

          <tr>

            <th scope="col">Marca</th>
            <th scope="col">Precio Venta</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Comprar</th>

          </tr>
          </thead>
          <tbody>
          @foreach($tablaAr2 as $art)
            <tr>
              <th scope="col">{{$art->Marca}}</th>
              <th scope="col">{{$art->PrecioVenta}}</th>
              <th scope="col">
                @if(($art->cantidad)==0)
                <p style="color: red"> AGOTADO</p>
                @else 
            
                {{$art->cantidad}}

              @endif
            
            </th>
              <th scope="col">{{$art->descripcion}}</th>
              <th>
                @if(($art->cantidad)==0): 

                
                    @else
                  
              <form action="{{route('ventasArticulo2')}}" method="POST">  
                @csrf
                <input type="number" name="cantidad2" >
                <input type="hidden" name="descripcion" value="{{$art->descripcion}}">
                <input type="hidden" name="id" value="{{$art->idarticulo}}">   
                <input type="hidden" name="cantidad1"value=" {{$art->cantidad}}"> 
                <input type="hidden" name="precio"value=" {{$art->PrecioVenta}}">
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