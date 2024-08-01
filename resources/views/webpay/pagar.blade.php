@extends('layouts.frontend')

@section('content')
    <h1>WebPay  - Pagar </h1>
    Pagando.......
    {{$datos->url}}
    <hr>
    <form action="{{$datos->url}}" name="form" method="post">
      <input type="hidden" name="token_ws" value="{{$datos->token}}">
    </form>
    {{-- Aplicamos un Script para lograr enviar automaticamente el token --}}
    <script type="text/javascript">
      window.onload = function(){
        document.form.submit();
      };
    </script>
@endsection