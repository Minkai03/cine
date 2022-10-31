<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genero;

class GeneroController extends Controller
{
   
    public function index()
    {
        $generos = Genero::all();
        return view('admin.Genero.index', compact('generos'));
    }

 
    public function create()
    {
        return view('admin.Genero.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => 'required|unique:generos'
        ]);

        $genero = Genero::create($request->all());
            return redirect()->route('admin.Genero.index', $genero)->with('info', 'Se creo con exito');
    }


    public function show(Genero $genero)
    {
        return view('admin.Genero.show', compact('genero'));
    }


    public function edit(Genero $genero)
    {
        return view('admin.Genero.edit', compact('genero'));
    }

    public function update(Request $request, Genero $genero)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => "required|unique:generos,slug,$genero->id"
        ]);

        $genero->update($request->all());
            return redirect()->route('admin.Genero.index', $genero)->with('info', 'Se actualizo con exito');
    }


    public function destroy(Genero $genero)
    {
        $genero->delete();
        return redirect()->route('admin.Genero.index')->with('info', 'Se elimino con exito');
    }
}
