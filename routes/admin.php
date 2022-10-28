<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\BeneficioController;
use App\Http\Controllers\Admin\BimageController;
use App\Http\Controllers\Admin\CarrimageController;
use App\Http\Controllers\Admin\ClasificacionController;
use App\Http\Controllers\Admin\CodigoController;
use App\Http\Controllers\Admin\GeneroController;
use App\Http\Controllers\Admin\HorarioController;
use App\Http\Controllers\Admin\PeliculaController;
use App\Http\Controllers\Admin\PimageController;
use App\Http\Controllers\Admin\PromoController;  
use App\Http\Controllers\Admin\SalaController;
use App\Http\Controllers\Admin\TicketController;


Route::get('/admin', [HomeController::class, 'index'])->name('admin.home');

Route::resource('Beneficio', BeneficioController::class)->names('admin.Beneficio');
Route::resource('Bimage', BimageController::class)->names('admin.Bimage');
Route::resource('Carrimage', CarrimageController::class)->names('admin.Carrimage');
Route::resource('Clasificacion', ClasificacionController::class)->names('admin.Clasificacion');
Route::resource('Codigo', CodigoController::class)->names('admin.Codigo');
Route::resource('Genero', GeneroController::class)->names('admin.Genero');
Route::resource('Horario', HorarioController::class)->names('admin.Horario');
Route::resource('Pelicula', PeliculaController::class)->names('admin.Pelicula');
Route::resource('Pimage', PimageController::class)->names('admin.Pimage');
Route::resource('Promo', PromoController::class)->names('admin.Promo');
Route::resource('Sala', SalaController::class)->names('admin.Sala');
Route::resource('Ticket', TicketController::class)->names('admin.Ticket');