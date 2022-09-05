<?php

use App\Http\Controllers\ProductosController;
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
    return view('principal');
});

//PRODUCTOS
Route::get('/Productos/registro',[ProductosController::class,'create'])->name('productos.registro');
Route::get('/Productos/list',[ProductosController::class,'list'])->name('productos.list');
Route::post('/Productos/guardar', [ProductosController:: class,'guardar'])->name('productos.guardar');
Route::get('/Productos/editar/{iden}', [ProductosController::class, 'editar'])->name('productos.editar');
Route::put('Productos/{product}', [ProductosController::class, 'updatee'])->name('productos.updatee');
Route::get('Productos/borrar{iden}', [ProductosController::class, 'borrar'])->name('productos.borrar');


/*
Route::get('/empresa/create', [EmpresaController::class, 'create'])->name('empresa.crear');
*/