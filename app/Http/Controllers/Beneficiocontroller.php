<?php

namespace App\Http\Controllers;

use App\Models\Beneficio;
use Illuminate\Http\Request;

class Beneficiocontroller extends Controller
{
    public function index(){
        $beneficios = Beneficio::all();
        return view('Beneficio.index', compact('beneficios'));
    }
}
