<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'azienda' => fake()->company,
            'stazione_di_partenza' => fake()->city,
            'stazione_di_arrivo' => fake()->city,
            'orario_di_partenza' => fake()->time('H:i'),
            'orario_di_arrivo' => fake()->time('H:i'),
            'codice_treno' => fake()->numberBetween(10000, 99999),
            'numero_carrozze' => fake()->randomDigitNotNull,
            'in_orario' => fake()->boolean(),
            'cancellato' => fake()->boolean(),
        ];
    }
}
