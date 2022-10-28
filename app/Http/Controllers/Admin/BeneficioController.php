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
        return view('admin.Beneficio.index', compact('Beneficios'));
    }


    public function create()
    {
        return view('admin.Beneficio.create');
    }

    
    public function store(Request $request)
    {
        //
    }

 
    public function show(Beneficio $beneficio)
    {
        return view('admin.Beneficio.show', compact('Beneficio'));
    }

  
    public function edit(Beneficio $beneficio)
    {
        return view('admin.Beneficio.edit', compact('Beneficio'));
    }

  
    public function update(Request $request, Beneficio $beneficio)
    {
        //
    }

   
    public function destroy(Beneficio $beneficio)
    {
        //
    }
}
