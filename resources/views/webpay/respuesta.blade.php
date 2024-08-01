@extends('layouts.frontend')

@section('content')
    
<div class="col-md-12 d-flex justify-content-center">    
    <div class="card w-50">
        <div class="card-header gray-400">
            <legend class="card-title text-center">Repuesta de Webpay</legend>
        </div>
        <div class="card-body">

            <ul>
                <li class="fw-bold">VCI: <span class="fw-normal">{{$orders->vci}}</span></li>
                <li class="fw-bold">Monto: <span class="fw-normal">{{$orders->amount}} CLP</span></li>
                <li class="fw-bold">Orden de Compra: <span class="fw-normal">{{$orders->buy_order}}</span></li>
                <li class="fw-bold">Sesión: <span class="fw-normal">{{$orders->session_id}}</span></li>
                <li class="fw-bold">Referencia de Tarjeta: <span class="fw-normal">{{$orders->card_number}}</span></li>          
                <li class="fw-bold">Fecha de Transacción: <span class="fw-normal">{{$orders->transaction_date}}</span></li>
                <li class="fw-bold">Codigo de Autorización: <span class="fw-normal">{{$orders->authorization_code}}</span></li>
                <li class="fw-bold">Tipo de Pago: <span class="fw-normal">{{$orders->payment_type_code}}</span></li>
                <li class="fw-bold">Numero de Orden: <span class="fw-normal">{{"N°000-".$orders->id }}</span></li>
               
            </ul> 


     </div>
  </div>
</div>


@endsection
