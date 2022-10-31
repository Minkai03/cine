<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class DiaFactory extends Factory
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
            'slug' => Str::slug($fecha)
        ];
       
    }
}
