<?php

namespace Database\Factories;

use App\Models\Beneficio;
use App\Models\Codigo;
use App\Models\Combo;
use App\Models\Pelicula;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entrada>
 */
class EntradaFactory extends Factory
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
            'precio' => $this->faker->text(10),
            'peliculas_id' => Pelicula::all()->random()->id,
            'beneficios_id' => Beneficio::all()->random()->id,
            'codigos_id' => Codigo::all()->random()->id,
            'combos_id' => Combo::all()->random()->id,
            'users_id' => User::all()->random()->id
        ];
    }
}
