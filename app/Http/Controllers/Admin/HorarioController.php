<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dia;
use Illuminate\Http\Request;
use App\Models\Horario;
class HorarioController extends Controller
{
   
    public function index()
    {
        $horarios = Horario::all();
        return view('admin.Horario.index',compact('horarios'));
    }

 
    public function create()
    {
        $dia = Dia::pluck('fecha', 'id');
        return view('admin.Horario.create',compact('dia'));
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'hora' => 'required'
        ]);

        $horario = Horario::create($request->all());
            return redirect()->route('admin.Horario.index', $horario)->with('info', 'Se creo con exito');
    }
    

 
    public function show(Horario $horario)
    {
        return view('admin.Horario.show',compact('horario'));
    }

  
    public function edit(Horario $horario)
    {
        return view('admin.Horario.edit',compact('horario'));
    }

    
    public function update(Request $request, Horario $horario)
    {
        $request->validate([
            'hora' => 'required',
        ]);

        $horario->update($request->all());
            return redirect()->route('admin.Horario.index', $horario)->with('info', 'Se actualizo con exito');
    }

    public function destroy(Horario $horario)
    {
        $horario->delete();
        return redirect()->route('admin.Horario.index')->with('info', 'Se elimino con exito');
    }
}
