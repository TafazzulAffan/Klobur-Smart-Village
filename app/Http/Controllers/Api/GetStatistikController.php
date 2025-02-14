<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Penduduk;
use Illuminate\Http\Request;

class GetStatistikController extends Controller
{
    public function getStatistik()
    {
        // Data Agama
        $agama = [
            'labels' => ['Islam', 'Kristen', 'Katholik', 'Hindu', 'Budha', 'Khonghucu', 'Lainnya'],
            'data' => [
                Penduduk::where('agama_id', 1)->count(),
                Penduduk::where('agama_id', 2)->count(),
                Penduduk::where('agama_id', 3)->count(),
                Penduduk::where('agama_id', 4)->count(),
                Penduduk::where('agama_id', 5)->count(),
                Penduduk::where('agama_id', 6)->count(),
                Penduduk::where('agama_id', 7)->count(),
            ]
        ];

        // Data Pendidikan
        $pendidikan = [
            'labels' => ['Belum Sekolah', 'SD', 'SMP', 'SMA', 'D3', 'S1', 'S2', 'S3'],
            'data' => [
                Penduduk::where('pendidikan_id', 1)->count(),
                Penduduk::where('pendidikan_id', 3)->count(),
                Penduduk::where('pendidikan_id', 4)->count(),
                Penduduk::where('pendidikan_id', 5)->count(),
                Penduduk::where('pendidikan_id', 7)->count(),
                Penduduk::where('pendidikan_id', 8)->count(),
                Penduduk::where('pendidikan_id', 9)->count(),
                Penduduk::where('pendidikan_id', 10)->count(),
            ]
        ];

        // Data Perkawinan
        $perkawinan = [
            'labels' => ['Belum Kawin', 'Sudah Kawin', 'Cerai Hidup', 'Cerai Meninggal'],
            'data' => [
                Penduduk::where('status_perkawinan_id', 1)->count(),
                Penduduk::where('status_perkawinan_id', 2)->count(),
                Penduduk::where('status_perkawinan_id', 3)->count(),
                Penduduk::where('status_perkawinan_id', 4)->count(),
            ]
        ];

        // Data Pekerjaan
        $pekerjaan = [
            'labels' => ['Belum Bekerja', 'Wiraswasta', 'Perangkat Desa', 'Buruh Tani', 'Petani', 'Pedagang', 'Pelajar', 'Mengurus Rumah Tangga', 'Pensiunan', 'PNS', 'BUMN', 'Buruh Harian', 'Guru'],
            'data' => [
                Penduduk::where('pekerjaan_id', 1)->count(),
                Penduduk::where('pekerjaan_id', 2)->count(),
                Penduduk::where('pekerjaan_id', 3)->count(),
                Penduduk::where('pekerjaan_id', 4)->count(),
                Penduduk::where('pekerjaan_id', 5)->count(),
                Penduduk::where('pekerjaan_id', 6)->count(),
                Penduduk::where('pekerjaan_id', 7)->count(),
                Penduduk::where('pekerjaan_id', 8)->count(),
                Penduduk::where('pekerjaan_id', 9)->count(),
                Penduduk::where('pekerjaan_id', 10)->count(),
                Penduduk::where('pekerjaan_id', 11)->count(),
                Penduduk::where('pekerjaan_id', 12)->count(),
                Penduduk::where('pekerjaan_id', 13)->count(),
            ]
        ];

        // Mengembalikan response dengan format yang diinginkan
        return response()->json([
            'agama' => $agama,
            'pendidikan' => $pendidikan,
            'perkawinan' => $perkawinan,
            'pekerjaan' => $pekerjaan
        ]);
    }
}
