<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/crearTicket', function () {
    return view('cliente/crearTicket');
});


Route::get('/consultarTicket', function () {
    return view('cliente/consultarTicket');
});

Route::get('/eliminarTicket', function () {
    return view('cliente/eliminarTicket');
});

Route::get('/editarCliente', function () {
    return view('cliente/editarCliente');
});

Route::get('/crearTicketM', function () {
    return view('cliente/crearTicket')->with('mensaje', '$mensaje');
});

Route::get('/editarClienteM', function () {
    return view('cliente/editarCliente')->with('mensaje', '$mensaje');
});

Route::get('/eliminarTicketM', function () {
    return view('cliente/eliminarTicket')->with('mensaje', '$mensaje');
});




