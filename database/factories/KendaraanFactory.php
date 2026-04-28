<?php

namespace Database\Factories;

use App\Models\Kendaraan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Kendaraan>
 */
class KendaraanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'merek' => fake()->randomElement(['Toyota', 'Honda', 'Suzuki', 'Mitsubishi', 'Daihatsu']),
            'tipe' => fake()->randomElement(['Sedan', 'SUV', 'MPV', 'Hatchback', 'Pick Up']),
            'warna' => fake()->randomElement(['Hitam', 'Putih', 'Merah', 'Silver', 'Biru']),
            'tahun' => fake()->numberBetween(2000, 2024),
            'platnomor' => fake()->bothify('DD #### ??'),
            'bahanbakar' => fake()->randomElement(['Bensin', 'Solar', 'Listrik', 'Hybrid']),
        ];
    }
}