@extends('Plantilla_1')

@section('Contenido')

@if (session('exito'))
<script>
  Swal.fire({
    position: 'top',
    icon: 'success',
    text: 'Nuevo Trabajador ha sido Registrado',
    showConfirmButton: false,
    timer: 1500
  })
</script>
@endif

<div>
  <section class="text-center">
    <div class="card mx-4 mx-md-5 shadow-5-strong">
      <div class="card-body py-5 px-md-5">

        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h2 class="fw-bold mb-5">Registro de Trabajador</h2>
            <form action="PostSignUp" method="post">
              @csrf
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="txtNameTrabajador" name="txtNameTrabajador" class="form-control" value="{{old('txtNameTrabajador')}}" />
                    <label class="form-label" for="txtNameTrabajador">Nombre</label>
                    <p class="text-danger fst-italic">{{ $errors->first('txtNameTrabajador') }}</p>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="txtApellidoTrabajador" name="txtApellidoTrabajador" class="form-control" value="{{old('txtApellidoTrabajador')}}" />
                    <label class="form-label" for="txtApellidoTrabajador">Apellido</label>
                    <p class="text-danger fst-italic">{{ $errors->first('txtApellidoTrabajador') }}</p>
                  </div>
                </div>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="txtEmailTrabajador" name="txtEmailTrabajador" class="form-control" value="{{old('txtEmailTrabajador')}}" />
                <label class="form-label" for="txtEmailTrabajador">Email</label>
                <p class="text-danger fst-italic">{{ $errors->first('txtEmailTrabajador') }}</p>
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="txtUserTrabajador" name="txtUserTrabajador" class="form-control" value="{{old('txtUserTrabajador')}}" />
                <label class="form-label" for="txtUserTrabajador">Usuario</label>
                <p class="text-danger fst-italic">{{ $errors->first('txtUserTrabajador') }}</p>
              </div>
              <div class="form-outline mb-4">
                <input type="password" id="txtPasswordTrabajador" name="txtPasswordTrabajador" class="form-control" value="{{old('txtPasswordTrabajador')}}" />
                <label class="form-label" for="txtPasswordTrabajador">Password</label>
                <p class="text-danger fst-italic">{{ $errors->first('txtPasswordTrabajador') }}</p>
              </div>


              <button type="submit" class="btn btn-primary btn-block mb-4">
                Registrar
              </button>

              <div class="text-center">
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-github"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
  <strong>Trabajador Registrado!</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@stop