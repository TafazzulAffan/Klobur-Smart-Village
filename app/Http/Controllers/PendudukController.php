<?php

namespace App\Http\Controllers;

use App\Agama;
use App\Darah;
use App\DetailDusun;
use App\Dusun;
use App\Http\Requests\PendudukRequest;
use App\Pekerjaan;
use App\Pendidikan;
use App\Penduduk;
use App\StatusHubunganDalamKeluarga;
use App\StatusPerkawinan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Routing\RedirectController;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $penduduk = Penduduk::latest()->paginate(10);
        $totalPenduduk = Penduduk::count();
        $totalPendudukLK = Penduduk::where('jenis_kelamin', 'Laki-Laki')->count();
        $totalPendudukPR = Penduduk::where('jenis_kelamin', 'Perempuan')->count();
        // $totalKeluarga = Penduduk::where('status_hubungan_dalam_keluarga_id', 1)->count();
        $totalKeluarga = Penduduk::select('kk')
        ->distinct()
        ->count('kk');

        $cariPenduduk = $penduduk; // Inisialisasi query pencarian

        if ($request->has('search')) {
            $penduduk = Penduduk::where('nama', 'LIKE', '%' . $request->search . '%');
        } else {
            $penduduk = Penduduk::query();
        }

        $penduduk = $penduduk->latest()->paginate(300);

        return view('cms.penduduk.admin', [
            'penduduks' => $penduduk,
            'cariPenduduks' => $cariPenduduk,
            'totalPenduduks' => $totalPenduduk,
            'totalPenduduksLK' => $totalPendudukLK,
            'totalPenduduksPR' => $totalPendudukPR,
            'totalKeluargas' => $totalKeluarga,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('cms.penduduk.create', [
            'agamas'                         => Agama::all(),
            'darahs'                         => Darah::all(),
            'dusuns'                         => Dusun::all(),
            'pekerjaans'                     => Pekerjaan::all(),
            'pendidikans'                    => Pendidikan::all(),
            'pendidikans'                    => Pendidikan::all(),
            'status_hubungan_dalam_keluargas'=> StatusHubunganDalamKeluarga::all(),
            'status_perkawinans'             => StatusPerkawinan::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $penduduk = new Penduduk;
        $penduduk->nik = $request->nik;
        $penduduk->kk  = $request->kk;
        $penduduk->nama = $request->nama;
        $penduduk->jenis_kelamin = $request->jenis_kelamin;
        $penduduk->tempat_lahir = $request->tempat_lahir;
        $penduduk->tanggal_lahir = $request->tanggal_lahir;
        $penduduk->pendidikan_id = $request->pendidikan_id;
        $penduduk->agama_id = $request->agama_id;
        $penduduk->pekerjaan_id = $request->pekerjaan_id;
        $penduduk->darah_id = $request->darah_id;
        $penduduk->status_perkawinan_id = $request->status_perkawinan_id;
        $penduduk->status_hubungan_dalam_keluarga_id = $request->status_hubungan_dalam_keluarga_id;
        $penduduk->kewarganegaraan = $request->kewarganegaraan;
        $penduduk->nama_ayah = $request->nama_ayah;
        $penduduk->nik_ayah = $request->nik_ayah;
        $penduduk->nama_ibu = $request->nama_ibu;
        $penduduk->nik_ibu = $request->nik_ibu;
        $penduduk->alamat = $request->alamat;
        $penduduk->rtrw = $request->rtrw;
        // dd($penduduk);
        $penduduk->save();

        return redirect()->route('penduduk.index')->with('success','Data Penduduk Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function show(Penduduk $penduduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit(Penduduk $penduduk)
    {
        return view('cms.penduduk.edit', [
            'agamas'                         => Agama::all(),
            'darahs'                         => Darah::all(),
            'dusuns'                         => Dusun::all(),
            'pekerjaans'                     => Pekerjaan::all(),
            'pendidikans'                    => Pendidikan::all(),
            'pendidikans'                    => Pendidikan::all(),
            'status_hubungan_dalam_keluargas'=> StatusHubunganDalamKeluarga::all(),
            'status_perkawinans'             => StatusPerkawinan::all(),
            'penduduk'                      => $penduduk,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $penduduk = Penduduk::find($request->id);

        $penduduk->nik = $request->nik;
        $penduduk->kk  = $request->kk;
        $penduduk->nama = $request->nama;
        $penduduk->jenis_kelamin = $request->jenis_kelamin;
        $penduduk->tempat_lahir = $request->tempat_lahir;
        $penduduk->tanggal_lahir = $request->tanggal_lahir;
        $penduduk->pendidikan_id = $request->pendidikan_id;
        $penduduk->agama_id = $request->agama_id;
        $penduduk->pekerjaan_id = $request->pekerjaan_id;
        $penduduk->darah_id = $request->darah_id;
        $penduduk->status_perkawinan_id = $request->status_perkawinan_id;
        $penduduk->status_hubungan_dalam_keluarga_id = $request->status_hubungan_dalam_keluarga_id;
        $penduduk->kewarganegaraan = $request->kewarganegaraan;
        $penduduk->nama_ayah = $request->nama_ayah;
        $penduduk->nik_ayah = $request->nik_ayah;
        $penduduk->nama_ibu = $request->nama_ibu;
        $penduduk->nik_ibu = $request->nik_ibu;
        $penduduk->alamat = $request->alamat;
        $penduduk->rtrw = $request->rtrw;
        // dd($penduduk);
        $penduduk->save();
        return redirect()->route('penduduk.index')->with('success','Data Penduduk Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penduduk = Penduduk::find('id',$id);
        $penduduk->delete();
        return redirect()->route('penduduk.index')->with('post_deleted','Data Penduduk Berhasil Dihapus');
    }

    public function hapus($id){

        Penduduk::where('id', $id)->delete();
        return redirect()->route('penduduk.index')->with('post_deleted','Data Penduduk Berhasil Dihapus');
    }
}
