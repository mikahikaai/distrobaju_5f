<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_barang' => $this->faker->word(),
            'jenis_barang' => $this->faker->randomElement(['Baju', 'Celana', 'Topi', 'Sepatu']),
            'harga_barang' => $this->faker->numberBetween($min = 100, $max = 5000)*500,
        ];
    }
}
