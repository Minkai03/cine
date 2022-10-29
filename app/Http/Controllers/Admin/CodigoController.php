<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Codigo;

class CodigoController extends Controller
{
   
    public function index()
    {
        $codigos = Codigo::all();
        return view('admin.Codigo.index', compact('codigos'));
    }

 
    public function create()
    {
        return view('admin.Codigo.create');
    }


    public function store(Request $request)
    {
        //
    }

  
    public function show(Codigo $codigo)
    {
        return view('admin.Codigo.show', compact('codigo'));
    }

 
    public function edit(Codigo $codigo)
    {
        return view('admin.Codigo.edit', compact('codigo'));
    }

   
    public function update(Request $request, Codigo $codigo)
    {
        //
    }

    public function destroy(Codigo $codigo)
    {
        //
    }
}
