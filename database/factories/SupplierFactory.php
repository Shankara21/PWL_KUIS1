<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_supplier' => $this->faker->company(),
            'asal' => $this->faker->city(),
            'alamat' => $this->faker->streetAddress(),
            'telepon' => $this->faker->phoneNumber(),
        ];
    }
}
