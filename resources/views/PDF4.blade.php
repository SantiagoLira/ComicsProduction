<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
</head>
<body>
  <div style="align-content: center">
    <div class="container col-md-8 table table-hover">
        <h1>Tiket</h1>
        <table class="table">

          <tr>

            <th scope="col">descripcion</th>
            <th scope="col">cantidad</th>
            <th scope="col"> precio </th>
       

          </tr>
          </thead>
          <tbody>  
        
          @foreach($datos as $art)
            <tr>
              <th scope="col">{{$art->descripcion}}</th>
              <th scope="col">{{$art->cantidad}}</th>
              <th scope="col"> {{$art->precio}}<th>
          
          @endforeach
           </th>
         
        </table>
    </div>
    </div>
</body>
</html>