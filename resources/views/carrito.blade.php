
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
<div class="container col-md-8 table table-hover" >
  <h2>Carrito</h2>
  <table class="table table-success table-striped">


    <tr>
     
   
      
        <th scope="row">
          <a href="{{route('PDF2')}}"><button type="button" class="btn btn-primary">Generar Tiket</button></a>
        </th>
           <th scope="row">
            <a href="{{route('carrito.cancelar2')}}"><button type="submit" class="btn btn-info fw-bold fst-italic">Confirmar Compra</button>
            </a>
        </th>
      <tr>
       

  </table>
  <table style="align-content: center">

    <tr>

      <th>
        <table class="table">

          <tr>

            <th scope="col">descripcion</th>
            <th scope="col">cantidad</th>
            <th scope="col"> precio </th>
            <th scope="col"> tipo </th>
        

          </tr>
          </thead>
          <tbody>
          @foreach($tabla as $art)
            <tr>
              <th scope="col">{{$art->descripcion}}</th>
              <th scope="col">{{$art->cantidad}}</th>
              <th scope="col"> {{$art->precio}}<th>
                <th scope="col"> {{$art->tipo}}<th>
                <form action="{{route('carrito.cancelar')}}" method="POST">  
                  @csrf
                  <input type="hidden" name="id" value=" {{$art->id}}"> 
                  <input type="hidden" name="tipo" value=" {{$art->tipo}}">
                <th>
                  <button type="submit" class="btn btn-info fw-bold fst-italic">Cancelar</button>
                </form>
                </th>
                <th>
                 
                </th>
                </tr>
          </tbody>
        
          @endforeach
        </table>

 

</div>

@stop