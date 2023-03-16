<?php

use Illuminate\Support\Facades\Route;

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
});
Route::get('/FAQ', function () {
    return view('FAQ');
});
Route::get('/Contactanos', function () {
    return view('Contactanos');
});

// Route::get('/Registro', function () {
//     return view('User/Registro');
// })->name('Registro');

// Route::get('/Login', function () {
//     return view('User/Login');
// })->name('Login');

Route::get('/Registro', 'App\Http\Controllers\RegistroController')
->name('Registro');

//Cambiar el nombre del controller a "MensajeController"//
Route::post('Registro', 'App\Http\Controllers\ControllerMensaje@store');

Route::get('/Login', 'App\Http\Controllers\LoginController')
 ->name('Login');

 //Cambiar el nombre del controller a "MensajeController"//
 Route::post('Login', 'App\Http\Controllers\ControllerMensaje@store');




