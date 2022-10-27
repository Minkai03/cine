<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Butaca extends Model
{
    use HasFactory;
       //muchos a uno
       public function sala(){
        return $this->belongsTo(Sala::class);
     }
}
