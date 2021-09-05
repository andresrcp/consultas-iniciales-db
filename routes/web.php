<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


//ruta listado usuarios
Route::get('users', [UserController::class, 'index'])->name('users.index');
//ruta crear usuarios
Route::get('users/create', [UserController::class, 'create'])->name('users.create');
//ruta mostrar detalles
Route::get('users/{id}', [UserController::class, 'show'])->name('users.show');
//ruta crear usuario nuevo
Route::post('users', [UserController::class, 'store'])->name('users.store');
//ruta eliminar usuario
Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
//ruta editar usuario
Route::get('users/edit/{id}',[UserController::class, 'edit'])->name('users.edit');
//actualizar un usuario
Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');
