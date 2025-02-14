<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Perizinan>
 */
class PerizinanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $start_date = $this->faker->dateTimeBetween('-12 months', '+12 months');
        return [
            'email' => $this->faker->unique()->safeEmail,
            'nama' => $this->faker->name(),
            'nik' => $this->faker->randomFloat(16),
            'kk' => $this->faker->randomFloat(16),
            'jenis_kelamin' => $this->faker->randomElement(["Laki-Laki","Perempuan"]),
            'alamat' => $this->faker->address(),
            'jenis_surat' => $this->faker->randomElement(["SKTM","SKCK","KK"]),
            'keperluan_surat' => $this->faker->slug(),
            'pesan' => $this->faker->slug(),
            'jenis_pengambilan' => $this->faker->randomElement(["Online","Offline"]),
            'status_surat' => $this->faker->randomElement(["Proses","Selesai"]),
            'created_at' => $this->faker->dateTimeBetween(
                $start_date->format('Y-m-d H:i:s').' +3 days',
                $start_date->format('Y-m-d H:i:s').' +3 days'
            )->format('Y-m-d H:i:s'),
            'updated_at' => $this->faker->dateTimeBetween(
                $start_date->format('Y-m-d H:i:s').' +3 days',
                $start_date->format('Y-m-d H:i:s').' +3 days'
            )->format('Y-m-d H:i:s'),
        ];
    }
}
