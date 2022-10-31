<?php

namespace Database\Seeders;
use App\Models\Butaca;
use App\Models\Codigo;
use App\Models\Entrada;    
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

        Storage::makeDirectory('public/image');

        $this->call(diaseeder::class);
        $this->call(GeneroSeeder::class);
        $this->call(ClasificacionSeeder::class);
        $this->call(HorarioSeeder::class);
        Sala::factory(2)->create();
       Butaca::factory(22)->create();
       Codigo::factory(4)->create();
       $this->call(BeneficioSeeder::class);
       $this->call(ComboSeeder::class);
       $this->call(PeliculaSeeder::class);
       Entrada::factory(10)->create();
    }
}
