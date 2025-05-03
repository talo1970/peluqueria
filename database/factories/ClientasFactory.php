<?php

namespace Database\Factories;

use App\Models\TipoDocumento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Clientas>
 */
class ClientasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //'id' => $this->faker->uuid(),
            'tipo_documento_id' => TipoDocumento::factory(),
            'numero_documento' => $this->faker->numberBetween(100000000, 999999999),
            'apellido_nombre' => $this->faker->name(),
            'fecha_nacimiento' => $this->faker->date(),
            'direccion' => $this->faker->address(),
            'departamento_piso' => $this->faker->city(),
            'codigo_postal' => $this->faker->postcode(),
            'celular' => $this->faker->e164PhoneNumber(),
            'telefono' => $this->faker->phoneNumber(),
            'telefono_aux' => $this->faker->phoneNumber(),
            'fecha_ingreso' => $this->faker->date(),
            'estado' => $this->faker->boolean(),
            'favorita' => $this->faker->boolean(),
        ];
    }
}
