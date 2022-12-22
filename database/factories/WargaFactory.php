<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Warga>
 */
class WargaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [

            'nik' => $this->faker->nik(),
            'nama' => $this->faker->name(),
            'ttl' => $this->faker->randomDigit(),
            'j_klmn' => $this->faker->randomElement(['L', 'P']),
            'alamat' => $this->faker->streetAddress(),
            'agama' => $this->faker->city(),
            'sts_perkawinan' => $this->faker->randomElement(['S', 'B']),
            'pekerjaan' => $this->faker->jobTitle(),
            'warganegara' => $this->faker->country(),
        ];
    }
}
