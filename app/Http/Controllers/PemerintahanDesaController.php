<?php

namespace App\Http\Controllers;

use App\Desa;
use App\PemerintahanDesa;
use App\PerangkatDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;


class PemerintahanDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $perangkat =  PerangkatDesa::latest()->paginate(300);

        if($request->has('search')){
            $perangkat = PerangkatDesa::where('nama','LIKE','%' .$request->search.'%')->latest()->paginate(20);
        }else{
            $perangkat = PerangkatDesa::latest()->paginate(100);
        }

        return view('cms.perangkat_desa.admin',[
            'perangkat_desa' => $perangkat,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pemerintahan_desa(Request $request)
    {
        $pemerintahan_desa = PemerintahanDesa::orderBy('id','desc')->paginate(12);
        $desa = Desa::find(1);

        if ($request->cari) {
            $pemerintahan_desa = PemerintahanDesa::where('judul','like',"%{$request->cari}%")
            ->orWhere('konten','like',"%{$request->cari}%")
            ->orderBy('id','desc')->paginate(12);
        }

        $pemerintahan_desa->appends($request->only('cari'));
        return view('pemerintahan-desa.pemerintahan-desa', compact('pemerintahan_desa','desa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.perangkat_desa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $perangkat = new PerangkatDesa();
        $perangkat->nama = $request->nama;
        $perangkat->jenis_kelamin = $request->jenis_kelamin;
        $perangkat->status = $request->status;
        $perangkat->jabatan = $request->jabatan;

        if($request->hasFile('foto')){
            $foto = $request->file('foto');
            $extension = $foto->getClientOriginalName();
            $fotoName = $extension;
            $foto->move(storage_path('app/public/perangkatDesa',$request->file('foto')->getClientOriginalName()),$fotoName);
            $perangkat->foto = $request->file('foto')->getClientOriginalName();
        }
        $perangkat->save();



        return redirect()->route('perangkat.index')->with('success','Informasi Perangkat Desa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PemerintahanDesa  $pemerintahan_desa
     * @return \Illuminate\Http\Response
     */
    public function show(PemerintahanDesa $pemerintahan_desa, $slug)
    {
        $desa = Desa::find(1);
        $pemerintahan_desas = PemerintahanDesa::where('id','!=', $pemerintahan_desa->id)->inRandomOrder()->limit(3)->get();
        if ($slug != Str::slug($pemerintahan_desa->judul)) {
            return abort(404);
        }
        $pemerintahan_desa->update(['dilihat' => $pemerintahan_desa->dilihat + 1]);
        return view('pemerintahan-desa.show', compact('pemerintahan_desa','desa','pemerintahan_desas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PemerintahanDesa  $pemerintahan_desa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perangkat = PerangkatDesa::find($id);

        return view('cms.perangkat_desa.edit', compact('perangkat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PemerintahanDesa  $pemerintahan_desa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $perangkat = PerangkatDesa::find($request->id);

        $perangkat->nama = $request->nama;
        $perangkat->jenis_kelamin = $request->jenis_kelamin;
        $perangkat->status = $request->status;
        $perangkat->jabatan = $request->jabatan;

        if($request->hasFile('foto')){
            $foto = $request->file('foto');
            $extension = $foto->getClientOriginalName();
            $fotoName = $extension;
            $foto->move(storage_path('app/public/perangkatDesa',$request->file('foto')->getClientOriginalName()),$fotoName);
            $perangkat->foto = $request->file('foto')->getClientOriginalName();
        }
        $perangkat->save();



        return redirect()->route('perangkat.index')->with('success','Informasi Perangkat Desa Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PemerintahanDesa  $pemerintahan_desa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perangkat = PerangkatDesa::find($id);
        Storage::delete('/perangkatDesa/'.$perangkat->gambar);
        $perangkat->delete();
        return back()->with('post_deleted','Informasi Perangkat Desa Berhasil Dihapus');
    }
}
