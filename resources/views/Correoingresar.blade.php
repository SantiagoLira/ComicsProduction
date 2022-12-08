<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route("correo.store")}}" method="POST">
        @csrf
        <div class="container col-md-6">

            <div class="card text-center mb-5">
                <div class="card-header">
                    <strong>Nuevo Correo</strong>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <label>
                            Correo:
                            <br>
                            <input required type="email" name="txtCorreo" class="form-control">
                        </label>
                    </div>
                    <div class="mb-3">
                        <label>
                            Nombre:
                            <br>
                            <input required type="text" name="txtNombre" class="form-control">
                        </label>
                    </div>
                    <div class="mb-3">
                        <label>
                            Mensaje:
                            <br>
                            <textarea required name="txtMensaje" class="form-control"></textarea>
                        </label>
                    </div>
                        <button type="submit" class="btn btn-warning">Enviar mensaje</button>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>