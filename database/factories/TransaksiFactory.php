<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pengguna_id' => $this->faker->numberBetween($min = 1, $max = 15),
            'barang_id' => $this->faker->numberBetween($min = 1, $max = 50),
            'qty' => $this->faker->numberBetween($min = 1, $max = 5),
        ];
    }
}
