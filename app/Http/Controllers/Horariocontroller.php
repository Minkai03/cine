<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\Pelicula;
use Illuminate\Http\Request;

class Horariocontroller extends Controller
{
    public function index(){
        $horarios = Horario::all();
        $peliculas = Pelicula::all();
        return view('Horario.index', compact('horarios', 'peliculas'));
    }
}
