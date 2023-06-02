<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ProductosController;
 

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

Route::get('/',function(){
    dd("hola");
});

/*
Route::get('/',[ProductosController::class, 'index'])->name('productos.index');
Route::get('/producto',[ProductosController::class, 'create']);
Route::post('/producto',[ProductosController::class, 'store']);
Route::get('/producto/{idProducto}',[ProductosController::class, 'view'])->name('producto.view');
Route::get('/producto/update',[ProductosController::class, 'update'])->name('producto.update');
Route::get('/producto/delete/{id}',[ProductosController::class, 'delete'])->name('producto.delete');

Route::get('/',[ClientesController::class, 'index'])->name('clientes.index');
Route::get('/cliente',[ClientesController::class, 'create']);
Route::post('/cliente',[ClientesController::class, 'store']);
Route::get('/cliente/{idPersona}',[ClientesController::class, 'view'])->name('cliente.view');
Route::get('/cliente/update',[ClientesController::class, 'update'])->name('cliente.update');
Route::get('/cliente/delete/{id}',[ClientesController::class, 'delete'])->name('cliente.delete');
*/
