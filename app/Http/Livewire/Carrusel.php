<?php

namespace App\Http\Livewire;

use App\Models\Carrousel;
use Livewire\Component;

class Carrusel extends Component
{
    public function render()
    {
        $carrousels = Carrousel::where('url')->get();
        return view('livewire.carrusel', compact('carrousels'));
    }
}
