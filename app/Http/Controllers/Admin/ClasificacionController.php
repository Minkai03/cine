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
        return view('admin.Clasificacion.index', compact('Clasificacions'));
    }

  
    public function create()
    {
        return view('admin.Clasificacion.crate');
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show(Clasificacion $clasificacion)
    {
        return view('admin.Clasificacion.show', compact('Clasificacion'));
    }

    public function edit(Clasificacion $clasificacion)
    {
        return view('admin.Clasificacion.edit', compact('Clasificacion'));
    }


    public function update(Request $request, Clasificacion $clasificacion)
    {
        //
    }

   
    public function destroy(Clasificacion $clasificacion)
    {
        //
    }
}
