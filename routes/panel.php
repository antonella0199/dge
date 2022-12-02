<?php

use App\Http\Controllers\BarrioController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TipoEstController;
use App\Http\Controllers\ReporteController;
use Illuminate\Support\Facades\Route;





//Route::get('/',function(){ return view('panel.index');});


Route::get('/',[HomeController::class, 'index']);

Route::resource('users','App\Http\Controllers\UserController');

Route::get('barrios/departamento', [BarrioController::class, 'getDepartamento'])->name('panel.barrio.get-departamento');
Route::get('barrios/municipio/', [BarrioController::class, 'getMunicipio'])->name('panel.barrio.get-municipio');
Route::get('barrios/barrrio', [BarrioController::class, 'getBarrio'])->name('panel.barrio.get-barrio');
Route::resource('barrios','App\Http\Controllers\BarrioController');

Route::resource('establecimientos','App\Http\Controllers\EstablecimientoController');
Route::get('tipoEsts/tipo', [TipoEstController::class, 'getTipo'])->name('panel.tipoEst.get-tipo');
Route::resource('/reportes', ReporteController::class)->names('reportes');
Route::get('/export', [ReporteController::class, 'export'])->name('export');
Route::get('/download-pdf',[ReporteController::class, 'downloadPDF'])->name('download-pdf');

//Route::get('/users',[UserController::class,'index'])->name('usuarios');


//Ruta para extraer ususarios por ajax

//Route::get('/index', [UserController::class,'get_users'])->name('get_users');