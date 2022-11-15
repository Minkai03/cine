<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;


class UsuarioController extends Controller
{
 
    public function index()
    {
        $users = User::all();
        return view('admin.Usuario.index', compact('users'));
    }

    public function create()
    {
        return view('admin.Usuario.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);

        $user = User::create($request->all());
            return redirect()->route('admin.Usuario.index', $user)->with('info', 'Se creo con exito');
    }
    

    
    public function show(User $user)
    {
        return view('admin.Usuario.show', compact('user'));
    }

    public function edit(User $user)
    {
        $roles=Role::all();
        return view('admin.Usuario.edit', compact('user', 'roles'));
    }


    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => "required|unique:users,email,$user->id",
            'password' => 'required'
        ]);
        $user->roles()->sync($request->roles);
        $user->update($request->all());
            return redirect()->route('admin.Usuario.index', $user)->with('info', 'Se actualizo con exito');
    }

   
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.Usuario.index')->with('info', 'Se elimino con exito');
    }
}
