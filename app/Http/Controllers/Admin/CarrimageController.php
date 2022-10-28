<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carrimage;
class CarrimageController extends Controller
{
   
    public function index()
    {
        $carrimages= Carrimage::all();
        return view('admin.Carrimage.index', compact('Carrimages'));
    }

   
    public function create()
    {
        return view('admin.Carrimage.create');
    }

    public function store(Request $request)
    {
        //
    }

  
    public function show(Carrimage $carrimage)
    {
        return view('admin.Carrimage.show', compact('Carrimage'));
    }

   
    public function edit(Carrimage $carrimage)
    {
        return view('admin.Carrimage.edit', compact('Carrimage'));
    }

   
    public function update(Request $request, Carrimage $carrimage)
    {
        //
    }


    public function destroy(Carrimage $carrimage)
    {
        //
    }
}
