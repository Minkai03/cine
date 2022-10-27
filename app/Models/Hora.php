<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hora extends Model
{
    use HasFactory;
          //relacion muchos a uno
          public function horario(){
            return $this->belongsTo(Horario::class);
         }
}
