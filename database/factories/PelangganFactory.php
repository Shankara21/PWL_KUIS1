<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PelangganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'nama_pelanggan' => $this->faker->name,
                'alamat' => $this->faker->address,
                'telepon' => $this->faker->phoneNumber,
                'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),

        ];
    }
}
