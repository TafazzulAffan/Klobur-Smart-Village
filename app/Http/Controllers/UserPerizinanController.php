<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Perizinan;
use Illuminate\Http\Request;

class UserPerizinanController extends Controller
{
    public function index(){
        $sideNews = Berita::latest()->paginate(5);


        return view('user.perizinan.index',compact('sideNews'));
    }


    public function store(Request $request){


        $perizinan = new Perizinan();
        $perizinan->email = $request->email;
        $perizinan->nama = $request->nama;
        $perizinan->nik = $request->nik;
        $perizinan->kk = $request->kk;
        $perizinan->alamat = $request->alamat;
        $perizinan->jenis_kelamin = $request->jenis_kelamin;
        $perizinan->jenis_surat = $request->jenis_surat;
        $perizinan->keperluan_surat = $request->keperluan_surat;
        $perizinan->pesan = $request->pesan;
        $perizinan->jenis_pengambilan = $request->jenis_pengambilan;
        $perizinan->status_surat = $request->status_surat;

        //Berkas KTP
        if($request->hasFile('berkas_ktp')){
            $perizinan->berkas_ktp = $request->file('berkas_ktp');
            $extension = $perizinan->berkas_ktp->getClientOriginalName();
            $fotoName = $extension;
            $perizinan->berkas_ktp->move(storage_path('app/public/berkas_ktp',$request->file('berkas_ktp')->getClientOriginalName()),$fotoName);
            $perizinan->berkas_ktp = $request->file('berkas_ktp')->getClientOriginalName();
        }

        // Berkas KK
        if($request->hasFile('berkas_kk')){
            $perizinan->berkas_kk = $request->file('berkas_kk');
            $extension = $perizinan->berkas_kk->getClientOriginalName();
            $fotoName = $extension;
            $perizinan->berkas_kk->move(storage_path('app/public/berkas_kk',$request->file('berkas_kk')->getClientOriginalName()),$fotoName);
            $perizinan->berkas_kk = $request->file('berkas_kk')->getClientOriginalName();
        }


        // Berkas Lainnya
        if($request->hasFile('berkas_lain')){
            $perizinan->berkas_lain = $request->file('berkas_lain');
            $extension = $perizinan->berkas_lain->getClientOriginalName();
            $fotoName = $extension;
            $perizinan->berkas_lain->move(storage_path('app/public/berkas_lain',$request->file('berkas_lain')->getClientOriginalName()),$fotoName);
            $perizinan->berkas_lain = $request->file('berkas_lain')->getClientOriginalName();
        }

        // dd($perizinan);
        $perizinan->save();

        return redirect()->back()->with('success', 'Pengajuan Surat Berhasil Diajukan');
    }

    public function show(Request $request){
        $sideNews = Berita::latest()->paginate(5);
        $ada = 0;
        if($request->has('search')){
            $perizinan = Perizinan::where('nik','LIKE','%' .$request->search.'%')->get();
            
            if(count($perizinan) > 0){
                $ada = 1;
            }
        }else{
            $perizinan = Perizinan::where('id',0)->get();
            $ada = 1;
        }
        return view('user.perizinan.status',[
            'perizinans' => $perizinan,
            'sideNews' => $sideNews,
            'ada' => $ada
        ])->with('nik_search');
    }


    public function downloadSurat($id){
        $perizinan = Perizinan::where('id',$id)->first();
        $lokasiFile = storage_path("app/public/upload_surat/{$perizinan->upload_surat}");

        return response()->download($lokasiFile);

    }
}
