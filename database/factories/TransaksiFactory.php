<?php

namespace Database\Factories;

use App\Models\Kendaraan;
use App\Models\Merek;
use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Transaksi>
 */
class TransaksiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'merek_id' => Merek::inRandomOrder()->first()->id,
             'name' => fake()->name(),
             'tanggal_transaksi' => fake()->date(),
            'durasi' => fake()->numberBetween(1,30),
            'harga' => fake()->numberBetween(100000,5000000),
            'status' => fake()->randomElement(['Pending','Selesai','Dibatalkan' ]),
        ];
    }
}