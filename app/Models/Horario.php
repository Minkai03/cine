<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
      return 'slug';
    }

    protected $guarded = ['id', 'created_at', 'updated_at'];


        //relacion muchos a uno
        public function pelicula(){
            return $this->belongsTo(Pelicula::class);
         }
    
           //relacion muchos a muchos
        public function dias(){
            return $this->belongsToMany(Dia::class, 'dias_id');
         }
}
