<?php

namespace Database\Factories;

use App\Models\Sala;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Butaca>
 */
class ButacaFactory extends Factory
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
            'disponible' =>  $this->faker->randomElement([1, 2]),
             'salas_id' => Sala::all()->random()->id
       ];
    }
}
