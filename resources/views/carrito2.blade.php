
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
  <h2>ventas</h2>
  <table class="table table-success table-striped">


  

    <tr>
     
   
      
      <th scope="row">
        <form method="post" action="{{route('PDF4')}}">
          @csrf 
        
        <select class="form-select" aria-label="Default select example" name="mes">
          <option selected>meses</option>
          <option value="1">enero</option>
          <option value="2">febrero</option>
          <option value="3">marzo</option>
          <option value="4">abril</option>
          <option value="5">mayo</option>
          <option value="6">junio</option>
          <option value="7">julio</option>
          <option value="8">agosto</option>
          <option value="9">septiembre</option>
          <option value="10">octubre</option>
          <option value="11">noviembre</option>
          <option value="12">diciembre</option>
        </select>
        <a ><button type="submit" class="btn btn-primary">Generar reporte del mes</button></a>
        </form>
      </th>
         <th scope="row">
          <form method="post" action="{{route('PDF3')}}">
            <input type="text" name="fecha">
            <a ><button type="submit" class="btn btn-primary">Generar reporte del dia</button></a>
          </form>

        </th>
    <tr>
        </a>

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
            <th scope="col"> fecha </th>
        

          </tr>
          </thead>
          <tbody>
          @foreach($tabla as $art)
            <tr>
              <th scope="col">{{$art->descripcion}}</th>
              <th scope="col">{{$art->cantidad}}</th>
              <th scope="col"> {{$art->precio}}<th>
                <th scope="col"> {{$art->tipo}}<th>
                  <th scope="col"> {{$art->fecha}}<th>
               
          
               
                
                <th>
                 
                </th>
                </tr>
          </tbody>
        
          @endforeach
        </table>

 

</div>

@stop