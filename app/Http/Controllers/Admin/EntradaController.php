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
        //
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
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
