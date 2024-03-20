<?php

use Illuminate\Support\Facades\Route;

//Rutas hacia controlladores CRUD ParadaMayor
use App\Http\Controllers\PM_EjecucionController;
use App\Http\Controllers\PM_ListadoController;
use App\Http\Controllers\PM_PlanificacionController;
// Rutas hacia controladores API de cada clase 
// use App\Http\Controllers\ActividadController;
// use App\Http\Controllers\EmpresaController;
// use App\Http\Controllers\MaterialController;
// use App\Http\Controllers\ParadaMayorController;
// use App\Http\Controllers\PersonalController;
// use App\Http\Controllers\RolUsuarioController;
// use App\Http\Controllers\TareaController;
// use App\Http\Controllers\UsuarioController;
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

//Enrutamiento 
//ParadasMayores CRUD
Route::resource('pm_planificacion', PM_PlanificacionController::class);
Route::resource('pm_ejecucion', PM_EjecucionController::class);
Route::resource('pm_listado', PM_ListadoController::class);
// //Enturtamiento clases API
// //Actividad
// Route::apiResource('actividad', ActividadController::class);
// //Empresa
// Route::apiResource('empresa', EmpresaController::class);
// //Material
// Route::apiResource('material', MaterialController::class);
// //ParadaMayor
// Route::apiResource('paradaMayor', ParadaMayorController::class);
// //Personal
// Route::apiResource('personal', PersonalController::class);
// //RolUsuario
// Route::apiResource('rolUsuario', RolUsuarioController::class);
// //Tarea
// Route::apiResource('tarea', TareaController::class);
// //Usuario
// Route::apiResource('usuario', UsuarioController::class);