<?php

namespace Database\Seeders;

use App\AnggaranBelanja;
use App\AnggaranPembiayaan;
use App\AnggaranPendapatan;
use Illuminate\Database\Seeder;
use App\Penduduk;
use App\PerangkatDesa;
use App\Berita;
use App\InformasiPublik;
use App\ProdukHukum;
use App\Wisata;
use App\Perizinan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(DesaSeeder::class);
        $this->call(AgamaSeeder::class);
        $this->call(DarahSeeder::class);
        $this->call(PekerjaanSeeder::class);
        $this->call(PendidikanSeeder::class);
        $this->call(StatusHubunganDalamKeluargaSeeder::class);
        $this->call(StatusPerkawinanSeeder::class);
        $this->call(JenisAnggaranSeeder::class);
        $this->call(KelompokJenisAnggaranSeeder::class);
        $this->call(DetailJenisAnggaranSeeder::class);


        // factory clear
        Penduduk::factory(10)->create();
        // Berita::factory(5)->create();
        // AnggaranBelanja::factory(5)->create();
        // AnggaranPembiayaan::factory(5)->create();
        // AnggaranPendapatan::factory(5)->create();
        // Wisata::factory(5)->create();
        // ProdukHukum::factory(10)->create();
        // InformasiPublik::factory(10)->create();
        // Perizinan::factory(50)->create();



        // Factory Belum clear
        // PerangkatDesa::factory(8)->create();

    }
}
