<?php

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
    return view('welcome');
});

/* RUTAS ALUMNO */
Route::get('/', [AlumnoController::class, 'index'])->name('alumno.index');
Route::get('alumno/nuevo', [AlumnoController::class, 'crear'])->name('alumno.crear');
Route::post('/alumno/guardar', [AlumnoController::class, 'guardar'])->name('alumno.guardar');
Route::get('/alumno/{id}/editar', [AlumnoController::class, 'editar'])->name('alumno.editar');
Route::post('/alumno/{id}/editar', [AlumnoController::class, 'actualizar'])->name('alumno.actualizar');
Route::delete('/alumno/{id}/eliminar', [AlumnoController::class, 'eliminar'])->name('alumno.borrar');
Route::get('/alumno/{id}', [AlumnoController::class, 'mostrar'])->name('alumno.mostrar');
Route::post('/alumno/buscar', [AlumnoController::class, 'buscar'])->name('alumno.buscar');

/* RUTAS MAESTRO */
Route::get('/', [MaestroController::class, 'index'])->name('maestro.index');
Route::get('maestro/nuevo', [MaestroController::class, 'crear'])->name('maestro.crear');
Route::post('/maestro/guardar', [MaestroController::class, 'guardar'])->name('maestro.guardar');
Route::get('/maestro/{id}/editar', [MaestroController::class, 'editar'])->name('maestro.editar');
Route::post('/maestro/{id}/editar', [MaestroController::class, 'actualizar'])->name('maestro.actualizar');
Route::delete('/maestro/{id}/eliminar', [MaestroController::class, 'eliminar'])->name('maestro.borrar');
Route::get('/maestro/{id}', [MaestroController::class, 'mostrar'])->name('maestro.mostrar');
Route::post('/maestro/buscar', [MaestroController::class, 'buscar'])->name('maestro.buscar');

/* RUTAS MATRICULA */
Route::get('/', [MatriculaController::class, 'index'])->name('matricula.index');
Route::get('matricula/nuevo', [MatriculaController::class, 'crear'])->name('matricula.crear');
Route::post('/matricula/guardar', [MatriculaController::class, 'guardar'])->name('matricula.guardar');
Route::get('/matricula/{id}/editar', [MatriculaController::class, 'editar'])->name('matricula.editar');
Route::post('/matricula/{id}/editar', [MatriculaController::class, 'actualizar'])->name('matricula.actualizar');
Route::delete('/matricula/{id}/eliminar', [MatriculaController::class, 'eliminar'])->name('matricula.borrar');
Route::get('/matricula/{id}', [MatriculaController::class, 'mostrar'])->name('matricula.mostrar');
Route::post('/matricula/buscar', [MatriculaController::class, 'buscar'])->name('matricula.buscar');

/* RUTAS MATRICULA */
Route::get('/', [GradoController::class, 'index'])->name('grado.index');
Route::get('grado/nuevo', [GradoController::class, 'crear'])->name('grado.crear');
Route::post('/gradoa/guardar', [GradoController::class, 'guardar'])->name('grado.guardar');
Route::get('/grado/{id}/editar', [GradoController::class, 'editar'])->name('grado.editar');
Route::post('/grado/{id}/editar', [GradoController::class, 'actualizar'])->name('grado.actualizar');
Route::delete('/grado/{id}/eliminar', [GradoController::class, 'eliminar'])->name('grado.borrar');
Route::get('/grado/{id}', [GradoController::class, 'mostrar'])->name('grado.mostrar');
Route::post('/grado/buscar', [GradoController::class, 'buscar'])->name('grado.buscar');