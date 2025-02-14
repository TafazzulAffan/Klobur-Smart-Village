<?php

namespace Database\Seeders;

use App\Pekerjaan;
use Illuminate\Database\Seeder;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Pekerjaan::create(['nama' => 'BELUM/TIDAK BEKERJA']);
            Pekerjaan::create(['nama' => 'WIRASWASTA']);
            Pekerjaan::create(['nama' => 'PERANGKAT DESA']);
            Pekerjaan::create(['nama' => 'BURUH TANI/KEBUN']);
            Pekerjaan::create(['nama' => 'PETANI/PEKEBUN']);
            Pekerjaan::create(['nama' => 'PEDAGANG']);
            Pekerjaan::create(['nama' => 'PELAJAR/MAHASISWA']);
            Pekerjaan::create(['nama' => 'MENGURUS RUMAH TANGGA']);
            Pekerjaan::create(['nama' => 'PENSIUNAN']);
            Pekerjaan::create(['nama' => 'PNS']);
            Pekerjaan::create(['nama' => 'KARYAWAN BUMN']);
            Pekerjaan::create(['nama' => 'BURUH LEPAS HARIAN']);
            Pekerjaan::create(['nama' => 'GURU']);
    }
}
