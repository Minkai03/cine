<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Combo extends Model
{
    use HasFactory;
    public function getRouteKeyName()
    {
      return 'slug';
    }

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //relacion muchos a uno
    public function entrada(){
        return $this->belongsTo(Entrada::class);
     }

      //relacion  uno a uno polimorfica
     public function image(){
    return $this->morphOne(Image::class, 'imageable');
}
}
