@extends('layouts.frontend')

@section('title', ' Contactanos' )
@section('content')

<div class="container center-content">
    
    
    <form action="{{route('contactanos.store')}}" method="POST">
                <div class="card-header">
                    <div class="card-title text-center">Formulario de contacto</div>
                </div>
                @csrf
                <div class="row">
                    <div class="col-6">
                        <div class="mb-1">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="name">
                            <div id="nameHelp" class="form-text">Introduzca su nombre y apellido legible</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-1">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email">
                            <div id="emailHelp" class="form-text">Introduzca su correo electrónico</div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="mb-1">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="telefono" name="phone">
                            <div id="phoneHelp" class="form-text">Introduzca su número telefónico</div>
                        </div>   
                    </div>
                    <div class="col-6">
                        <div class="mb-1">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input type="text" class="form-control" id="direccion" name="address"">
                            <div id="addressHelp" class="form-text">Introduzca su dirección detallada</div>
                        </div>
                    </div>
                </div>
                <hr>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
              
            </form>
       
    
</div>

@endsection