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
        return view('admin.Sala.index', compact('salas'));
    }


    public function create()
    {
        return view('admin.Sala.create');
    }

  
    public function store(Request $request)
    {
        //
    }

   
    public function show(Sala $sala)
    {
        return view('admin.Sala.show', compact('sala'));
    }

  
    public function edit(Sala $sala)
    {
        return view('admin.Sala.edit', compact('sala'));
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
