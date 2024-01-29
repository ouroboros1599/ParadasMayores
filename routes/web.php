<?php

use Illuminate\Support\Facades\Route;

//Rutas hacia el controllador de cada tabla 
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\ActividadMaterialTalentoHumanoController;
use App\Http\Controllers\ActividadResponsableController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\PlanificacionController;
use App\Http\Controllers\PlanificacionEmpresaController;
use App\Http\Controllers\ResponsableController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\TalentoHumanoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PM_EjecucionController;
use App\Http\Controllers\PM_ListadoController;
use App\Http\Controllers\PM_PlanificacionController;
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
//Enturtamiento clases API
//Actividad
Route::apiResource('actividad', ActividadController::class);
//Nav Actividad Material TalentoHumano
Route::apiResource('actividad_material_talentohumano', ActividadMaterialTalentoHumanoController::class);
//Nav Actividad Responsable
Route::apiResource('actividad_responsable', ActividadResponsableController::class);
//Cargo
Route::apiResource('cargo', CargoController::class);
//Empresa
Route::apiResource('empresa', EmpresaController::class);
//Material
Route::apiResource('material', MaterialController::class);
//Planificación
Route::apiResource('planificacion', PlanificacionController::class);
//Nav Planificacion Empresa
Route::apiResource('planificacion_empresa', PlanificacionEmpresaController::class);
//Responsable
Route::apiResource('responsable', ResponsableController::class);
//Rol
Route::apiResource('rol', RolController::class);
//TalentoHumano
Route::apiResource('talentohumano',TalentoHumanoController::class);
//Usuario
Route::apiResource('usuario', UsuarioController::class);