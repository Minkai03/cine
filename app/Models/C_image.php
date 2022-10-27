<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class C_image extends Model
{
    use HasFactory;
       //uno a uno
       public function combo(){
        return $this->hasOne(Combo::class);
     }
}
