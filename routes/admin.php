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
use App\Http\Controllers\Admin\UsuarioController;


Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('Beneficio', BeneficioController::class)->names('admin.Beneficio');
Route::resource('Image', ImageController::class)->names('admin.Image');
Route::resource('Clasificacion', ClasificacionController::class)->names('admin.Clasificacion');
Route::resource('Codigo', CodigoController::class)->names('admin.Codigo');
Route::resource('Genero', GeneroController::class)->names('admin.Genero');
Route::resource('Horario', HorarioController::class)->names('admin.Horario');
Route::resource('Pelicula', PeliculaController::class)->names('admin.Pelicula');
Route::resource('Combo', ComboController::class)->names('admin.Combo');
Route::resource('Sala', SalaController::class)->names('admin.Sala');
Route::resource('Entrada', EntradaController::class)->names('admin.Entrada');
Route::resource('Usuario', UsuarioController::class)->names('admin.Usuario');