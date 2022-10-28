<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Horario;
class HorarioController extends Controller
{
   
    public function index()
    {
        $horarios = Horario::all();
        return view('admin.Horario.index',compact('Horarios'));
    }

 
    public function create()
    {
        return view('admin.Horario.create');
    }

  
    public function store(Request $request)
    {
        //
    }

 
    public function show(Horario $horario)
    {
        return view('admin.Horario.show',compact('Horario'));
    }

  
    public function edit(Horario $horario)
    {
        return view('admin.Horario.edit',compact('Horario'));
    }

    
    public function update(Request $request, Horario $horario)
    {
        //
    }

    public function destroy(Horario $horario)
    {
        //
    }
}
