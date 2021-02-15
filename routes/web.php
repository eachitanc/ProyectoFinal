<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ActualizarController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsuariosController;

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

Route::get('/', [InicioController::class, 'getIndex'])->name('home');
Route::get('/usuario/inicio', [InicioController::class, 'getIndexUser'])->name('inicioUser');
Route::get('/login', [LoginController::class, 'login'])->name('formLogin');
Route::post('/loggin', [LoginController::class, 'loginUser'])->name('loginUsuario');
Route::get('/registro', [RegistroController::class, 'registro'])->name('formRegistro');
Route::post('/registros', [RegistroController::class, 'registroUser'])->name('registroUsuario');
Route::get('/productos/varios', [ProductosController::class, 'varios'])->name('variosprod');
Route::get('/productos/anchetas', [ProductosController::class, 'anchetas'])->name('anchetas');
Route::get('/productos/desayunos', [ProductosController::class, 'desayunos'])->name('desayunos');
Route::get('/productos/chocolates', [ProductosController::class, 'chocolates'])->name('chocolates');
Route::get('/productos/flores', [ProductosController::class, 'flores'])->name('flores');
Route::get('/productos/meriendas', [ProductosController::class, 'meriendas'])->name('meriendas');
Route::post('/productos/buscar',[ProductosController::class, 'buscarProd'])->name('busprod');
Route::get('/productos/ofertas', [ProductosController::class, 'ofertaProd'])->name('ofertas');
Route::get('/productos/detalles/{id}', [ProductosController::class, 'detalle'] )->name('detallesProd');
Route::get('/productos/detallesOfertas/{id}', [ProductosController::class, 'detalleof'] )->name('detallesOferta');
Route::post('/productos/search', [ProductosController::class, 'buscaProducto'])->name('searchProduct');
Route::get('/actualizar/usuario', [ActualizarController::class, 'formActualizaUser'])->name('formActualizaUsuario');
Route::post('/actualizar/usuarios', [ActualizarController::class, 'resFormActualizaUser'])->name('resFormActualizaUsuario');
Route::get('/productos/comprar/{id}', [ProductosController::class, 'agregarAlCarrito'] )->name('comprarProd');
Route::get('/productos/compra/factura', [ProductosController::class, 'facturarProd'] )->name('facturar');

Route::get('/usuarios/listar', [UsuariosController::class, 'listarUser'])->name('listarUser');
Route::get('/usuarios/registrar', [UsuariosController::class, 'formularioReg'])->name('formularioReg'); 
Route::post('/usuarios/registrar', [UsuariosController::class, 'registrar'])->name('registrar'); 
Route::get('/usuarios/actualizar/{id}', [UsuariosController::class, 'fromActu'])->name('fromularioAct');
Route::post('/usuarios/actualizar', [UsuariosController::class, 'actualizar'])->name('actualizar');
Route::get('/usuarios/eliminar/{id}', [UsuariosController::class, 'eliminar'])->name('eliminar');