<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
  
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('admin.Pelicula.index',compact('Peliculas'));
    }

   
    public function create()
    {
        return view('admin.Pelicula.create');
    }

    public function store(Request $request)
    {
        //
    }

  
    public function show(Pelicula $pelicula)
    {
        return view('admin.Pelicula.show' ,compact('Pelicula'));
    }

   
    public function edit(Pelicula $pelicula)
    {
        return view('admin.Pelicula.edit' ,compact('Pelicula'));
    }


    public function update(Request $request, Pelicula $pelicula)
    {
        //
    }

    
    public function destroy(Pelicula $pelicula)
    {
        //
    }
}
