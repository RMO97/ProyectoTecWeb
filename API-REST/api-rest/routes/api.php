<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Se le envia el "modelo" como tal porque el framework sabe que cuando uno envia un "id" ese id se transforma en un modelo
//para buscarlo dentro de la base de datos por lo cual se podria decir que "saltamos" ese paso

//Rutas de los productos
Route::get('/productos', 'App\Http\Controllers\ProductoController@index');
Route::post('/productos', 'App\Http\Controllers\ProductoController@store');
Route::get('/productos/{producto}', 'App\Http\Controllers\ProductoController@show');
Route::put('/productos/{producto}', 'App\Http\Controllers\ProductoController@update');
Route::delete('/productos/{producto}', 'App\Http\Controllers\ProductoController@destroy');


//Rutas de las ventas
Route::get('/ventas', 'App\Http\Controllers\VentaController@index');
Route::post('/ventas', 'App\Http\Controllers\VentaController@store');
Route::get('/ventas/{venta}', 'App\Http\Controllers\VentaController@show');
Route::put('/ventas/{venta}', 'App\Http\Controllers\VentaController@update');
Route::delete('/ventas/{venta}', 'App\Http\Controllers\VentaController@destroy');



//Rutas de los clientes
Route::get('/clientes', 'App\Http\Controllers\ClienteController@index');
Route::post('/clientes', 'App\Http\Controllers\ClienteController@store');
Route::get('/clientes/{cliente}', 'App\Http\Controllers\ClienteController@show');
Route::put('/clientes/{cliente}', 'App\Http\Controllers\ClienteController@update');
Route::delete('/clientes/{cliente}', 'App\Http\Controllers\ClienteController@destroy');



