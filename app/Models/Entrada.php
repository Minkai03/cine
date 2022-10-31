<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
      return 'slug';
    }

    protected $guarded = ['id', 'created_at', 'updated_at'];

     // muchos a uno
     public function user(){
        return $this->belongsTo(User::class, 'users_id');
}

     //uno a muchos
     public function combos(){
        return $this->hasMany(Combo::class, 'combos_id');
}

//muchos a uno
public function beneficio(){
    return $this->belongsTo(Beneficio::class, 'beneficios_id');
}

//muchos a uno
public function pelicula(){
    return $this->belongsTo(Pelicula::class, 'peliculas_id');
}

public function codigo(){
    return $this->hasOne(Codigo::class, 'codigos_id');
 }

}
