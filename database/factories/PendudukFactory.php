<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PendudukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'nik' => $this->faker->unique()->randomFloat(16,[1,2,3,4,5,6,7,8,9,0]),
            'kk' => $this->faker->randomFloat(16),
            'jenis_kelamin' => $this->faker->randomElement(["Laki-Laki","Perempuan"]),
            'tempat_lahir' => $this->faker->city(),
            'tanggal_lahir' => $this->faker->dateTime(),
            'agama_id' => $this->faker->randomElement(['1','2','3','4','5','6','7']),
            'pendidikan_id' => $this->faker->randomElement(['1','2','3','4','5','6','7','8','9','10']),
            'pekerjaan_id' => $this->faker->randomElement(['1','2','3','4','5','6','7','8','9','10','11','12','13']),
            'darah_id' => $this->faker->randomElement(['1','2','3','4','5','6','7','8','9','10']),
            'status_perkawinan_id' => $this->faker->randomElement(['1','2','3','4']),
            'status_hubungan_dalam_keluarga_id' => $this->faker->randomElement(['1','2','3','4','5','6','7','8','9','10']),
            'kewarganegaraan' => $this->faker->randomElement(['1','2']),
            'rtrw' => $this->faker->randomElement(["RT 001/RW 001","RT 002/RW 001","RT 003/RW 002","RT 004/RW 002"]),
            'nik_ayah' => $this->faker->randomFloat(16),
            'nik_ibu' => $this->faker->randomFloat(16),
            'nama_ayah' => $this->faker->name(),
            'nama_ibu'  => $this->faker->name(),
            'alamat' => $this->faker->address()
        ];
    }
}
