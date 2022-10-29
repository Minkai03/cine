<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UsuarioController extends Controller
{
 
    public function index()
    {
        $usuarios = User::all();
        return view('admin.Usuario.index', compact('usuarios'));
    }

    public function create()
    {
        return view('admin.Usuario.create');
    }

    
    public function store(Request $request)
    {
        //
    }

  
    public function show(User $usuario)
    {
        return view('admin.Usuario.show', compact('usuario'));
    }

 
    public function edit(User $usuario)
    {
        return view('admin.Usuario.edit', compact('usuario'));
    }

 
    public function update(Request $request, User $usuario)
    {
        //
    }

 
    public function destroy(User $usuario)
    {
        //
    }
}
