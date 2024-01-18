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
//Actividad
Route::resource('actividad', ActividadController::class);
//Nav Actividad Material TalentoHumano
Route::resource('actividad_material_talentohumano', ActividadMaterialTalentoHumanoController::class);
//Nav Actividad Responsable
Route::resource('actividad_responsable', ActividadResponsableController::class);
//Cargo
Route::resource('cargo', CargoController::class);
//Empresa
Route::resource('empresa', EmpresaController::class);
//Material
Route::resource('material', MaterialController::class);
//Planificación
Route::resource('planificacion', PlanificacionController::class);
//Nav Planificacion Empresa
Route::resource('planificacion_empresa', PlanificacionEmpresaController::class);
//Responsable
Route::resource('responsable', ResponsableController::class);
//Rol
Route::resource('rol', RolController::class);
//TalentoHumano
Route::resource('talentohumano',TalentoHumanoController::class);
//Usuario
Route::resource('usuario', UsuarioController::class);

//test 
Route::get('test', [ActividadController::class, 'test']);
