<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserClientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1,25),
            'client_id' => $this->faker->numberBetween(1,25),
        ];
    }
}
