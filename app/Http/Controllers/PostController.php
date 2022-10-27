<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PostController extends Controller
{ 
     public function index(){
    $peliculas = Pelicula::all();
    return view('Post.index', compact('peliculas'));
}

public function show(Pelicula $pelicula){
    return view('Post.show', compact('pelicula'));
}
}
