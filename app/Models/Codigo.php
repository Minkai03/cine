<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Codigo extends Model
{
    use HasFactory;
        //relacion uno a uno
        public function entrada(){
            return $this->hasOne(Entrada::class);
         }
}
