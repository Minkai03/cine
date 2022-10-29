<?php

namespace Database\Factories;

use App\Models\Clasificacion;
use App\Models\Genero;
use App\Models\Horario;
use App\Models\Image;
use App\Models\Sala;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pelicula>
 */
class PeliculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $nombre=$this->faker->unique()->sentence();

        return [
            'nombre' => $nombre,
            'slug' => Str::slug($nombre),
            'sinopsis' => $this->faker->text(200),
            'director' => $this->faker->text(20),
            'reparto' => $this->faker->text(100),
            'duracion' => $this->faker->time(2),
            'trailer_url' => $this->faker->text(20),
            'salas_id' => Sala::all()->random()->id,
            'generos_id' => Genero::all()->random()->id,
            'clasificacions_id' => Clasificacion::all()->random()->id,
            'horarios_id' => Horario::all()->random()->id
        ];
    }
}
