<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Perizinan;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
class PerizinanController extends Controller
{

    public function index(Request $request){

        // $perizinan =  Perizinan::latest()->paginate(300);

        //Search Feature
        if($request->has('search')){
            $perizinan = Perizinan::where('nama','LIKE','%' .$request->search.'%')->latest()->paginate(20);
        }else{
            $perizinan = Perizinan::latest()->paginate(500);
        }



          // Total Surat Tercetak
        $totalSurat = Perizinan::where([
            'status_surat' => "Selesai"
        ])->count();


        $suratHariIni = Perizinan::where([
            'status_surat' => "Selesai",
        ])->whereDate('updated_at','=',Carbon::today())->count();

        $suratBulanIni = Perizinan::where('status_surat', 'Selesai')
            ->whereMonth('updated_at', Carbon::now()->month)
            ->count();


        $suratTahunIni = Perizinan::where('status_surat', 'Selesai')
            ->whereYear('updated_at', '=', Carbon::now()->year)
            ->count();




        return view('cms.perizinan.admin', compact('totalSurat','suratHariIni','suratBulanIni','suratTahunIni'),
        [
            'perizinans' => $perizinan,
            'totalSurat' => $totalSurat,
            'suratHariIni' => $suratHariIni,
            'suratBulanIni' => $suratBulanIni,
            'suratTahunIni' => $suratTahunIni,
        ]);
    }
    public function dilihat($id){
        Perizinan::find($id)->update([
            "dilihat" => 1
        ]);


        return redirect()->route("perizinan.index");

        // $latestIzin = $latestIzin->latest('created_at')->paginate(300);
        // return redirect()->route("perizinan.index")->with('latestIzin', $latestIzin);
    }
    public function show_bulan($id){


        $perizinan = Perizinan::where('id',$id)->first();

        return view('cms.perizinan.bulan',[
            'perizinans' => $perizinan,
        ]);
    }
    public function edit($id) {

        $perizinan = Perizinan::find($id);
        // dd($perizinan);
        return view('cms.perizinan.edit',[
            'perizinan' => $perizinan,
        ]);
    }
    public function show($id){

        $perizinan = Perizinan::find($id);

        return view('cms.perizinan.bulan',compact('perizinans'));
    }

    public function update(Request $request){

        // dd($request->all());
        $perizinan = Perizinan::find($request->id);


        if($request->hasFile('upload_surat')){
            $perizinan->upload_surat = $request->file('upload_surat');
            $extension = $perizinan->upload_surat->getClientOriginalName();
            $fotoName = $extension;
            $perizinan->upload_surat->move(storage_path('app/public/upload_surat',$request->file('upload_surat')->getClientOriginalName()),$fotoName);
            $perizinan->upload_surat = $request->file('upload_surat')->getClientOriginalName();
        }

        $perizinan->status_surat = $request->status_surat;
        // dd($perizinan);
        $perizinan->save();

        return redirect()->route('perizinan.index')->with('success','Data Perizinan Berhasil Diupdate');
    }


    public function downloadBerkas_ktp($id){
        $perizinan = Perizinan::where('id',$id)->first();
        $lokasiFile = public_path("/storage/berkas_ktp/{$perizinan->berkas_ktp}");

        return response()->download($lokasiFile);

    }

    public function downloadBerkas_kk($id){
        $perizinan = Perizinan::where('id',$id)->first();
        $lokasiFile = public_path("/storage/berkas_kk/{$perizinan->berkas_kk}");

        return response()->download($lokasiFile);

    }

    public function downloadBerkas_lain($id){
        $perizinan = Perizinan::where('id',$id)->first();
        $lokasiFile = public_path("/storage/berkas_lain/{$perizinan->berkas_lain}");

        return response()->download($lokasiFile);

    }

    public function delete($id, Request $request){
        $perizinan = Perizinan::where('id',$id)->first();

        //berkas ktp
        $file_path = $perizinan->berkas_ktp;
        if (file_exists(storage_path('app/public/berkas_ktp' . $file_path))) {
            unlink(storage_path('app/public/berkas_ktp' . $file_path));
        }


        //berkas kk
        $file_path = $perizinan->berkas_kk;
        if (file_exists(storage_path('app/public/berkas_kk' . $file_path))) {
            unlink(storage_path('app/public/berkas_kk' . $file_path));
        }

        //berkas lain
        $file_path = $perizinan->berkas_ktp;
        if (file_exists(storage_path('app/public/berkas_lain' . $file_path))) {
            unlink(storage_path('app/public/berkas_lain' . $file_path));
        }
        //upload surat
        $file_path = $perizinan->upload_surat;

        if($request->hasFile('upload_surat')) {
            if (file_exists(storage_path('app/public/upload_surat' . $file_path))) {
            unlink(storage_path('app/public/upload_surat' . $file_path));
        }
        }

        // dd($perizinan);
        $perizinan->delete();

        return redirect()->route('perizinan.index')->with('success','Data Perizinan Berhasil Dihapus');

    }

}
