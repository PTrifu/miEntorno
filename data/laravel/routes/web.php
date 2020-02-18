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

Route::get('fac', function () {
    // return 'Prueba';
    return view('factura');
});
Route::get('pro',function(){
    return view('producto');
});
Route::get('cli',function(){
    return view('cliente');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/lista','ControllerFactura@index')->name('lista');

Route::get('/lista/show/{id}','ControllerFactura@show')->name('show');

Route::get('/eliminar/{id}','ControllerFactura@destroy')->name('destroy');
//obtener datos del formulario para guardarlo
Route::post('/crear','ControllerCliente@store')->name('store');

Route::get('/listarCliente','ControllerCliente@index')->name('listarcliente');

Route::get('/cli/edit/{id}','ControllerCliente@edit')->name('editcliente');

Route::post('/cli/update/{id}','ControllerCliente@update')->name('store');
Auth::routes();
