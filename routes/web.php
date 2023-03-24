<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('/');
Route::get('/FAQ', function () {
    return view('FAQ');
});
Route::get('/Contactanos', function () {
    return view('Contactanos');
});

//Cambiar el nombre del controller a "MensajeController"//
Route::post('Registro', 'App\Http\Controllers\ControllerMensaje@store');

Route::get('/Login', 'App\Http\Controllers\LoginController')
    ->name('Login');

//Cambiar el nombre del controller a "MensajeController"//
Route::post('Login', 'App\Http\Controllers\ControllerMensaje@store');

//Producto---------------------------
Route::get('Producto', 'App\Http\Controllers\ProductoController@create')->name('Producto');
Route::post('Producto','App\Http\Controllers\ProductoController@store' )->name('Producto.store');

//Registro --------------------------------------
Route::get('Registro', 'App\Http\Controllers\RegistroController@create')->name('Registro');
Route::post('Registro', 'App\Http\Controllers\RegistroController@store')->name('Registro.store');

