<?php

namespace Database\Factories;

use App\Models\Dia;
use Illuminate\Database\Eloquent\Factories\Factory;
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
        return [
            'hora' => $this->faker->time(),
            'dias_id' => Dia::all()->random()->id
        ];
    }
}
