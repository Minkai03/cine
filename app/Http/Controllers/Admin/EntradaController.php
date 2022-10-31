<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Entrada;
use Illuminate\Http\Request;


class EntradaController extends Controller
{
    
    public function index()
    {
        $entradas = Entrada::all();
        return view('admin.Entrada.index', compact('entradas'));
    }

  
    public function create()
    {
        return view('admin.Entrada.create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => 'required|unique:entradas',
            'precio' => 'required'
        ]);

        $entrada = Entrada::create($request->all());
            return redirect()->route('admin.Entrada.index', $entrada)->with('info', 'Se creo con exito');
    }

 
    public function show(Entrada $entrada)
    {
        return view('admin.Entrada.show', compact('entrada'));
    }

 
    public function edit(Entrada $entrada)
    {
        return view('admin.Entrada.edit', compact('entrada'));
    }

    
    public function update(Request $request, Entrada $entrada)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => "required|unique:entradas,slug,$entrada->id",
            'precio' => 'required'
        ]);

        $entrada->update($request->all());
            return redirect()->route('admin.Entrada.index', $entrada)->with('info', 'Se actualizo con exito');
    }

  
    public function destroy(Entrada $entrada)
    {
        $entrada->delete();
        return redirect()->route('admin.Entrada.index')->with('info', 'Se elimino con exito');
    }
}
