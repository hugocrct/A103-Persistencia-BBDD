<?php

namespace Database\Factories;

use App\Models\Esdeveniment;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Espai;
use App\Models\Organitzador;
/**
 * @extends Factory<Esdeveniment>
 */
class EsdevenimentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titol' => $this->faker->sentence(3),
            'descripcio' => $this->faker->paragraph(),
            'data_esdeveniment' => $this->faker->dateTimeBetween('now', '+1 year'),
            'preu' => $this->faker->randomFloat(2, 0, 200),
            'actiu' => $this->faker->boolean(80),
            'espai_id' => Espai::inRandomOrder()->first()->id,
            'organitzador_id' => Organitzador::inRandomOrder()->first()->id,
        ];
    }
}
