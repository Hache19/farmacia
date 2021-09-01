<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class);
Route::get('rol',[RolController::class, 'index']);
Route::get('rol/create',[RolController::class, 'create']);
Route::get('rol/{rol}',[RolController::class, 'show']);

Route::get('personal',[PersonalController::class, 'index']);
Route::get('personal/create',[PersonalController::class, 'create']);
Route::get('personal/{personal}',[PersonalController::class, 'show']);

Route::get('presentacion',[PresentacionController::class, 'index']);
Route::get('presentacion/create',[PresentacionController::class, 'create']);
Route::get('presentacion/{presentacion}',[PresentacionController::class, 'show']);

Route::get('tipoproducto',[TipoProductoController::class, 'index']);
Route::get('tipoproducto/create',[TipoProductoController::class, 'create']);
Route::get('tipoproducto/{tipoproducto}',[TipoProductoController::class, 'show']);

Route::get('laboratorio',[LaboratorioController::class, 'index']);
Route::get('laboratorio/create',[LaboratorioController::class, 'create']);
Route::get('laboratorio/{laboratorio}',[LaboratorioController::class, 'show']);

//clientes
Route::get('clientes', [ClientesController::class,'index'] );
Route::get('clientes/create', [ClientesController::class,'create']);
Route::get('clientes/{clientes}', [ClientesController::class,'show']);

//proveedor
Route::get('proveedor', [ProveedorController::class,'index'] );
Route::get('proveedor/create', [ProveedorController::class,'create']);
Route::get('proveedor/{proveedor}', [ProveedorController::class,'show']);

//proveedor
Route::get('venta', [VentaController::class,'index'] );
Route::get('venta/create', [VentaController::class,'create']);
Route::get('venta/{venta}', [VentaController::class,'show']);

Route::get('producto', [ProductoController::class,'index'] );
Route::get('producto/create', [ProductoController::class,'create']);
Route::get('producto/{producto}', [ProductoController::class,'show']);

Route::get('productoventa', [ProductoVentaController::class,'index'] );
Route::get('productoventa/create', [ProductoVentaController::class,'create']);
Route::get('productoventa/{productoventa}', [ProductoVentaController::class,'show']);

Route::get('lote', [LoteController::class,'index'] );
Route::get('lote/create', [LoteController::class,'create']);
Route::get('lote/{lote}', [LoteController::class,'show']);