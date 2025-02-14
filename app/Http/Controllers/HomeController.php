<?php

namespace App\Http\Controllers;

use App\Penduduk;
use App\Perizinan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        $totalPenduduk = Penduduk::all()->count();
        $totalPendudukLK = Penduduk::where([
            'jenis_kelamin' => "Laki-Laki"
        ])->count();
        $totalPendudukPR = Penduduk::where([
            'jenis_kelamin' => "Perempuan"
        ])->count();
        // $totalKeluargas = Penduduk::where('kk',1)->count();
        $totalKeluargas = Penduduk::select('kk')
        ->distinct()
        ->count('kk');

        // Grafik Agama
        $agamaIslam = Penduduk::where([
            'agama_id' => 1,
        ])->count();
        $agamaKristen = Penduduk::where([
            'agama_id' => 2,
        ])->count();
        $agamaKatholik = Penduduk::where([
            'agama_id' => 3,
        ])->count();
        $agamaHindu = Penduduk::where([
            'agama_id' => 4,
        ])->count();
        $agamaBudha = Penduduk::where([
            'agama_id' => 5,
        ])->count();
        $agamaKhonghucu = Penduduk::where([
            'agama_id' => 6,
        ])->count();
        $agamaLainnya = Penduduk::where([
            'agama_id' => 7,
        ])->count();

        $agamas = [$agamaIslam,$agamaKristen,$agamaKatholik,$agamaHindu,$agamaBudha,$agamaKhonghucu,$agamaLainnya];
        // End Grafik Agama

        // Grafik Pendidikan
        $belumSekolah = Penduduk::where([
            'pendidikan_id' => 1,
        ])->count();
        $SD = Penduduk::where([
            'pendidikan_id' => 3,
        ])->count();
        $SMP= Penduduk::where([
            'pendidikan_id' => 4,
        ])->count();
        $SMA = Penduduk::where([
            'pendidikan_id' => 5,
        ])->count();
        $D3 = Penduduk::where([
            'pendidikan_id' => 7,
        ])->count();
        $S1 = Penduduk::where([
            'pendidikan_id' => 8,
        ])->count();
        $S2 = Penduduk::where([
            'pendidikan_id' => 9,
        ])->count();
        $S3 = Penduduk::where([
            'pendidikan_id' => 10,
        ])->count();

        $pendidikans = [$belumSekolah,$SD,$SMP,$SMA,$D3,$S1,$S2,$S3,];
        // End Grafik Pendidikan

        // Grafik Perkawinan
        $belumKawin = Penduduk::where([
            'status_perkawinan_id' => 1,
        ])->count();
        $sudahKawin = Penduduk::where([
            'status_perkawinan_id' => 2,
        ])->count();
        $ceraiHidup = Penduduk::where([
            'status_perkawinan_id' => 3,
        ])->count();
        $ceraiMeninggal = Penduduk::where([
            'status_perkawinan_id' => 4,
        ])->count();

        $perkawinans = [$belumKawin,$sudahKawin,$ceraiHidup,$ceraiMeninggal];
        // End Grafik Perkawinan

        // Grafik Pekerjaan
        $belumBekerja = Penduduk::where([
            'pekerjaan_id' => 1,
        ])->count();
        $wiraswasta = Penduduk::where([
            'pekerjaan_id' => 2,
        ])->count();
        $perangkatDesa = Penduduk::where([
            'pekerjaan_id' => 3,
        ])->count();
        $buruhTani = Penduduk::where([
            'pekerjaan_id' => 4,
        ])->count();
        $petani = Penduduk::where([
            'pekerjaan_id' => 5,
        ])->count();
        $pedagang = Penduduk::where([
            'pekerjaan_id' => 6,
        ])->count();
        $pelajar = Penduduk::where([
            'pekerjaan_id' => 7,
        ])->count();
        $mengurusRumahTangga = Penduduk::where([
            'pekerjaan_id' => 8,
        ])->count();
        $pensiunan = Penduduk::where([
            'pekerjaan_id' => 9,
        ])->count();
        $pns = Penduduk::where([
            'pekerjaan_id' => 10,
        ])->count();
        $bumn = Penduduk::where([
            'pekerjaan_id' => 11,
        ])->count();
        $buruhHarian = Penduduk::where([
            'pekerjaan_id' => 12,
        ])->count();
        $guru = Penduduk::where([
            'pekerjaan_id' => 13,
        ])->count();

        $pekerjaans = [$belumBekerja,$wiraswasta,$perangkatDesa,$buruhTani,$petani,
                    $pedagang,$pelajar,$mengurusRumahTangga,$pensiunan,$pns,$bumn,
                    $buruhHarian,$guru];
        // dd($pekerjaans);
        // End Grafik Pekerjaan

        // Total Surat Tercetak
        $totalSurat = Perizinan::where([
            'status_surat' => "Selesai"
        ])->count();

        $suratHariIni = Perizinan::where([
            'status_surat' => "Selesai",
        ])->whereDate('updated_at','=',Carbon::today())->count();

        $suratBulanIni = Perizinan::where('status_surat', 'Selesai')
            ->whereRaw('MONTH(updated_at) = ?', [Carbon::now()->month])
            // ->whereRaw('YEAR(updated_at) = ?', [Carbon::now()->year])
            ->count();

        $suratTahunIni = Perizinan::where('status_surat', 'Selesai')
            ->whereYear('updated_at', '=', Carbon::now()->year)
            ->count();

        return view('dashboard', compact(
            'totalPenduduk',
            'totalSurat',
            'suratHariIni',
            'suratBulanIni', 
            'suratTahunIni', 
            'totalPendudukLK',
            'totalPendudukPR',
            'totalKeluargas',
            'agamas',
            'pendidikans',
            'perkawinans',
            'pekerjaans',
            ),
            [
            'totalPenduduks' => $totalPenduduk,
            'totalPenduduksLK' => $totalPendudukLK,
            'totalPenduduksPR' => $totalPendudukPR,
            'totalKeluargas'   => $totalKeluargas,
            'agamas' => $agamas,
            'pendidikans' => $pendidikans,
            'perkawinans' => $perkawinans,
            'pekerjaans' => $pekerjaans,
            ]
        );
    }
}
