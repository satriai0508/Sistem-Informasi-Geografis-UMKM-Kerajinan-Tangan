<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->sentence(2, true),
            'nama_toko' => $this->faker->company(),
            'harga' => $this->faker->numerify('#####'),
            'deskripsi' => $this->faker->sentence(4)
        ];
    }
}
