<?php

namespace Database\Seeders;

use App\Models\Beneficio;
use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Beneficioseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $beneficios = Beneficio::factory(10)->create();

        foreach($beneficios as $beneficio) 
         Image::factory(1)->create([
             'imageable_id' => $beneficio->id,
             'imageable_type' => Beneficio::class]);
     }
 }
   
