<?php

namespace Database\Factories;

use App\Models\Hora;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Horario>
 */
class HorarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $fecha=$this->faker->unique()->sentence();

        return [
            'fecha' => $fecha,
            'slug' => Str::slug($fecha),
            'horas_id' => Hora::all()->random()->id
        ];
    }
}
