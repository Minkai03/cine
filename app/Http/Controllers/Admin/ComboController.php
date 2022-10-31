<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Combo;


class ComboController extends Controller
{
 
    public function index()
    {
        $combos = Combo::all();
        return view('admin.Combo.index', compact('combos'));
    }


    public function create()
    {
        return view('admin.Combo.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => 'required|unique:combos',
            'descripcion' => 'required'
        ]);

        $combo = Combo::create($request->all());
            return redirect()->route('admin.Combo.index', $combo)->with('info', 'Se creo con exito');
    }

   
    public function show(Combo $combo)
    {
        return view('admin.Combo.show', compact('combo'));
    }

 
    public function edit(Combo $combo)
    {
        return view('admin.Combo.edit', compact('combo'));
    }

  
    public function update(Request $request, Combo $combo)
    {
        $request->validate([
            'nombre' => 'required',
            'slug' => "required|unique:combos,slug,$combo->id"
        ]);

        $combo->update($request->all());
            return redirect()->route('admin.Combo.index', $combo)->with('info', 'Se actualizo con exito');
    }

  
    public function destroy(Combo $combo)
    {
        $combo->delete();
        return redirect()->route('admin.Combo.index')->with('info', 'Se elimino con exito');
    }
}
