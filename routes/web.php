<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitasController; 
use App\Http\Controllers\VisitantesController; 
use App\Http\Controllers\UsuariosController; 
use App\Http\Controllers\TramitesController; 
use App\Http\Controllers\InformesController; 

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
    return view('home');
});

// Ruta para mostrar la vista show.blade.php
Route::get('/visitas/show', [VisitasController::class, 'index']); 

// Ruta para mostrar la vista create.blade.php
Route::get('/visitas/create', [VisitasController::class, 'create']); 

// Ruta para mostrar la vista update.blade.php
Route::get('/visitas/edit/{visitas}', [VisitasController::class, 'edit']); 

// Ruta para insertar producto
Route::post('/visitas/store', [visitasController::class, 'store']); 

// Ruta para modificar producto
Route::put('/visitas/update/{id}', [VisitasController::class, 'update']);


// Ruta para eliminar producto
Route::delete('/visitas/destroy/{id}', [VisitasController::class, 'destroy']); 


//visitantes

// Ruta para mostrar la vista show.blade.php
Route::get('/visitantes/show', [VisitantesController::class, 'index']); 

// Ruta para mostrar la vista create.blade.php
Route::get('/visitantes/create', [VisitantesController::class, 'create']); 

// Ruta para mostrar la vista update.blade.php
Route::get('/visitantes/edit/{visitantes}', [VisitantesController::class, 'edit']); 

// Ruta para insertar producto
Route::post('/visitantes/store', [VisitantesController::class, 'store']); 

// Ruta para modificar producto
Route::put('/visitantes/update/{id}', [VisitantesController::class, 'update']);


// Ruta para eliminar producto
Route::delete('/visitantes/destroy/{id}', [VisitantesController::class, 'destroy']);

 


//usuario

// Ruta para mostrar la vista show.blade.php
Route::get('/usuarios/show', [UsuariosController::class, 'index']); 

// Ruta para mostrar la vista create.blade.php
Route::get('/usuarios/create', [UsuariosController::class, 'create']); 

// Ruta para mostrar la vista update.blade.php
Route::get('/usuarios/edit/{usuario}', [UsuariosController::class, 'edit']); 

// Ruta para insertar producto
Route::post('/usuarios/store', [UsuariosController::class, 'store']); 

// Ruta para modificar producto
Route::put('/usuarios/update/{id}', [UsuariosController::class, 'update']);


// Ruta para eliminar producto
Route::delete('/usuarios/destroy/{id}', [UsuariosController::class, 'destroy']); 



//Tramites

// Ruta para mostrar la vista show.blade.php
Route::get('tramites/show', [TramitesController::class, 'index']); 

// Ruta para mostrar la vista create.blade.php
Route::get('tramites/create', [TramitesController::class, 'create']); 

// Ruta para mostrar la vista update.blade.php
Route::get('tramites/edit/{usuario}', [TramitesController::class, 'edit']); 

// Ruta para insertar producto
Route::post('tramites/store', [TramitesController::class, 'store']); 

// Ruta para modificar producto
Route::put('tramites/update/{id}', [TramitesController::class, 'update']);


// Ruta para eliminar producto
Route::delete('tramites/destroy/{id}', [TramitesController::class, 'destroy']); 


//Informes

// Ruta para mostrar la vista show.blade.php
Route::get('informes/show', [InformesController::class, 'index']); 

// Ruta para mostrar la vista create.blade.php
Route::get('informes/create', [InformesController::class, 'create']); 

// Ruta para mostrar la vista update.blade.php
Route::get('informes/edit/{usuario}', [InformesController::class, 'edit']); 

// Ruta para insertar producto
Route::post('informes/store', [InformesController::class, 'store']); 

// Ruta para modificar producto
Route::put('informes/update/{id}', [InformesController::class, 'update']);


// Ruta para eliminar producto
Route::delete('informes/destroy/{id}', [InformesController::class, 'destroy']); 
