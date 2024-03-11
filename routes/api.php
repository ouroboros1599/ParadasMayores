<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ActividadController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ParadaMayorController;
use App\Http\Controllers\PersonalController;
use App\Http\Controllers\RolUsuarioController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Enturtamiento clases API
//Actividad
Route::apiResource('actividad', ActividadController::class);
//Empresa
Route::apiResource('empresa', EmpresaController::class);
//Material
Route::apiResource('material', MaterialController::class);
//ParadaMayor
Route::apiResource('paradaMayor', ParadaMayorController::class);
//Personal
Route::apiResource('personal', PersonalController::class);
//RolUsuario
Route::apiResource('rolUsuario', RolUsuarioController::class);
//Tarea
Route::apiResource('tarea', TareaController::class);
//Usuario
Route::apiResource('usuario', UsuarioController::class);