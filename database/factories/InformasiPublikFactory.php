<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\InformasiPublik>
 */
class InformasiPublikFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'judul' => $this->faker->jobTitle(),
            'kategori' => $this->faker->randomElement(["Informasi Setiap Saat","Informasi Berkala"]),
            'tahun' => $this->faker->randomElement(["2015","2016","2017","2018","2019","2020","2021","2022","2023"])
        ];
    }
}
