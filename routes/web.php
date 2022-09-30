<?php

use App\Http\Controllers\ComprasController;
use App\Http\Controllers\ComponentesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\AccesoriosController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\DetallesController;
use App\Http\Controllers\PDFController;
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
})->name('principal');

//PRODUCTOS
Route::get('/Productos/registro',[ProductosController::class,'create'])->name('productos.registro');
Route::get('/Productos/list',[ProductosController::class,'list'])->name('productos.list');
Route::post('/Productos/guardar', [ProductosController:: class,'guardar'])->name('productos.guardar');
Route::get('/Productos/editar/{iden}', [ProductosController::class, 'editar'])->name('productos.editar');
Route::put('Productos/{product}', [ProductosController::class, 'updatee'])->name('productos.updatee');
Route::get('Productos/borrar{iden}', [ProductosController::class, 'borrar'])->name('productos.borrar');

//COMPONENTES
Route::get('/Componentes/registro',[ComponentesController::class,'create'])->name('componentes.registro');
Route::get('/Componentes/list',[ComponentesController::class,'list'])->name('componentes.list');
Route::post('/Componentes/guardar', [ComponentesController:: class,'guardar'])->name('componentes.guardar');
Route::get('/Componentes/editar/{iden}', [ComponentesController::class, 'editar'])->name('componentes.editar');
Route::put('Componentes/{component}', [ComponentesController::class, 'updatee'])->name('componentes.updatee');
Route::get('Componentes/borrar{iden}', [ComponentesController::class, 'borrar'])->name('componentes.borrar');

//ACCESORIOS
Route::get('/Accesorios/registro',[AccesoriosController::class,'create'])->name('accesorios.registro');
Route::get('/Accesorios/list',[AccesoriosController::class,'list'])->name('accesorios.list');
Route::post('/Accesorios/guardar', [AccesoriosController:: class,'guardar'])->name('accesorios.guardar');
Route::get('/Accesorios/editar/{iden}', [AccesoriosController::class, 'editar'])->name('accesorios.editar');
Route::put('Accesorios/{accesorio}', [AccesoriosController::class, 'updatee'])->name('accesorios.updatee');
Route::get('Accesorios/borrar{iden}', [AccesoriosController::class, 'borrar'])->name('accesorios.borrar');

//COMPRAS
Route::get('/Compras/registro',[ComprasController::class,'create'])->name('compras.registro');
Route::get('/Compras/list',[ComprasController::class,'list'])->name('compras.list');
Route::post('/Compras/guardar', [ComprasController:: class,'guardar'])->name('compras.guardar');
Route::get('/Compras/editar/{iden}', [ComprasController::class, 'editar'])->name('compras.editar');
Route::put('Compras/{compras}', [ComprasController::class, 'updatee'])->name('compras.updatee');
Route::get('Compras/borrar{iden}', [ComprasController::class, 'borrar'])->name('compras.borrar');
Route::get('Compras/agregar{iden}', [ComprasController::class, 'agregar'])->name('compras.agregar');


//DETALLE DE FACTURA
Route::post('/Detalles/guardar', [DetallesController:: class,'guardar'])->name('detalle.guardar');
Route::get('/Compras/factura',[DetallesController::class,'factura'])->name('detalle.factura');
Route::get('Detalles/eliminar{iden}', [DetallesController::class, 'eliminar'])->name('detalle.eliminar');
//PDF
Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('descargar.pdf');
//Route::get('PDF/generate-pdf{iden}', [PDFController::class, 'generatePDF'])->name('descargar.pdf');
//usuarios
Route::get('/logout', [Controller::class, 'logout'])->name('logout');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/principal', function () {
        return view('principal');
    })->name('dashboard');
});
