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

      //relacion  uno a uno 
     public function c_image(){
    return $this->belongsTo(C_image::class, 'c_images_id');
}
}
