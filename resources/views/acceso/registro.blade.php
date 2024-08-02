@extends('layouts.frontend')

  @section('content')

      <div class="d-flex justify-content-center mt-2 mb-2">
        <div class="card col col-8">
          <div class="card-header text-center fs-3">     
            Registro de Usuario 
          </div>

              <form action="{{route('acceso.post')}}" method="POST">
      
                 @csrf

               <div class="card-body row">
                  <div class="col-md-6 col-12">  
                    <div class="mb-3">
                        <label for="name" class="form-label fw-bold">Nombre :</label>
                        <input type="text" name="name" class="form-control" value="{{old('name')}}"> 
                      </div>
                  </div>
                  
                  <div class="col-md-6 col-12">  
                    <div class="mb-3">
                      <label for="apellidos" class="form-label fw-bold">Apellidos :</label>
                      <input type="text" name="apellidos" class="form-control" value="{{old('apellidos')}}"> 
                    </div>
                  </div>
                

                  <div class="col-md-6 col-12">
                    <div class="mb-3">
                      <label for="telefono" class="form-label fw-bold">Telefono :</label>
                      <input type="text" name="telefono" class="form-control" value="{{old('telefono')}}"> 
                    </div>
                  </div>

                 <div class="col-md-6 col-12">
                    <div class="mb-3">
                      <label for="direccion" class="form-label fw-bold">Direccion :</label>
                      <input type="text" name="direccion" class="form-control" value="{{old('direccion')}}"> 
                    </div>
                 </div>

                  <div class="col-md-6 col-12">
                    <div class="mb-3">
                      <label for="profesion" class="form-label fw-bold">Profesión :</label>
                      <input type="text" name="profesion" class="form-control" value="{{old('profesion')}}"> 
                    </div>
                  </div>
      
                  <div class="col-md-6 col-12">
                    <div class="mb-3">
                      <label for="email" class="form-label fw-bold">Correo :</label>
                      <input type="email" name="email" class="form-control" value="{{old('email')}}"> 
                    </div>
                  </div>

                  <div class="col-md-6 col-12">
                    <div class="mb-3">
                      <label for="password" class="form-label fw-bold">Contraseña :</label>
                      <input type="password" name="password" class="form-control" value="{{old('password')}}"> 
                    </div>
                  </div>

                  <div class="col-md-6 col-12">
                    <div class="mb-3">
                      <label for="password2" class="form-label fw-bold">Confirmar Contraseña :</label>
                      <input type="password" name="password_confirmation" class="form-control"> 
                    </div>
                  </div>

                </div>
                
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Registrar</button>
                </div>
                  
              </form>
        </div>
      </div>

  @endsection