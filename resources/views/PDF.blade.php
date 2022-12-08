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
        <h1>Pedidos</h1>
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

                </tr>
                  @foreach ($datos as $dato)
                  <tr>
                    <th>{{$dato->idpedido}}</th>
                    <th>{{$dato->descripcion}}</th>
                    <th>{{$dato->cantidad}}</th>
                    <th>{{$dato->precio}}</th>
                    <th>{{$dato->fecha}}</th>
                 
                  </tr>
                  @endforeach
                
                  </td>
                  </tr>
               
                
              </table>
    </div>
    </div>
</body>
</html>