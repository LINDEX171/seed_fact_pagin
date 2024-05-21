<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Terrain>
 */
class TerrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'longueur' => $this->faker->numberBetween(1, 100),
            'largeur' => $this->faker->numberBetween(1, 100),
            'titre' => $this->faker->randomElement(['Bail', 'Titre foncier']),
        ];
    }
}
