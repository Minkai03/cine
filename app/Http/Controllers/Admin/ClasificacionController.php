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
        return view('admin.Clasificacion.crate');
    }

   
    public function store(Request $request)
    {
        //
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
        //
    }

   
    public function destroy(Clasificacion $clasificacion)
    {
        //
    }
}
