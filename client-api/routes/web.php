<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\VentasController;

 

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

/*Route::get('/',function(){
    $response = Http::get('http://127.0.0.1:8000/api/clientes');
    $data = $response->json();
    dd($data);
});*/


Route::get('/productosIndex',[ProductosController::class, 'index'])->name('productos.index');
Route::get('/productos',[ProductosController::class, 'create']);
Route::post('/productos',[ProductosController::class, 'store'])->name('productos store');
Route::get('/productos/{idProducto}',[ProductosController::class, 'view'])->name('productos.view');
Route::post('/productos/update',[ProductosController::class, 'update'])->name('productos.update');
Route::get('/productos/delete/{id}',[ProductosController::class, 'delete'])->name('productos.delete');


Route::get('/',[ClientesController::class, 'index'])->name('clientes.index');
Route::get('/cliente',[ClientesController::class, 'create']);
Route::post('/cliente',[ClientesController::class, 'store'])->name('clientes.store');
Route::get('/cliente/{idPersona}',[ClientesController::class, 'view'])->name('cliente.view');
Route::post('/cliente/update',[ClientesController::class, 'update'])->name('cliente.update');
Route::get('/cliente/delete/{id}',[ClientesController::class, 'delete'])->name('cliente.delete');

Route::get('/ventasIndex',[VentasController::class, 'index'])->name('ventas.index');
Route::get('/ventas/{idVenta}',[VentasController::class, 'view'])->name('ventas.view');
Route::post('/ventas/update',[VentasController::class, 'update'])->name('ventas.update');
Route::get('/ventas/delete/{id}',[VentasController::class, 'delete'])->name('ventas.delete');
Route::get('/ventas', [VentasController::class, 'create']);
Route::post('/ventas', [VentasController::class, 'store'])->name('ventas.store');

