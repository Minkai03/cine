<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\P_image;
class PimageController extends Controller
{

    public function index()
    {
        $pimages = P_image::all();
        return view('admin.Pimage.index', compact('PimageS'));
    }

    
    public function create()
    {
        return view('admin.Pimage.create');
    }

 
    public function store(Request $request)
    {
        //
    }

  
    public function show(p_image $pimage)
    {
        return view('admin.Pimage.show', compact('Pimage'));
    }

    public function edit(p_image $pimage)
    {
        return view('admin.Pimage.edit', compact('Pimage'));
    }

   
    public function update(Request $request, p_image $pimage)
    {
        //
    }

    public function destroy(p_image $pimage)
    {
        //
    }
}
