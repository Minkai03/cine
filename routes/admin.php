<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\BeneficioController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\ClasificacionController;
use App\Http\Controllers\Admin\CodigoController;
use App\Http\Controllers\Admin\GeneroController;
use App\Http\Controllers\Admin\HorarioController;
use App\Http\Controllers\Admin\PeliculaController;
use App\Http\Controllers\Admin\ComboController;  
use App\Http\Controllers\Admin\SalaController;
use App\Http\Controllers\Admin\EntradaController;
use App\Http\Controllers\Admin\HoraController;
use App\Http\Controllers\Admin\UsuarioController;


Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('beneficio', BeneficioController::class)->names('admin.Beneficio');
Route::resource('hora', HoraController::class)->names('admin.Hora');
Route::resource('image', ImageController::class)->names('admin.Image');
Route::resource('clasificacion', ClasificacionController::class)->names('admin.Clasificacion');
Route::resource('codigo', CodigoController::class)->names('admin.Codigo');
Route::resource('genero', GeneroController::class)->names('admin.Genero');
Route::resource('horario', HorarioController::class)->names('admin.Horario');
Route::resource('pelicula', PeliculaController::class)->names('admin.Pelicula');
Route::resource('combo', ComboController::class)->names('admin.Combo');
Route::resource('sala', SalaController::class)->names('admin.Sala');
Route::resource('entrada', EntradaController::class)->names('admin.Entrada');
Route::resource('user', UsuarioController::class)->names('admin.Usuario');