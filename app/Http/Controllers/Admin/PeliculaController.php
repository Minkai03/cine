<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Clasificacion;
use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculaController extends Controller
{
  
    public function index()
    {
        $peliculas = Pelicula::all();
        return view('admin.Pelicula.index',compact('peliculas'));
    }

   
    public function create()
    {
        $clasificacions = Clasificacion::pluck('nombre', 'id');
        return view('admin.Pelicula.create',compact('clasificacions') );
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => 'required|unique:peliculas',
            'sinopsis' => 'required',
            'director' => 'required',
            'reparto' => 'required',
            'duracion' => 'required',
            'trailer_url' => 'required'
        ]);

        $pelicula = Pelicula::create($request->all());
            return redirect()->route('admin.Pelicula.index', $pelicula)->with('info', 'Se creo con exito');
    }

  
    public function show(Pelicula $pelicula)
    {
        return view('admin.Pelicula.show' ,compact('pelicula'));
    }

   
    public function edit(Pelicula $pelicula)
    {
        return view('admin.Pelicula.edit' ,compact('pelicula'));
    }


    public function update(Request $request, Pelicula $pelicula)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => "required|unique:peliculas,slug,$pelicula->id",
            'sinopsis' => 'required',
            'director' => 'required',
            'reparto' => 'required',
            'duracion' => 'required',
            'trailer_url' => 'required'
        ]);

        $pelicula->update($request->all());
            return redirect()->route('admin.Pelicula.index', $pelicula)->with('info', 'Se actualizo con exito');
    }

    
    public function destroy(Pelicula $pelicula)
    {
        $pelicula->delete();
        return redirect()->route('admin.Pelicula.index')->with('info', 'Se elimino con exito');
    }
    }

