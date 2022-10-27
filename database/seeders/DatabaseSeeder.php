<?php

namespace Database\Seeders;
use App\Models\Beneficio;
use App\Models\Butaca;
use App\Models\Clasificacion;
use App\Models\Codigo;
use App\Models\Entrada;
use App\Models\Genero;       
use App\Models\Hora;
use App\Models\Horario;
use App\Models\Sala;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);

        Storage::makeDirectory('public/peliculas');
        Storage::makeDirectory('public/combos');

        Genero::factory(5)->create();
        Hora::factory(4)->create();
       Clasificacion::factory(4)->create();
       Horario::factory(8)->create();
       Butaca::factory(22)->create();
       Codigo::factory(4)->create();
       Beneficio::factory(4)->create();
       $this->call(ComboSeeder::class);
       Sala::factory(4)->create();
       $this->call(PeliculaSeeder::class);
       Entrada::factory(10)->create();
    }
}
