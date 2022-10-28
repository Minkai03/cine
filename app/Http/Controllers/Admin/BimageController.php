<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\B_image;

class BimageController extends Controller
{
    
    public function index()
    {
        $bimages = B_image::all();
        return view('admin.Bimage.index', compact('Bimages'));
    }

   
    public function create()
    {
        return view('admin.Bimage.create');
    }

  
    public function store(Request $request)
    {
        //
    }

   
    public function show(B_image $bimage)
    {
        return view('admin.Bimage.show', compact('Bimage'));
    }

   
    public function edit(B_image $bimage)
    {
        return view('admin.Bimage.show', compact('Bimage'));
    }

   
    public function update(Request $request, B_image $bimage)
    {
        //
    }

 
    public function destroy(B_image $bimage)
    {
        //
    }
}
