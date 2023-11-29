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
/**Configuración de rutas del proyecto */
use App\http\Controllers\Controller_Actividad;
use App\http\Controllers\Controller_Bodeguero;
use App\http\Controllers\Controller_Empresa;
use App\http\Controllers\Controller_Encargado;
use App\http\Controllers\Controller_Material;
use App\http\Controllers\Controller_Planificacion;
use App\http\Controllers\Controller_Responsable;
use App\http\Controllers\Controller_Rol;
use App\http\Controllers\Controller_SectorParada;
use App\http\Controllers\Controller_TalentoHumano;
use App\http\Controllers\Controller_Usuario;

Route::resource('actividades',Controller_Actividad::class);
Route::resource('bodeguero',Controller_Bodeguero::class);
Route::resource('empresa',Controller_Empresa::class);
Route::resource('encargado',Controller_Encargado::class);
Route::resource('material',Controller_Material::class);
Route::resource('planificacion',Controller_Planificacion::class);
Route::resource('responsable',Controller_Responsable::class);
Route::resource('rol',Controller_Rol::class);
Route::resource('sectorParada',Controller_SectorParada::class);
Route::resource('talentoHumano',Controller_TalentoHumano::class);
Route::resource('usuario',Controller_Usuario::class);