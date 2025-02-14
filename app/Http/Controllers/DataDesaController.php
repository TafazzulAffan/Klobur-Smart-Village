<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Penduduk;
use Illuminate\Http\Request;

class DataDesaController extends Controller
{
    public function index_JenisKelamin()
    {
        $sideNews = Berita::latest()->paginate(5);

        // Hitung total penduduk berdasarkan jenis kelamin
        $totalKelamin = Penduduk::select('jenis_kelamin')->count();

        // Inisialisasi variabel untuk persentase
        $pembulatanLK = 0;
        $pembulatanPR = 0;

        // Cek apakah totalKelamin tidak nol sebelum melakukan perhitungan
        if ($totalKelamin > 0) {
            $lakiLaki = Penduduk::where('jenis_kelamin', "Laki-laki")->count();
            $perempuan = Penduduk::where('jenis_kelamin', "Perempuan")->count();

            // Hitung persentase
            $persenLakilaki = ($lakiLaki / $totalKelamin) * 100;
            $pembulatanLK = round($persenLakilaki, 1);

            $persenPerempuan = ($perempuan / $totalKelamin) * 100;
            $pembulatanPR = round($persenPerempuan, 1);
        } else {
            // Jika tidak ada data, set jumlah ke 0
            $lakiLaki = 0;
            $perempuan = 0;
        }

        $jenisKelamins = [$lakiLaki, $perempuan];

        return view('user.jenis_kelamin.index', [
            'jenisKelamins' => $jenisKelamins,
            'totalKelamin' => $totalKelamin,
            'jumlahLK' => $lakiLaki,
            'jumlahPR' => $perempuan,
            'persenLK' => $pembulatanLK,
            'persenPR' => $pembulatanPR,
            'sideNews' => $sideNews,
        ]);
    }

    public function index_agama()
    {
        $sideNews = Berita::latest()->paginate(5);
        
        // Grafik Agama
        $totalAgama = Penduduk::select('agama_id')->count();

        // Mendefinisikan semua variabel terlebih dahulu agar tidak undefined
        $agamaIslam = $agamaKristen = $agamaKatholik = $agamaHindu = $agamaBudha = $agamaKhonghucu = $agamaLainnya = 0;
        $pembulatanIslam = $pembulatanKristen = $pembulatanKatholik = $pembulatanHindu = $pembulatanBudha = $pembulatanKhonghucu = $pembulatanLainnya = 0;

        if ($totalAgama > 0) {
            // Hitung jumlah data untuk setiap agama
            $agamaIslam = Penduduk::where('agama_id', 1)->count();
            $pembulatanIslam = round(($agamaIslam / $totalAgama) * 100, 1);

            $agamaKristen = Penduduk::where('agama_id', 2)->count();
            $pembulatanKristen = round(($agamaKristen / $totalAgama) * 100, 1);

            $agamaKatholik = Penduduk::where('agama_id', 3)->count();
            $pembulatanKatholik = round(($agamaKatholik / $totalAgama) * 100, 1);

            $agamaHindu = Penduduk::where('agama_id', 4)->count();
            $pembulatanHindu = round(($agamaHindu / $totalAgama) * 100, 1);

            $agamaBudha = Penduduk::where('agama_id', 5)->count();
            $pembulatanBudha = round(($agamaBudha / $totalAgama) * 100, 1);

            $agamaKhonghucu = Penduduk::where('agama_id', 6)->count();
            $pembulatanKhonghucu = round(($agamaKhonghucu / $totalAgama) * 100, 1);

            $agamaLainnya = Penduduk::where('agama_id', 7)->count();
            $pembulatanLainnya = round(($agamaLainnya / $totalAgama) * 100, 1);
        }

        $agamas = [
            $agamaIslam, $agamaKristen, $agamaKatholik, $agamaHindu, 
            $agamaBudha, $agamaKhonghucu, $agamaLainnya
        ];

        return view('user.agama.index', [
            'sideNews' => $sideNews,
            'agamaIslam' => $agamaIslam,
            'agamaKristen' => $agamaKristen,
            'agamaKatholik' => $agamaKatholik,
            'agamaHindu' => $agamaHindu,
            'agamaBudha' => $agamaBudha,
            'agamaKhonghucu' => $agamaKhonghucu,
            'agamaLainnya' => $agamaLainnya,
            'pembulatanIslam' => $pembulatanIslam,
            'pembulatanKristen' => $pembulatanKristen,
            'pembulatanKatholik' => $pembulatanKatholik,
            'pembulatanHindu' => $pembulatanHindu,
            'pembulatanBudha' => $pembulatanBudha,
            'pembulatanKhonghucu' => $pembulatanKhonghucu,
            'pembulatanLainnya' => $pembulatanLainnya,
            'totalAgama' => $totalAgama,
            'grafikAgama' => $agamas,
        ]);
    }

    public function index_Pekerjaan()
    {
        $sideNews = Berita::latest()->paginate(5);

        // Nama Pekerjaan All
        $totalPekerjaan = Penduduk::select('pekerjaan_id')->count();

        // Inisialisasi variabel dengan nilai 0 agar tidak undefined
        $tidakBekerja = $wiraswasta = $perangkatDesa = $buruhTani = $petani = $pedagang = $pelajar = $mengurusRumahTangga = $pensiunan = $pns = $bumn = $buruhHarian = $guru = 0;
        $pembulatanTidakBekerja = $pembulatanWiraswasta = $pembulatanPerangkatDesa = $pembulatanBuruhTani = $pembulatanPetani = $pembulatanPedagang = $pembulatanPelajar = $pembulatanMengurusRumahTangga = $pembulatanPensiunan = $pembulatanPns = $pembulatanBumn = $pembulatanBuruhHarian = $pembulatanGuru = 0;

        if ($totalPekerjaan > 0) {
            // Hitung jumlah data untuk setiap pekerjaan dan persentasenya
            $tidakBekerja = Penduduk::where('pekerjaan_id', 1)->count();
            $pembulatanTidakBekerja = round(($tidakBekerja / $totalPekerjaan) * 100, 1);

            $wiraswasta = Penduduk::where('pekerjaan_id', 2)->count();
            $pembulatanWiraswasta = round(($wiraswasta / $totalPekerjaan) * 100, 1);

            $perangkatDesa = Penduduk::where('pekerjaan_id', 3)->count();
            $pembulatanPerangkatDesa = round(($perangkatDesa / $totalPekerjaan) * 100, 1);

            $buruhTani = Penduduk::where('pekerjaan_id', 4)->count();
            $pembulatanBuruhTani = round(($buruhTani / $totalPekerjaan) * 100, 1);

            $petani = Penduduk::where('pekerjaan_id', 5)->count();
            $pembulatanPetani = round(($petani / $totalPekerjaan) * 100, 1);

            $pedagang = Penduduk::where('pekerjaan_id', 6)->count();
            $pembulatanPedagang = round(($pedagang / $totalPekerjaan) * 100, 1);

            $pelajar = Penduduk::where('pekerjaan_id', 7)->count();
            $pembulatanPelajar = round(($pelajar / $totalPekerjaan) * 100, 1);

            $mengurusRumahTangga = Penduduk::where('pekerjaan_id', 8)->count();
            $pembulatanMengurusRumahTangga = round(($mengurusRumahTangga / $totalPekerjaan) * 100, 1);

            $pensiunan = Penduduk::where('pekerjaan_id', 9)->count();
            $pembulatanPensiunan = round(($pensiunan / $totalPekerjaan) * 100, 1);

            $pns = Penduduk::where('pekerjaan_id', 10)->count();
            $pembulatanPns = round(($pns / $totalPekerjaan) * 100, 1);

            $bumn = Penduduk::where('pekerjaan_id', 11)->count();
            $pembulatanBumn = round(($bumn / $totalPekerjaan) * 100, 1);

            $buruhHarian = Penduduk::where('pekerjaan_id', 12)->count();
            $pembulatanBuruhHarian = round(($buruhHarian / $totalPekerjaan) * 100, 1);

            $guru = Penduduk::where('pekerjaan_id', 13)->count();
            $pembulatanGuru = round(($guru / $totalPekerjaan) * 100, 1);
        }

        $grafikPekerjaan = [
            $tidakBekerja, $wiraswasta, $perangkatDesa, $buruhTani, $petani,
            $pedagang, $pelajar, $mengurusRumahTangga, $pensiunan, $pns, $bumn,
            $buruhHarian, $guru,
        ];

        return view('user.pekerjaan.index', compact(
            'tidakBekerja', 'wiraswasta', 'perangkatDesa', 'buruhTani', 'petani',
            'pedagang', 'pelajar', 'mengurusRumahTangga', 'pensiunan', 'pns',
            'bumn', 'buruhHarian', 'guru',
            'pembulatanTidakBekerja', 'pembulatanWiraswasta', 'pembulatanPerangkatDesa', 'pembulatanBuruhTani',
            'pembulatanPetani', 'pembulatanPedagang', 'pembulatanPelajar', 'pembulatanMengurusRumahTangga',
            'pembulatanPensiunan', 'pembulatanBumn', 'pembulatanPns', 'pembulatanBuruhHarian', 'pembulatanGuru',
            'grafikPekerjaan', 'totalPekerjaan', 'sideNews'
        ));
    }

    public function index_Pendidikan()
    {
        $sideNews = Berita::latest()->paginate(5);

        // Total Penduduk Berpendidikan
        $totalPendidikan = Penduduk::select('pendidikan_id')->count();

        // Inisialisasi variabel dengan nilai 0 untuk mencegah error jika pembagian tidak valid
        $belumSekolah = $sd = $smp = $sma = $diploma = $s1 = $s2 = $s3 = 0;
        $pembulatanBelumSekolah = $pembulatanSd = $pembulatanSmp = $pembulatanSma = $pembulatanDiploma = $pembulatanS1 = $pembulatanS2 = $pembulatanS3 = 0;

        if ($totalPendidikan > 0) {
            // Hitung jumlah data untuk setiap tingkat pendidikan dan persentasenya
            $belumSekolah = Penduduk::where('pendidikan_id', 1)->count();
            $pembulatanBelumSekolah = round(($belumSekolah / $totalPendidikan) * 100, 1);

            $sd = Penduduk::where('pendidikan_id', 3)->count();
            $pembulatanSd = round(($sd / $totalPendidikan) * 100, 1);

            $smp = Penduduk::where('pendidikan_id', 4)->count();
            $pembulatanSmp = round(($smp / $totalPendidikan) * 100, 1);

            $sma = Penduduk::where('pendidikan_id', 5)->count();
            $pembulatanSma = round(($sma / $totalPendidikan) * 100, 1);

            $diploma = Penduduk::where('pendidikan_id', 6)->count();
            $pembulatanDiploma = round(($diploma / $totalPendidikan) * 100, 1);

            $s1 = Penduduk::where('pendidikan_id', 8)->count();
            $pembulatanS1 = round(($s1 / $totalPendidikan) * 100, 1);

            $s2 = Penduduk::where('pendidikan_id', 9)->count();
            $pembulatanS2 = round(($s2 / $totalPendidikan) * 100, 1);

            $s3 = Penduduk::where('pendidikan_id', 10)->count();
            $pembulatanS3 = round(($s3 / $totalPendidikan) * 100, 1);
        }

        // Array Pendidikans
        $pendidikans = [$belumSekolah, $sd, $smp, $sma, $diploma, $s1, $s2, $s3];

        return view('user.pendidikan.index', compact(
            'totalPendidikan', 'belumSekolah', 'sd', 'smp', 'sma',
            'diploma', 's1', 's2', 's3',
            'pembulatanBelumSekolah', 'pembulatanSd', 'pembulatanSmp', 'pembulatanSma',
            'pembulatanDiploma', 'pembulatanS1', 'pembulatanS2', 'pembulatanS3',
            'pendidikans', 'sideNews'
        ));
    }
}