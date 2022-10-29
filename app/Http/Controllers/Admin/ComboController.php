<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Combo;


class ComboController extends Controller
{
 
    public function index()
    {
        $combos = Combo::all();
        return view('admin.Combo.index', compact('combos'));
    }


    public function create()
    {
        return view('admin.Combo.create');
    }

    public function store(Request $request)
    {
        //
    }

   
    public function show(Combo $combo)
    {
        return view('admin.Combo.show', compact('combo'));
    }

 
    public function edit(Combo $combo)
    {
        return view('admin.Combo.edit', compact('combo'));
    }

  
    public function update(Request $request, Combo $combo)
    {
        //
    }

  
    public function destroy($id)
    {
        //
    }
}
