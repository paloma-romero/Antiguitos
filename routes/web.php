<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlador;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('Home');
});
*/

/*CREAR RUTAS A HOME, RECUERDO Y REGISTRO RUTAR DE TIPO VIEW*/
Route::get('/', [controlador::class,'fHome'])->name('NHome');
Route::get('/login', [controlador::class,'fLogin'])->name('NLogin');
Route::get('/ventas', [controlador::class,'fVentas'])->name('NVentas');
Route::get('/tickets', [controlador::class,'fTickets'])->name('NTickets');


Route::get('/consulta', [controlador::class,'fConsulta'])->name('NConsulta');
Route::get('/registro', [controlador::class,'fRegistro'])->name('NRegistro');
Route::get('/Tabla', [controlador::class,'fTabla'])->name('NTabla');

Route::get('/consultaArticulo', [controlador::class,'fConsultaArticulo'])->name('NConsultaArticulo');
Route::get('/registroArticulo', [controlador::class,'fRegistroArticulo'])->name('NRegistroArticulo');
Route::get('/tablaArticulo', [controlador::class,'fTablaArticulo'])->name('NTablaArticulo');

Route::get('/consultaProvedores', [controlador::class,'fConsultaProvedores'])->name('NConsultaProvedores');
Route::get('/registroProvedores', [controlador::class,'fRegistroProvedores'])->name('NRegistroProvedores');
Route::get('/tablaProvedores', [controlador::class,'fTablaProvedores'])->name('NTablaProvedores');

Route::get('/consultaEmpleados', [controlador::class,'fConsultaEmpleados'])->name('NConsultaEmpleados');
Route::get('/registroEmpleados', [controlador::class,'fRegistroEmpleados'])->name('NRegistroEmpleados');
Route::get('/tablaEmpleados', [controlador::class,'fTablaEmpleados'])->name('NTablaEmpleados');

Route::post('guardar',[controlador::class,'procesar'])->name('NProcesar');
Route::post('guardarlogin',[controlador::class,'procesarLogin'])->name('NProcesarlogin');
Route::post('guardarArticulo',[controlador::class,'procesarArticulo'])->name('NProcesarArticulo');
Route::post('guardarProvedores',[controlador::class,'procesarProvedores'])->name('NProcesarProvedores');
Route::post('guardarEmpleados',[controlador::class,'procesarEmpleados'])->name('NProcesarEmpleados');
