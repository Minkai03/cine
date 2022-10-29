<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    
    public function index()
    {
        $images = Image::all();
        return view('admin.Image.index', compact('images'));
    }

   
    public function create()
    {
        return view('admin.Image.create');
    }

  
    public function store(Request $request)
    {
        //
    }

   
    public function show(Image $image)
    {
        return view('admin.Image.show', compact('image'));
    }

   
    public function edit(Image $image)
    {
        return view('admin.Image.show', compact('image'));
    }

   
    public function update(Request $request, Image $image)
    {
        //
    }

 
    public function destroy(Image $image)
    {
        //
    }
}
