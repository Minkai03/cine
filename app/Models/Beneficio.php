<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficio extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'slug', 'descripcion'];
      
     //relacion uno a muchos
     public function entradas(){
        return $this->hasMany(Entrada::class);
     }

          //relacion  uno a uno polimorfica
          public function image(){
            return $this->morphOne(Image::class, 'imageable');
        }
}
