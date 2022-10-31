<?php

namespace Database\Seeders;

use App\Models\Dia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class diaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dia::create([
            'fecha' => 'Lunes',
            'slug' => 'lunes'
        ]);

        Dia::create([
            'fecha' => 'Martes',
            'slug' => 'martes'
        ]);

        Dia::create([
            'fecha' => 'Miercoles',
            'slug' => 'miercoles'
        ]);

        Dia::create([
            'fecha' => 'Jueves',
            'slug' => 'jueves'
        ]);

        Dia::create([
            'fecha' => 'Viernes',
            'slug' => 'viernes'
        ]);

        Dia::create([
            'fecha' => 'Sabado',
            'slug' => 'sabado'
        ]);

        Dia::create([
            'fecha' => 'Domingo',
            'slug' => 'domingo'
        ]);
    }
}
