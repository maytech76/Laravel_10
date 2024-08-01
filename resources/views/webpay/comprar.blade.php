@extends('layouts.frontend')

@section('content')

<div class="row d-flex align-items-center my-5">
    <!-- Columna para el formulario -->
    <div class="col-md-6 p-2">
        <div class="card">
          <div class="card-header">
            <legend class="card-title">Datos del Cliente</legend>
          </div>
            <div class="card-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control fw-light" name="name" id="" placeholder="Ingrese Su Nombre"/>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Dirección Detallada</label>
                        <input type="text" class="form-control fw-light" name="name" id="" placeholder="Ingrese Su Dirección "/>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Telefono</label>
                        <input type="text" class="form-control fw-light" name="name" id="" placeholder="Ingrese N° de telefono"/>
                   </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">    
            <div class="card w-100">
                <div class="card-header">
                    <legend class="card-title">Detalles de la Compra</legend>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><strong>Producto:</strong> Mesa para computador</li>
                        <li class="list-group-item"><strong>Valor:</strong> 10.000 CLP</li>
                        <li class="list-group-item"><strong>Cantidad:</strong> 1</li>
                        <li class="list-group-item"><strong>Hora de Compra: </strong>{{  date('m:s') }}</li>
                        <li class="list-group-item"><strong>Fecha:</strong> {{ date('d-m-Y') }}</li>
                       
                    </ul>
                </div>
                <div class="card-footer text-center justify-content-center m-1">
                    <a href="{{route('pagar')}}" class="btn btn-primary w-100">Pocesar Pagó</a>
                </div>
            </div>      
    </div>
</div>
@endsection