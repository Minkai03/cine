<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hora;
use Illuminate\Http\Request;

class HoraController extends Controller
{
    public function index()
    {
        $dias = Hora::all();
        return view('admin.Hora.index', compact('dias'));
    }

 
    public function create()
    {
        return view('admin.Hora.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'hora' => 'required'
        ]);

        $hora = Hora::create($request->all());
            return redirect()->route('admin.Hora.index', $hora)->with('info', 'Se creo con exito');
    }


    public function show(Hora $hora)
    {
        return view('admin.Hora.show', compact('genero'));
    }


    public function edit(Hora $hora)
    {
        return view('admin.Hora.edit', compact('hora'));
    }

    public function update(Request $request, Hora $hora)
    {
        $request->validate([
            'hora' => "required|unique:dias,hora,$hora->id"
        ]);

        $hora->update($request->all());
            return redirect()->route('admin.Hora.index', $hora)->with('info', 'Se actualizo con exito');
    }


    public function destroy(Hora $hora)
    {
        $hora->delete();
        return redirect()->route('admin.Hora.index')->with('info', 'Se elimino con exito');
    }
}
