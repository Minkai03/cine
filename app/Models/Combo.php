<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Combo extends Model
{
    use HasFactory;

    //relacion muchos a uno
    public function entrada(){
        return $this->belongsTo(Entrada::class);
     }

      //relacion  uno a uno polimorfica
     public function image(){
    return $this->morphOne(Image::class, 'imageable');
}
}
