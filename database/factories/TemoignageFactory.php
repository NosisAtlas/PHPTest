<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Temoignage>
 */
class TemoignageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => fake()->name(),
            'message' => fake()->paragraph(),
            'image' => null,
            // 'image' => fake()->imageUrl(),
            'statut' => fake()->randomElement(['en_attente', 'approuve', 'rejete']),
        ];
    }
}
