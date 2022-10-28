<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Promo;
class PromoController extends Controller
{
 
    public function index()
    {
        $promos = Promo::all();
        return view('admin.Promo.index', compact('Promos'));
    }


    public function create()
    {
        return view('admin.Promo.create');
    }

    public function store(Request $request)
    {
        //
    }

   
    public function show(Promo $promo)
    {
        return view('admin.Promo.index', compact('Promo'));
    }

 
    public function edit(Promo $promo)
    {
        return view('admin.Pimage.edit', compact('Pimage'));
    }

  
    public function update(Request $request, Promo $promo)
    {
        //
    }

  
    public function destroy(Promo $promo)
    {
        //
    }
}
