

@extends('layouts.frontend')

@section('content')
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
        </head>
        <body>
            <h3>Correo Electronico</h3>
            <p>Primer correo enviado con laravel 10</p>
            <p><strong>Nombre: </strong> {{$data['name']}}</p>
            <p><strong>Nombre: </strong> {{$data['email']}}</p>
            <p><strong>Nombre: </strong> {{$data['phone']}}</p>
            <p><strong>Nombre: </strong> {{$data['address']}}</p>
        </body>
        </html>

@endsection