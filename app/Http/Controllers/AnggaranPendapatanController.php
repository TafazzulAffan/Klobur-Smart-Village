<?php

namespace App\Http\Controllers;

use App\AnggaranPendapatan;
use App\DetailJenisAnggaran;
use App\JenisAnggaran;
use Illuminate\Http\Request;
use App\AnggaranBelanja;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;
use App\AnggaranPembiayaan; 
class AnggaranPendapatanController extends Controller
{
    public function index(Request $request)
    {
        $anggaranpendp = AnggaranPendapatan::latest()->paginate(1000);
        $anggaranduapendp = AnggaranPendapatan::latest()->paginate(5);
        $anggaranseluruh = AnggaranPendapatan::latest()->paginate(10);
        $anggaranpenlaporan = AnggaranPendapatan::latest()->paginate(10);
        
        $anggaranbel = AnggaranBelanja::latest()->paginate(1000);
        $anggaranduabel = AnggaranBelanja::latest()->paginate(5);
        $anggaranseluruhbel = AnggaranBelanja::latest()->paginate(10);
        $anggaranbelanjalaporan = AnggaranBelanja::latest()->paginate(10);

        $anggaranbiaya = AnggaranPembiayaan::latest()->paginate(1000);
        $anggaranbiayalaporan = AnggaranPembiayaan::latest()->paginate(10);
        $anggaranduabiaya = AnggaranPembiayaan::latest()->paginate(5);
        $anggaranseluruhbiaya = AnggaranPembiayaan::latest()->paginate(10);

        if ($request->has('search')) {
            $searchTerm = $request->input('search');
    
            $anggaranpenlaporan = AnggaranPendapatan::where('tahun', 'LIKE', '%' . $searchTerm . '%')->latest()->paginate(20);
            $anggaranbiayalaporan = AnggaranPembiayaan::where('tahun', 'LIKE', '%' . $searchTerm . '%')->latest()->paginate(20);
            $anggaranbelanjalaporan = AnggaranBelanja::where('tahun', 'LIKE', '%' . $searchTerm . '%')->latest()->paginate(20);
        }

        $jumlahAPend = AnggaranPendapatan::select('nilai_anggaran')->get()->sum('nilai_anggaran');
        $jumlahAPendRea = AnggaranPendapatan::select('nilai_realisasi')->get()->sum('nilai_realisasi');
        $jumlahAPenSel = $jumlahAPend - $jumlahAPendRea;
        $persenPen = ($jumlahAPend > 0) ? ($jumlahAPend - $jumlahAPendRea) / $jumlahAPend : 0;

        $jumlahABel = AnggaranBelanja::select('nilai_anggaran')->get()->sum('nilai_anggaran');
        $jumlahABelRea = AnggaranBelanja::select('nilai_realisasi')->get()->sum('nilai_realisasi');
        $jumlahABelSel = $jumlahABel - $jumlahABelRea;
        $persenBel = ($jumlahABel > 0) ? ($jumlahABel - $jumlahABelRea) / $jumlahABel : 0;

        $jumlahBiaya = AnggaranPembiayaan::select('nilai_anggaran')->get()->sum('nilai_anggaran');
        $jumlahBiayaRea = AnggaranPembiayaan::select('nilai_realisasi')->get()->sum('nilai_realisasi');
        $jumlahBiayaSel = $jumlahBiaya - $jumlahBiayaRea;
        $persenBiaya = ($jumlahBiaya > 0) ? ($jumlahBiaya - $jumlahBiayaRea) / $jumlahBiaya : 0;

        // return dd($jumlahAPend);

        return view('cms.anggaran-realisasi.admin',[
            'anggaran' => $anggaranpendp,
            'anggaranseluruh' => $anggaranseluruh,
            'anggaranduapendpt' =>$anggaranduapendp,
            'persenPen'=>$persenPen,
            'anggaranpenlaporans' => $anggaranpenlaporan,
            'anggaranbelj' =>$anggaranbel,
            'anggaranbelanjalaporans' => $anggaranbelanjalaporan,
            'anggaranseluruhbel' => $anggaranseluruhbel,
            'anggaranduabel' =>$anggaranduabel,
            'persenBel'=> $persenBel,
            'anggaranbiaya' =>$anggaranbiaya,
            'anggaranbiayalaporans' =>$anggaranbiayalaporan,
            'anggaranseluruhbiaya' => $anggaranseluruhbiaya,
            'anggaranduabiaya' =>$anggaranduabiaya,
            'jumlahAPend' =>$jumlahAPend,
            'jumlahAPendRea' =>$jumlahAPendRea,
            'jumlahAnggaranPenSel' =>$jumlahAPenSel,
            'jumlahABel' =>$jumlahABel,
            'jumlahABelRea' =>$jumlahABelRea,
            'jumlahABelSel' =>$jumlahABelSel,
            'jumlahBiaya' =>$jumlahBiaya,
            'persenBiaya'=>$persenBiaya,
            'jumlahBiayaRea' =>$jumlahBiayaRea,
            'jumlahBiayaSel' =>$jumlahBiayaSel,

        ]);
    }
    // public function AnggaranPendapatan(Request $request)
    // {
    //     $anggaranpendp = AnggaranPendapatan::all();
    //     if($request->has('search')){
    //         $anggaranpendp = AnggaranPendapatan::where('judul','LIKE','%' .$request->search.'%')->paginate(5);
    //     }else{
    //         $anggaranpendp = AnggaranPendapatan::paginate(50);
    //     }

    //     return view('cms.anggaran-realisasi.index',[
    //         'anggaran' => $anggaranpendp,
    //     ]);
    // }

    // public function AnggaranBelanja(Request $request)
    // {
    //     $anggaranbel = AnggaranBelanja::all();
    //     if($request->has('search')){
    //         $anggaranbel = AnggaranBelanja::where('judul','LIKE','%' .$request->search.'%')->paginate(5);
    //     }else{
    //         $anggaranbel = AnggaranBelanja::paginate(50);
    //     }

    //     return view('cms.anggaran-realisasi.index',[
    //         'anggaranbelj' => $anggaranbel,
    //     ]);
    // }

    // public function AnggaranPembiayaan(Request $request)
    // {
    //     $anggaranbiaya = AnggaranPembiayaan::all();
    //     if($request->has('search')){
    //         $anggaranbiaya = AnggaranPembiayaan::where('judul','LIKE','%' .$request->search.'%')->paginate(5);
    //     }else{
    //         $anggaranbiaya = AnggaranPembiayaan::paginate(50);
    //     }

    //     return view('cms.anggaran-realisasi.index',[
    //         'anggaranbiaya' => $anggaranbiaya,
    //     ]);
    // }
    public function index_laporan()
    {
        $anggaranpendp = AnggaranPendapatan::latest()->paginate(100);
        $anggaranduapendp = AnggaranPendapatan::latest()->paginate(10);
        $anggaranseluruh = AnggaranPendapatan::all();
        $anggaranbel = AnggaranBelanja::latest()->paginate(100);
        $anggaranduabel = AnggaranBelanja::latest()->paginate(10);
        $anggaranseluruhbel = AnggaranBelanja::all();
        $anggaranbiaya = AnggaranPembiayaan::latest()->paginate(100);
        $anggaranduabiaya = AnggaranPembiayaan::latest()->paginate(10);
        $anggaranseluruhbiaya = AnggaranPembiayaan::all();


        return view('cms.anggaran-realisasi.components.laporan',[
            'anggaran' => $anggaranpendp,
            'anggaranseluruh' => $anggaranseluruh,
            'anggaranduapendpt' =>$anggaranduapendp,
            'anggaranbelj' =>$anggaranbel,
            'anggaranseluruhbel' => $anggaranseluruhbel,
            'anggaranduabel' =>$anggaranduabel,
            'anggaranbiaya' =>$anggaranbiaya,
            'anggaranseluruhbiaya' => $anggaranseluruhbiaya,
            'anggaranduabiaya' =>$anggaranduabiaya,

        ]);
    }


    public function create_pendp()
    {
        return view('cms.anggaran-realisasi.create',[
        ]);
    }
    public function create_bel()
    {
        return view('cms.anggaran-realisasi.createbel',[
        ]);
    }
    public function create_biaya()
    {
        return view('cms.anggaran-realisasi.createbiaya',[
        ]);
    }

    public function cetakPendapatan()
    { 
        $anggaranpendp = AnggaranPendapatan::latest()->paginate(100);
        $anggaranseluruh = AnggaranPendapatan::latest()->paginate(100);
        $jumlahAPend = AnggaranPendapatan::select('nilai_anggaran')->get()->sum('nilai_anggaran');
        $jumlahAPendRea  = AnggaranPendapatan::select('nilai_realisasi')->get()->sum('nilai_realisasi');
        $jumlahAPenSel = $jumlahAPend - $jumlahAPendRea;
        $persenPen = ($jumlahAPend-$jumlahAPendRea)/$jumlahAPend;

        $view1 = view('cms.anggaran-realisasi.cetakPendapatan',[
            'anggaran' => $anggaranpendp,
            'anggaranseluruh' => $anggaranseluruh,
            'jumlahAPend' =>$jumlahAPend,
            'persenPen'=>$persenPen,
            'jumlahAPendRea' =>$jumlahAPendRea,
            'jumlahAnggaranPenSel' =>$jumlahAPenSel,
        ]);
        
        $dompdf = new Dompdf();
        $dompdf->loadHtml($view1);
        $dompdf->render();
        
        // Nama file PDF yang diinginkan
        $nama_file_pdf = 'laporan_pendapatan.pdf';
        
        // Simpan file PDF dengan nama yang diinginkan
        $dompdf->stream($nama_file_pdf);
        
        // Tidak perlu mengembalikan view1 lagi, karena Anda sudah mengirimkan file PDF sebagai respons
        
    }

    public function cetakBelanja()
    {
        $anggaranbel = AnggaranBelanja::latest()->paginate(100);
        $anggaranduabel = AnggaranBelanja::latest()->paginate(100);
        $anggaranseluruhbel = AnggaranBelanja::all();
        $jumlahABel = AnggaranBelanja::select('nilai_anggaran')->get()->sum('nilai_anggaran');
        $jumlahABelRea  = AnggaranBelanja::select('nilai_realisasi')->get()->sum('nilai_realisasi');
        $jumlahABelSel = $jumlahABel - $jumlahABelRea;
        $persenBel = ($jumlahABel-$jumlahABelRea)/$jumlahABel;

        $view2 = view('cms.anggaran-realisasi.cetakBelanja',[
            'anggaranbelj' =>$anggaranbel,
            'anggaranseluruhbel' => $anggaranseluruhbel,
            'anggaranduabel' =>$anggaranduabel,
            'jumlahABel' =>$jumlahABel,
            'jumlahABelRea' =>$jumlahABelRea,
            'persenBel'=> $persenBel,
            'jumlahABelSel' =>$jumlahABelSel,
        ]);
        
        $dompdf = new Dompdf();
        $dompdf->loadHtml($view2);
        $dompdf->render();
        
        // Nama file PDF yang diinginkan
        $nama_file_pdf = 'laporan_belanja.pdf';
        
        // Simpan file PDF dengan nama yang diinginkan
        $dompdf->stream($nama_file_pdf);
    }


    public function cetakBiaya()
    {
        $anggaranbiaya = AnggaranPembiayaan::latest()->paginate(1000);
        $anggaranbiayalaporan = AnggaranPembiayaan::latest()->paginate(10);
        $anggaranseluruhbiaya = AnggaranPembiayaan::latest()->paginate(10);
        $jumlahBiaya = AnggaranPembiayaan::select('nilai_anggaran')->get()->sum('nilai_anggaran');
        $jumlahBiayaRea  = AnggaranPembiayaan::select('nilai_realisasi')->get()->sum('nilai_realisasi');
        $jumlahBiayaSel = $jumlahBiaya - $jumlahBiayaRea;
        $persenBiaya = ($jumlahBiaya-$jumlahBiayaRea)/$jumlahBiaya;

        $view3 = view('cms.anggaran-realisasi.cetakBiaya',[
            'anggaranbiaya' =>$anggaranbiaya,
            'anggaranbiayalaporans' =>$anggaranbiayalaporan,
            'anggaranseluruhbiaya' => $anggaranseluruhbiaya,
            'jumlahBiaya' =>$jumlahBiaya,
            'persenBiaya'=>$persenBiaya,
            'jumlahBiayaRea' =>$jumlahBiayaRea,
            'jumlahBiayaSel' =>$jumlahBiayaSel,
        ]);
        
        $dompdf = new Dompdf();
        $dompdf->loadHtml($view3);
        $dompdf->render();
        
        // Nama file PDF yang diinginkan
        $nama_file_pdf = 'laporan_biaya.pdf';
        
        // Simpan file PDF dengan nama yang diinginkan
        $dompdf->stream($nama_file_pdf);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storePendp(Request $request)
    {
        $anggaranpendp = new AnggaranPendapatan;

        $anggaranpendp->tahun = $request->tahun;
        $anggaranpendp->detail_jenis_anggaran = $request->detail_jenis_anggaran;
        $anggaranpendp->nilai_anggaran = $request->nilai_anggaran;
        $anggaranpendp->nilai_realisasi = $request->nilai_realisasi;
        $anggaranpendp->rincian = $request->rincian;
        $anggaranpendp->save();

        return redirect()->route('anggaran-realisasi.index')->with('success','Anggaran Pendapatan berhasil ditambahkan');
    }
    public function storeBelanja(Request $request)
    {
        $anggaranbel = new AnggaranBelanja;

        $anggaranbel->tahun = $request->tahun;
        $anggaranbel->detail_jenis_anggaran = $request->detail_jenis_anggaran;
        $anggaranbel->nilai_anggaran = $request->nilai_anggaran;
        $anggaranbel->nilai_realisasi = $request->nilai_realisasi;
        $anggaranbel->rincian = $request->rincian;
        $anggaranbel->save();

        return redirect()->route('anggaran-realisasi.index')->with('success','Anggaran Belanja berhasil ditambahkan');
    }
    public function storeBiaya(Request $request)
    {
        $anggaranbiaya = new AnggaranPembiayaan;

        $anggaranbiaya->tahun = $request->tahun;
        $anggaranbiaya->detail_jenis_anggaran = $request->detail_jenis_anggaran;
        $anggaranbiaya->nilai_anggaran = $request->nilai_anggaran;
        $anggaranbiaya->nilai_realisasi = $request->nilai_realisasi;
        $anggaranbiaya->rincian = $request->rincian;
        $anggaranbiaya->save();

        return redirect()->route('anggaran-realisasi.index')->with('success','Anggaran Biaya berhasil ditambahkan');
    }
    /**
     * Display the specified resource.
     */
    // public function show(AnggaranPendapatan $anggaranPendapatan)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit_pendp($id)
    {
        $anggaranpendp = AnggaranPendapatan::find($id);

        return view('cms.anggaran-realisasi.edit',[
            'anggaran' => $anggaranpendp,
        ]);
    }
    public function edit_belj($id)
    {
        $anggaranbel = AnggaranBelanja::find($id);

        return view('cms.anggaran-realisasi.editbel',[
            'anggaranbelj' => $anggaranbel,
        ]);
    }
    public function edit_biaya($id)
    {
        $anggaranbiaya = AnggaranPembiayaan::find($id);

        return view('cms.anggaran-realisasi.editbiaya',[
            'anggaranbiaya' => $anggaranbiaya,
        ]);
    }

    public function update_pendp(Request $request)
    {
        $anggaranpendp = AnggaranPendapatan::find($request->id);
        $anggaranpendp->tahun = $request->tahun;
        $anggaranpendp->detail_jenis_anggaran = $request->detail_jenis_anggaran;
        $anggaranpendp->nilai_anggaran = $request->nilai_anggaran;
        $anggaranpendp->nilai_realisasi = $request->nilai_realisasi;
        $anggaranpendp->rincian = $request->rincian;
        $anggaranpendp->save();
        return redirect()->route('anggaran-realisasi.index')->with('success','Anggaran Pendapatan Berhasil Diupdate');
    }
    public function update_belj(Request $request)
    {
        $anggaranbel = AnggaranBelanja::find($request->id);
        $anggaranbel->tahun = $request->tahun;
        $anggaranbel->detail_jenis_anggaran = $request->detail_jenis_anggaran;
        $anggaranbel->nilai_anggaran = $request->nilai_anggaran;
        $anggaranbel->nilai_realisasi = $request->nilai_realisasi;
        $anggaranbel->rincian = $request->rincian;
        $anggaranbel->save();
        return redirect()->route('anggaran-realisasi.index',[
            'anggaranbelj' => $anggaranbel,
        ])->with('success','Anggaran Belanja Berhasil Diupdate');
    }
    public function update_biaya(Request $request)
    {
        $anggaranbiaya = AnggaranPembiayaan::find($request->id);
        $anggaranbiaya->tahun = $request->tahun;
        $anggaranbiaya->detail_jenis_anggaran = $request->detail_jenis_anggaran;
        $anggaranbiaya->nilai_anggaran = $request->nilai_anggaran;
        $anggaranbiaya->nilai_realisasi = $request->nilai_realisasi;
        $anggaranbiaya->rincian = $request->rincian;
        $anggaranbiaya->save();
        return redirect()->route('anggaran-realisasi.index',[
            'anggaranbiaya' => $anggaranbiaya,
        ])->with('success','Anggaran Biaya Berhasil Diupdate');
    }
    /**
     * Remove the specified resource from storage.
     */

    public function hapus_pendp($id)
    {
       AnggaranPendapatan::where('id', $id)->delete();
        return redirect()->route('anggaran-realisasi.index')->with('post_deleted','Anggaran Pendapatan Berhasil Dihapus');
    }
    public function hapus_belj($id)
    {
        AnggaranBelanja::where('id', $id)->delete();
        return redirect()->route('anggaran-realisasi.index')->with('post_deleted','Anggaran Belanja Berhasil Dihapus');
    }
    public function hapus_biaya($id)
    {
        AnggaranPembiayaan::where('id', $id)->delete();
        return redirect()->route('anggaran-realisasi.index')->with('post_deleted','Anggaran Biaya Berhasil Dihapus');
    }

    public function cetak_pendapatan(){
        $data = AnggaranPendapatan::all();

        $pdf = PDF::stream($data);
        dd($data);
        // return $pdf->download('laporan-AnggaranPendapatan');
    }
}
