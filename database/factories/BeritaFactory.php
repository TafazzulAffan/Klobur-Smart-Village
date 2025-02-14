<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory
 * <\App\Berita>
 */
class BeritaFactory extends Factory
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
            'kategori' => $this->faker->randomElement(["Pendidikan","Kesehatan","Ekonomi","Hiburan"]),
            'slug' => $this->faker->slug(),
            'konten' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement(["Aktif","Non Aktif"]),
        ];
    }
}
