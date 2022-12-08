@extends('Plantilla_1')

@section('Contenido')

<div class="text-center">
        <br>
        <a class="btn btn-primary active ml-4" href="{{route('articulo.index')}}"><i class="fas fa-magic mr-1"></i> Articulos</a>
        <a class="btn btn-default" href="{{route('comic.index')}}">Comics <i class="fas fa-magic ml-1"></i></a>
    </div>


<br>
<!-- tablas -->
@if(session()->has('Actualiza'))
<div class="alert alert-success" role="alert" style="align-content: center">
  <p style="text-align: center">
Articulo editado
  </p>
</div>
@endif
@if(session()->has('Elimina'))
<div class="alert alert-danger" role="alert" style="align-content: center">
  <p style="text-align: center">
Articulo eliminado
  </p>
</div>
@endif
<div class="container col-md-8 table table-hover">
  <form class="d-flex" role="search">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="buscar2">
    <button class="btn btn-outline-success" type="submit">Buscar</button>
  </form>
  <h1>Catalogo Articulos</h1>
  <table style="align-content: center">

    <tr>

      <th>
        <table class="table">

          <tr>

            <th scope="col">Marca</th>
            <th scope="col">Precio Venta</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>

          </tr>
          </thead>
          <tbody>
          @foreach($tablaAr as $art)
          @include('Editar_Articulo')
          @include('Eliminar_Articulo')
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
                
                <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#Editar_Articulo{{$art->idarticulo}}">
                Editar
                </button>
              </th>
              <th>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#Eliminar_Articulo{{$art->idarticulo}}">
                Eliminar
                </button>
              </th>

            </tr>
          </tbody>
          @endforeach
        </table>


      </th>
      <th>
        <table class="table table-success table-striped">


          <tr>
            <th scope="row"><a href="{{route('articulo.create')}}"><button type="button" class="btn btn-primary">Agregar articulo</button></a></th>
          <tr>

        </table>
      </th>

    </tr>


  </table>

</div>

@stop