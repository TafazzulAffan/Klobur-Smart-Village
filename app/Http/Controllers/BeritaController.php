<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Desa;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $beritas = Berita::all();

        if ($request->has('search')) {
            $beritas = Berita::where('judul', 'LIKE', '%' . $request->search . '%');
        } else {
            $beritas = Berita::query(); // Jika tidak ada pencarian, mulai dari semua data
        }

        $beritas = $beritas->latest()->paginate(300); // Paginasi hasil, Anda bisa menyesuaikannya

        return view('cms.berita.admin', [
            'beritas' => $beritas,
        ]);
    }

    // public function index()
    // {
    //     $beritas = Berita::latest()->paginate(40);
    //     return view('cms.berita.admin', [
    //         'beritas' => $beritas,
    //     ]);
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $berita = New Berita;
        $berita->judul = $request->judul;

        if($request->hasFile('gambar')){
            $gambar = $request->file('gambar');
            $extension = $gambar->getClientOriginalName();
            $fotoName = $extension;
            $gambar->move(storage_path('app/public/berita',$request->file('gambar')->getClientOriginalName()),$fotoName);
            $berita->gambar = $request->file('gambar')->getClientOriginalName();
        }

        $berita->status = $request->status;
        $berita->kategori = $request->kategori;
        $berita->slug = $request->slug;
        $berita->konten = $request->konten;
        // dd($berita);
        $berita->save();

        return redirect()->route('berita.index')->with('success','Data Berita Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita, $slug)
    {
        $desa = Desa::find(1);
        $beritas = Berita::where('id','!=', $berita->id)->inRandomOrder()->limit(3)->get();
        if ($slug != Str::slug($berita->judul)) {
            return abort(404);
        }
        $berita->update(['dilihat' => $berita->dilihat + 1]);
        return view('berita.show', compact('berita','desa','beritas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::find($id);

        return view('cms.berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $beritum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $berita = Berita::find($request->id);

        if($request->hasFile('gambar')){
            $gambar = $request->file('gambar');
            $extension = $gambar->getClientOriginalName();
            $fotoName = $extension;
            $gambar->move(storage_path('app/public/berita',$request->file('gambar')->getClientOriginalName()),$fotoName);
            $berita->gambar = $request->file('gambar')->getClientOriginalName();
        }

        $berita->judul = $request->judul;
        $berita->status = $request->status;
        $berita->kategori = $request->kategori;
        $berita->slug = $request->slug;
        $berita->konten = $request->konten;

        $berita->save();

        return redirect()->route('berita.index')->with('success','Data Berita Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $beritum
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);
        Storage::delete('/berita/'.$berita->gambar);
        $berita->delete();
        return back()->with('post_deleted','Data Berita Berhasil Dihapus');
    }
}
