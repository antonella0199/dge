<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
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




Auth::routes();

Route::get('register/getdepartamento', [RegisterController::class,'getdepartamento'])->name('getdepartamento');
Route::get('register/getmunicipio', [RegisterController::class,'getmunicipio'])->name('getmunicipio');
Route::get('register/getbarrio', [RegisterController::class,'getbarrio'])->name('getbarrio');


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/welcome', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/contacto', [HomeController::class, 'contact'])->name('contacto');
Route::get('/info', [HomeController::class, 'info'])->name('info');
Route::get('/institucion', [HomeController::class, 'institucion'])->name('institucion');
Route::get('/productobruto', [HomeController::class, 'productobruto'])->name('productobruto');
Route::get('/ubicacion', [HomeController::class, 'ubicacion'])->name('ubicacion');
Route::get('/', function () {
    return view('welcome');
});