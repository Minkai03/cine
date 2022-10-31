<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;

    
          //uno a muchos
          public function butacas(){
            return $this->hasMany(Butaca::class);
         }
    
         //relacion uno a uno
        public function pelicula(){
            return $this->hasOne(Pelicula::class);
         }
}
