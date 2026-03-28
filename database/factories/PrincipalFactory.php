<?php

namespace Database\Factories;

use App\Models\Principal;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Principal>
 */
class PrincipalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nomCurs' => $this->faker->unique()->words(3, true),
            'tema' => fake()->randomElement(['PHP','Java', 'Python', 'C', 'Javascript']),
            'descripcio' => fake()->paragraph(3),
            'durada_hores' =>fake()->numberBetween(50, 200),
            'nivell'=> fake()->randomElement(['basic','intermedi', 'avancat']),
            'preu'=>fake()->randomFloat(2, 0, 500),
            'data_inici' => fake()->dateTimeBetween('now', '+6 months'),
            'actiu' => fake()->boolean(),
            'modalitat' => fake()->randomElement([
                'Online',
                'Presencial',
                'Hibrid'
            ]),
            'places_maximes'=> fake()->numberBetween(8, 50),
        ];
    }
}
