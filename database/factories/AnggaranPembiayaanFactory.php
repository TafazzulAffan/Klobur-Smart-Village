<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\AnggaranPembiayaan>
 */
class AnggaranPembiayaanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tahun' => $this->faker->randomElement([2020,2021,2022,2023]),
            'detail_jenis_anggaran' => $this->faker->randomElement(["Hasil Usaha Desa","Hasil Aset Desa","Bidang Penyelenggaraan Desa",
                                                                    "Bidang Pelaksanaan Pembagungan Desa","SILPA Tahun Sebelumnya",
                                                                "Pencairan Dana Cadangan"]),
            'nilai_anggaran' => $this->faker->numberBetween(1000,10000),
            'nilai_realisasi' => $this->faker->numberBetween(1000,10000),
            'rincian' => $this->faker->slug(),
        ];
    }
}
