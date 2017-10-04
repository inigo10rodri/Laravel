
<?php

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
    return view('welcome');
});

Route::get('/Hola', function () {
    return view('holaMundo');
});

Route::get('/mensajeAgur', function () {
    return view('mensajeAgur');
});

Route::get('/getForm', function () {
    return view('getForm');
});

Route::get('/postForm', function () {
    return view('postForm');
});

Route::post('/mensajeAgur', function () {
    return view('mensajeAgur');
});

Route::post('/mensajeAgur','CorreoController@anadirCorreo');


