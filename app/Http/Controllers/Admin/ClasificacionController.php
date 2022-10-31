<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clasificacion;

class ClasificacionController extends Controller
{
   
    public function index()
    {
        $clasificacions = Clasificacion::all();
        return view('admin.Clasificacion.index', compact('clasificacions'));
    }

  
    public function create()
    {
        return view('admin.Clasificacion.create');
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => 'required|unique:clasificacions',
            'descripcion' => 'required'
        ]);

        $clasificacion = Clasificacion::create($request->all());
            return redirect()->route('admin.Clasificacion.index', $clasificacion)->with('info', 'Se creo con exito');
    }
    

    
    public function show(Clasificacion $clasificacion)
    {
        return view('admin.Clasificacion.show', compact('clasificacion'));
    }

    public function edit(Clasificacion $clasificacion)
    {
        return view('admin.Clasificacion.edit', compact('clasificacion'));
    }


    public function update(Request $request, Clasificacion $clasificacion)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => "required|unique:clasificacions,slug,$clasificacion->id",
            'descripcion' => 'required'
        ]);

        $clasificacion->update($request->all());
            return redirect()->route('admin.Clasificacion.index', $clasificacion)->with('info', 'Se actualizo con exito');
    }

   
    public function destroy(Clasificacion $clasificacion)
    {
        $clasificacion->delete();
        return redirect()->route('admin.Clasificacion.index')->with('info', 'Se elimino con exito');
    }
}
