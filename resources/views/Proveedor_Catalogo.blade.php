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
@if(session()->has('Actualiza'))
<div class="alert alert-success" role="alert" style="align-content: center">
  <p style="text-align: center">
Proveedor editado
  </p>
</div>
@endif
@if(session()->has('Eliminar'))
<div class="alert alert-danger" role="alert" style="align-content: center">
  <p style="text-align: center">
Proveedor eliminado
  </p>
</div>
@endif

<!-- tablas -->
<div class="container col-md-8 table table-hover">
  <h1>Proveedores</h1>
  <table style="align-content: center">



    <tr>
      <th>
        <table class="table">
          <tr>
          </tr>
          <tr>
            <th scope="col">Empresa</th>
            <th scope="col">Dirección</th>
            <th scope="col">País</th>
            <th scope="col">Contacto</th>
            <th scope="col">No Celular</th>
            <th scope="col">Correo</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
          </tr>
          </thead>
          <tbody>
          @foreach($tablaPro as $prove)
          @include('Editar_Proveedor')
          @include('Eliminar_Proveedor')
            <tr>
              <th scope="col">{{$prove->empresa}}</th>
              <th scope="col">{{$prove->direccion}}</th>
              <th scope="col">{{$prove->pais}}</th>
              <th scope="col">{{$prove->contacto}}</th>
              <th scope="col">{{$prove->telefono}}</th>
              <th scope="col">{{$prove->correo}}</th>
              <th>
                <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#Editar_Proveedor{{$prove->idproveedor}}">
                Editar
                </button>
              </th>
              <th>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#Eliminar_Proveedor{{$prove->idproveedor}}">
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


            <th scope="row"><a href="{{route('proveedor.create')}}"><button type="button" class="btn btn-primary">Agregar Proveedor</button></a></th>

          <tr>

          </tr>
          <tr>

          </tr>
        </table>
      </th>

    </tr>


  </table>

</div>

@stop