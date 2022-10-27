<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Codigo>
 */
class CodigoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $codigo=$this->faker->unique()->sentence();

        return [
            'codigo' => $codigo,
            'slug' => Str::slug($codigo)];
    }
}
