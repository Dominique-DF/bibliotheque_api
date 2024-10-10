<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livre>
 */
class LivreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->faker->locale = 'fr_FR';

        return [
            'titre' => $this->faker->sentence(3),
            'date_publication' => $this->faker->dateTimeBetween('-50 years', '-1 year')->format('Y-m-d'),
            'auteur_id' => \App\Models\Auteur::factory(),
        ];
    }
}
