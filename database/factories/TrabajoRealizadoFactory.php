<?php

namespace Database\Factories;

use App\Models\Clientas;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TrabajoRealizado>
 */
class TrabajoRealizadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'clienta_id' => Clientas::factory(),
            'fecha' => $this->faker->date(),
            'descripcion' => $this->faker->text(),
        ];
    }
}
