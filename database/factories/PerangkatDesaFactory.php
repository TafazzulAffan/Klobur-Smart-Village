<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
class PerangkatDesaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker()->name(),
            'jenis_kelamin' =>$this->faker()->randomElement(["Laki-Laki","Perempuan"]),
            'status' => $this->faker()->randomElement(["Aktif","Non Aktif"]),
            'jabatan' => $this->faker()->randomElement(["Kepala Desa","Sekertaris Desa","Kepala Urusan Keuangan",
                                                        "Kepala Urusan Umum","Kepala Seksi Pemerintahan","Kepala Seksi Pembagungan",
                                                        "Kepala Seksi Pelayanan","Kepala Dusun"])->unique(),
            // 'foto' => $this->faker->image('public/storage/perangkatDesa',650, 490, null, false),

        ];
    }
}
