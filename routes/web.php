<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ActualizarController;
use App\Http\Controllers\ProductosController;

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

Route::get('/', [InicioController::class, 'getIndex']);
Route::get('/usuario/inicio', [InicioController::class, 'getIndexUser'])->name('inicioUser');
Route::get('/login', [LoginController::class, 'login'])->name('formLogin');
Route::post('/loggin', [LoginController::class, 'loginUser'])->name('loginUsuario');
Route::get('/registro', [RegistroController::class, 'registro'])->name('formRegistro');
Route::post('/registros', [RegistroController::class, 'registroUser'])->name('registroUsuario');
Route::get('/productos/anchetas', [ProductosController::class, 'anchetas'])->name('anchetas');
Route::get('/productos/desayunos', [ProductosController::class, 'desayunos'])->name('desayunos');
Route::get('/productos/chocolates', [ProductosController::class, 'chocolates'])->name('chocolates');
Route::get('/productos/flores', [ProductosController::class, 'flores'])->name('flores');
Route::get('/productos/meriendas', [ProductosController::class, 'meriendas'])->name('meriendas');
Route::post('/productos/buscar',[ProductosController::class, 'buscarProd'])->name('busprod');
Route::get('/productos/detalles/{id}', [ProductosController::class, 'detalle'] )->name('detallesProd');
Route::post('/productos/search', [ProductosController::class, 'buscaProducto'])->name('searchProduct');
Route::get('/actualizar/usuario', [ActualizarController::class, 'formActualizaUser'])->name('formActualizaUsuario');
Route::post('/actualizar/usuarios', [ActualizarController::class, 'resFormActualizaUser'])->name('resFormActualizaUsuario');
