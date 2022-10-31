<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Beneficio;

class BeneficioController extends Controller
{
   
    public function index()
    {
        $beneficios = Beneficio::all();
        return view('admin.Beneficio.index', compact('beneficios'));
    }


    public function create()
    {
        return view('admin.Beneficio.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => 'required|unique:beneficios',
            'descripcion' => 'required'
        ]);

        $beneficio = Beneficio::create($request->all());
            return redirect()->route('admin.Beneficio.index', $beneficio)->with('info', 'Se creo con exito');
    }

 
    public function show(Beneficio $beneficio)
    {
        return view('admin.Beneficio.show', compact('beneficio'));
    }

  
    public function edit(Beneficio $beneficio)
    {
        return view('admin.Beneficio.edit', compact('beneficio'));
    }

  
    public function update(Request $request, Beneficio $beneficio)
    {
         $request->validate([
            'nombre' => 'required',
            'slug' => "required|unique:beneficios,slug,$beneficio->id",
            'descripcion' => 'required'
        ]);

        $beneficio->update($request->all());
            return redirect()->route('admin.Beneficio.index', $beneficio)->with('info', 'Se actualizo con exito');
    }

   
    public function destroy(Beneficio $beneficio)
    {
        $beneficio->delete();
        return redirect()->route('admin.Beneficio.index')->with('info', 'Se elimino con exito');
    }
}
