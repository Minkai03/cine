<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Genero;

class GeneroController extends Controller
{
   
    public function index()
    {
        $generos = Genero::all();
        return view('admin.Genero.index', compact('generos'));
    }

 
    public function create()
    {
        return view('admin.Genero.create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Genero $genero)
    {
        return view('admin.Genero.show', compact('genero'));
    }


    public function edit(Genero $genero)
    {
        return view('admin.Genero.edit', compact('genero'));
    }

    public function update(Request $request, Genero $genero)
    {
        //
    }


    public function destroy(Genero $genero)
    {
        //
    }
}
