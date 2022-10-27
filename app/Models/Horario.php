<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

        //relacion muchos a uno
        public function pelicula(){
            return $this->belongsTo(Pelicula::class);
         }
    
           //relacion uno a muchos
        public function horas(){
            return $this->hasMany(Hora::class, 'horas_id');
         }
}
