<?php

namespace Database\Factories;

use App\Models\Organitzador;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Organitzador>
 */
class OrganitzadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'telefon' => $this->faker->phoneNumber(),
        ];
    }
}
