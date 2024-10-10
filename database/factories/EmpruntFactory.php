<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Emprunt>
 */
class EmpruntFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dateEmprunt = $this->faker->dateTimeBetween('-2 years', 'now');
        $dateRetour = $this->faker->optional()->dateTimeBetween($dateEmprunt, 'now');

        return [
            'date_emprunt' => $dateEmprunt->format('Y-m-d'),
            'date_retour' => $dateRetour ? $dateRetour->format('Y-m-d') : null,
            'emprunteur_id' => \App\Models\Emprunteur::factory(),
            'livre_id' => \App\Models\Livre::factory(),
        ];
    }
}
