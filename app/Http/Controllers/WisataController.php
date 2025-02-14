<?php

namespace App\Http\Controllers;

use App\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class WisataController extends Controller
{
    /**
     * 
     */
    public function index(Request $request)
    {
        // $wisata = Wisata::all();

        if ($request->has('search')) {
            $wisata = Wisata::where('judul', 'LIKE', '%' . $request->search . '%');
        } else {
            $wisata = Wisata::query(); // Jika tidak ada pencarian, mulai dari semua data
        }

        $wisata = $wisata->latest()->paginate(300); // Paginasi hasil, Anda bisa menyesuaikannya

        return view('cms.wisata.admin', [
            'wisatas' => $wisata,
        ]);
    }


    /**
     * 
     */
    public function create()
    {
         return view('cms.wisata.create',[
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $wisata = new Wisata;

        $wisata->judul = $request->judul;
        $wisata->deskripsi = $request->deskripsi;

        if($request->hasFile('foto')){
            $wisata->foto = $request->file('foto');
            $extension = $wisata->foto->getClientOriginalName();
            $fotoName = $extension;
            $wisata->foto->move(storage_path('app/public/wisata',$request->file('foto')->getClientOriginalName()),$fotoName);
            $wisata->foto = $request->file('foto')->getClientOriginalName();
        }
        $wisata->save();

        return redirect()->route('wisata.index')->with('success','Data Wisata berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Wisata $wisata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id, Wisata $wisata)
    {
        $wisata = Wisata::find($id);
       
        return view('cms.wisata.edit',[
            'wisatas' => $wisata,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wisata $wisata)
    {
        $wisata = Wisata::find($request->id);

        if($request->hasFile('foto')){
            $wisata->foto = $request->file('foto');
            $extension = $wisata->foto->getClientOriginalName();
            $fotoName = $extension;
            $wisata->foto->move(storage_path('app/public/wisata',$request->file('foto')->getClientOriginalName()),$fotoName);
            $wisata->foto = $request->file('foto')->getClientOriginalName();
        }

        $wisata->judul = $request->judul;
        $wisata->deskripsi = $request->deskripsi;
        $wisata->save();

        return redirect()->route('wisata.index')->with('success','Data Wisata Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    
    public function hapus($id)
    {
        $wisata = Wisata::where('id',$id)->first();
        
        //upload berkas
        $file_path = $wisata->foto;
        if (file_exists(storage_path('app/public/wisata' . $file_path))) {
            unlink(storage_path('app/public/wisata' . $file_path));
        }
        $wisata->delete();
        return redirect()->route('wisata.index')->with('success','Data Wisata Berhasil Dihapus');
    }
}
