<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class P_image extends Model
{
    use HasFactory;

        //uno a uno
        public function pelicula(){
            return $this->hasOne(Pelicula::class);
         }
    
}
