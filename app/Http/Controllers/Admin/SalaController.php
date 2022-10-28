<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sala;
class SalaController extends Controller
{
   
    public function index()
    {
        $salas = Sala::all();
        return view('admin.Pimage.index', compact('Sala'));
    }


    public function create()
    {
        return view('admin.Pimage.create');
    }

  
    public function store(Request $request)
    {
        //
    }

   
    public function show(Sala $sala)
    {
        return view('admin.Pimage.show', compact('Sala'));
    }

  
    public function edit(Sala $sala)
    {
        return view('admin.Pimage.edit', compact('Sala'));
    }

  
    public function update(Request $request, Sala $sala)
    {
        //
    }

   
    public function destroy(Sala $sala)
    {
        //
    }
}
