<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\TiendaController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\PresentacionController;
use App\Http\Controllers\TipoProductoController;
use App\Http\Controllers\LaboratorioController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProductoVentaController;
use App\Http\Controllers\LoteController;



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

//Route::get('/', HomeController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', TiendaController::class)->name('dashboard');
Route::resource('tiendas', TiendaController::class);
Route::get('tiendas/{producto}', [TiendaController::class,'crearPedido'])->name('tiendas.crearPedido');



//Rol
Route::resource('rol', RolController::class);

//Personal
Route::resource('personal', PersonalController::class);

//Presentacion
Route::resource('presentacion', PresentacionController::class);


//Tipoproducto
Route::resource('tipoproducto', TipoProductoController::class);


//laboratorio
Route::resource('laboratorio', LaboratorioController::class);

//clientes
Route::resource('clientes', ClientesController::class);


//proveedor
Route::resource('proveedor', ProveedorController::class);


//venta
Route::resource('venta', VentaController::class);


//producto
Route::resource('producto', ProductoController::class);


//productoventa
Route::resource('productoventa', ProductoVentaController::class);


//Lote
Route::resource('lote', LoteController::class);



