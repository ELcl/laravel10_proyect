<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

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

Route::get('/', function () {
    return view('layouts.app');
});

// Cursos
//Listar
Route::get('/curso', [CursoController::class, 'index'])->name('curso');
//Crear
Route::get('/curso/create/', [CursoController::class, 'create'])->name('curso.create');
// Mostrar
Route::get('/curso/{id}', [CursoController::class, 'show'])->name('curso.show');
//Guardar
Route::post('/curso', [CursoController::class, 'store'])->name('curso.store');
//Editar
Route::get('/curso/{curso}/editar', [CursoController::class, 'edit'])->name('curso.edit');
//Actualizar
Route::patch('/curso/{curso}', [CursoController::class, 'update'])->name('curso.update');
//Eliminar
Route::delete('/curso/{curso}', [CursoController::class, 'destroy'])->name('curso.destroy');

    /*Route::controller(CursoController::class)->group(function () {
        Route::get('/curso', 'index');
        Route::get('/curso/new', 'create');
        Route::post('/curso/{id}', 'show');
        Route::patch('/curso/{id}', 'update');
        Route::delete('/curso/{id}', 'destroy');
    })->name('curso');*/