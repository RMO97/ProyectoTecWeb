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

Route::get('/',[ProductosController::class, 'index'])->name('productos.index');
Route::get('/producto',[ProductosController::class, 'create']);
Route::post('/producto',[ProductosController::class, 'store']);
Route::get('/producto/{idProducto}',[ProductosController::class, 'view'])->name('producto.view');
Route::get('/producto/update',[ProductosController::class, 'update'])->name('producto.update');
Route::get('/producto/delete/{id}',[ProductosController::class, 'delete'])->name('producto.delete');

Route::get('/',[PersonasController::class, 'index'])->name('personas.index');
Route::get('/persona',[PersonasController::class, 'create']);
Route::post('/prersona',[PersonasController::class, 'store']);
Route::get('/persona/{idPersona}',[PersonasController::class, 'view'])->name('persona.view');
Route::get('/persona/update',[PersonasController::class, 'update'])->name('persona.update');
Route::get('/persona/delete/{id}',[PersonasController::class, 'delete'])->name('persona.delete');

