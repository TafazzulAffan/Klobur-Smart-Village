<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Http\Controllers\Controller;
use App\InformasiPublik;
use Illuminate\Http\Request;

class InformasiPublikController extends Controller
{
    public function index(Request $request){
        $sideNews = Berita::latest()->paginate(4);

        $informasiPublik = InformasiPublik::all();

        if($request->has('search')){
            $informasiPublik = InformasiPublik::where('judul','LIKE','%' .$request->search.'%')->paginate(5);
        }else{
            $informasiPublik = InformasiPublik::paginate(50);
        }

        return view('user.informasi_publik.index',[
            'informasiPublik' => $informasiPublik,
            'sideNews' => $sideNews,
        ]);
    }

    public function informasiPublik(Request $request)
    {
        // $publik = InformasiPublik::all();

        if ($request->has('search')) {
            $publik = InformasiPublik::where('judul', 'LIKE', '%' . $request->search . '%');
        } else {
            $publik = InformasiPublik::query(); // Jika tidak ada pencarian, mulai dari semua data
        }

        $publik = $publik->latest()->paginate(300); // Paginasi hasil, Anda bisa menyesuaikannya

        return view('cms.informasi_publik.admin', [
            'publiks' => $publik,
        ]);
    }


    public function tambahPublik()
    {
        return view('cms.informasi_publik.create');
    }

    public function simpanPublik(Request $request)
    {
        $publik = new InformasiPublik;
        $publik->judul = $request->judul;
        $publik->kategori = $request->kategori;
        $publik->tahun = $request->tahun;
        
        if($request->hasFile('upload_berkas')){
            $publik->upload_berkas = $request->file('upload_berkas');
            $extension = $publik->upload_berkas->getClientOriginalName();
            $fotoName = $extension;
            $publik->upload_berkas->move(storage_path('app/public/upload_berkas_informasi',$request->file('upload_berkas')->getClientOriginalName()),$fotoName);
            $publik->upload_berkas = $request->file('upload_berkas')->getClientOriginalName();
        }


        $publik->save();

        return redirect()->route('index.publik')->with('success','Data Informasi Publik Berhasil Ditambahkan');
    }

    public function editPublik($id,Request $request)
    {
        $publik = InformasiPublik::find($id);
        return view('cms.informasi_publik.edit',[
            'publik' => $publik,
        ]);
    }

    public function updatePublik(Request $request)
    {
        $publik = InformasiPublik::find($request->id);

        if($request->hasFile('upload_berkas')){
            $publik->upload_berkas = $request->file('upload_berkas');
            $extension = $publik->upload_berkas->getClientOriginalName();
            $fotoName = $extension;
            $publik->upload_berkas->move(storage_path('app/public/upload_berkas_informasi',$request->file('upload_berkas')->getClientOriginalName()),$fotoName);
            $publik->upload_berkas = $request->file('upload_berkas')->getClientOriginalName();
        }

        $publik->judul = $request->judul;
        $publik->kategori = $request->kategori;
        $publik->tahun = $request->tahun;
        $publik->save();

        return redirect()->route('index.publik')->with('success','Data Informasi Publik Berhasil Diupdate');
    }

    public function hapusPublik($id,Request $request)
    {
        $publik = InformasiPublik::where('id',$id)->first();
        
        //upload berkas
        $file_path = $publik->upload_berkas;
        if (file_exists(storage_path('app/public/upload_berkas' . $file_path))) {
            unlink(storage_path('app/public/upload_berkas' . $file_path));
        }



        $publik->delete();
        return redirect()->route('index.publik')->with('success','Data Informasi Publik Berhasil Dihapus');

    }
    
    public function downloadBerkas_informasi($id){
        $publik = InformasiPublik::where('id',$id)->first();
        $lokasiFile = storage_path("app/public/upload_berkas/{$publik->upload_berkas}");

        return response()->download($lokasiFile);

    }
}