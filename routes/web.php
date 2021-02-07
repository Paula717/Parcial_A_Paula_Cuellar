<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\LibreriaController;
use App\Http\Controllers\EditorialController;

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
Route::get('/', [PrincipalController::class,'prin'])->name('principal'); 

//Libro registro
Route::get('libro/registro-libros', [LibreriaController::class,'registro_libro'])->name('formularioLib');
Route::post('libro/registro-libros', [LibreriaController::class, 'mensaje_libro'])->name('registroLib');
//Libro listar
Route::get('libro/listar-libros', [LibreriaController::class,'listarLibro'])->name('listaLibro'); 
//Libro actualizar
Route::get('libro/actualizar-libro/{id}', [LibreriaController::class, 'form_actualiza_libro'])->name('form_actualiza_libro');
Route::post('libro/actualizar-libro/{id}', [LibreriaController::class, 'actualizar_libro'])->name('actualizar_libro');
//Editorial Listar
Route::get('editorial/listar-editorial', [EditorialController::class,'listar_editorial']);