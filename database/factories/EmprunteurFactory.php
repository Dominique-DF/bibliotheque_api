<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Emprunteur>
 */
class EmprunteurFactory extends Factory
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
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'date_naissance' => $this->faker->dateTimeBetween('-60 years', '-18 years')->format('Y-m-d'),
            'email' => $this->faker->unique()->safeEmail,
            'telephone' => $this->faker->phoneNumber
        ];
    }
}
