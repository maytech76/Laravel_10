<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\WebpayController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/template', [TemplateController::class, 'index'])->name('index');


Route::get('/webpay', [WebpayController::class, 'comprar'])->name('comprar');
Route::get('/webpay/pagar', [WebpayController::class, 'pagar'])->name('pagar');
Route::get('/webpay/respuesta', [WebpayController::class, 'respuesta'])->name('respuesta');


/* Rutas para gestionar nuestros correos electronicos */

Route::get('contactanos', function () {
  Mail::to('staroffic@gmail.com')->send(new ContactanosMailable);
  return "Correo Enviado";
})->name('contactanos');


/* Rutas para gestionar nuestros correos electronicos desde formulario de contacto */
Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');
