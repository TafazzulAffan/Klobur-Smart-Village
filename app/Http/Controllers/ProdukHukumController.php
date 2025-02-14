<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProdukHukum;

class ProdukHukumController extends Controller
{
    public function index(Request $request){
        $sideNews = Berita::latest()->paginate(4);

        $produkHukum = ProdukHukum::all();
        // dd($berita);

        if($request->has('search')){
            $produkHukum = ProdukHukum::where('jenis','LIKE','%' .$request->search.'%')->paginate(5);
        }else{
            $produkHukum = ProdukHukum::paginate(50);
        }

        return view('user.produk_hukum.index',[
            'sideNews' => $sideNews,
            'produkHukum' => $produkHukum,
        ]);
    }

    public function produkHukum(Request $request)
{
    // $hukum = ProdukHukum::latest()->get();
    
    if ($request->has('search')) {
        $hukum = ProdukHukum::where('judul', 'LIKE', '%' . $request->search . '%');
    } else {
        $hukum = ProdukHukum::query(); // Jika tidak ada pencarian, mulai dari semua data
    }

    $hukum = $hukum->latest()->paginate(300); // Paginasi hasil, Anda bisa menyesuaikannya

    return view('cms.produk_hukum.admin', [
        'hukums' => $hukum,
    ]);
}


    public function tambahHukum()
    {
        return view('cms.produk_hukum.create');
    }

    public function simpanHukum(Request $request)
    {
        $hukum = new ProdukHukum;
        $hukum->judul = $request->judul;
        $hukum->jenis = $request->jenis;
        $hukum->tahun = $request->tahun;

        if($request->hasFile('upload_berkas')){
            $hukum->upload_berkas = $request->file('upload_berkas');
            $extension = $hukum->upload_berkas->getClientOriginalName();
            $fotoName = $extension;
            $hukum->upload_berkas->move(storage_path('app/public/upload_berkas',$request->file('upload_berkas')->getClientOriginalName()),$fotoName);
            $hukum->upload_berkas = $request->file('upload_berkas')->getClientOriginalName();
        }


        $hukum->save();

      return redirect()->route('index.hukum')->with('success','Data Produk Hukum berhasil ditambahkan');
    }

    public function hapusHukum($id,Request $request)
    {
        $hukum = ProdukHukum::where('id',$id)->first();

        // dd($hukum);

        //upload berkas
        $file_path = $hukum->upload_berkas;
        if (file_exists(storage_path('app/public/upload_berkas' . $file_path))) {
            unlink(storage_path('app/public/upload_berkas' . $file_path));
        }



        $hukum->delete();
        return redirect()->route('index.hukum')->with('success','Data Produk Hukum Berhasil Dihapus');

    }

    public function editHukum($id,Request $request)
    {
        $hukum = ProdukHukum::find($id);

        return view('cms.produk_hukum.edit',[
            'hukum' => $hukum,
        ]);
    }

    public function updateHukum(Request $request)
    {
        $hukum = ProdukHukum::find($request->id);
        // $berita = Berita::find($request->id);

        if($request->hasFile('upload_berkas')){
            $hukum->upload_berkas = $request->file('upload_berkas');
            $extension = $hukum->upload_berkas->getClientOriginalName();
            $fotoName = $extension;
            $hukum->upload_berkas->move(storage_path('app/public/upload_berkas',$request->file('upload_berkas')->getClientOriginalName()),$fotoName);
            $hukum->upload_berkas = $request->file('upload_berkas')->getClientOriginalName();
        }

        $hukum->judul = $request->judul;
        $hukum->tahun = $request->tahun;
        $hukum->jenis = $request->jenis;

        $hukum->save();

        return redirect()->route('index.hukum')->with('success','Data Produk Hukum Berhasil Diupdate');
    }
    public function downloadBerkas_hukum($id){
        $hukum = ProdukHukum::where('id',$id)->first();
        $lokasiFile = storage_path("app/public/upload_berkas/{$hukum->upload_berkas}");

        return response()->download($lokasiFile);

    }




}
