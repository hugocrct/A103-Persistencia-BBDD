<?php

namespace Database\Factories;

use App\Models\Espai;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Espai>
 */
class EspaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->company() . ' Center',
            'aforament' => $this->faker->numberBetween(50, 3000),
            'adreca' => $this->faker->address(),
        ];
    }
}
