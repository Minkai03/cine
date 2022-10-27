<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class Carteleracontroller extends Controller
{
    public function index(){
        $peliculas = Pelicula::all();

        return view('Cartelera.index', compact('peliculas'));
    }

    public function show(Pelicula $pelicula){
        return view('Cartelera.show', compact('pelicula'));
}
}
