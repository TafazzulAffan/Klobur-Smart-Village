<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Wisata;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(){
        $berita = Berita::latest()->paginate(5);
        // dd($berita);

        return view('user.home.index',[
            'beritas' => $berita,
        ]);
    }
    public function bumdes_index(){

        $sideNews = Berita::latest()->paginate(4);

        return view('user.bumdes.index',compact(
            'sideNews'
        ));
    }
    public function sejdes_index(){

        $sideNews = Berita::latest()->paginate(5);

        return view('user.sejarah_desa.index',compact(
            'sideNews'
        ));
    }

    public function wisata_index(){
        $berita = Berita::latest()->paginate(5);
        $wisatas = Wisata::all();

        return view('user.wisata.index',[
            'sideNews' => $berita,
            'wisatas'  => $wisatas
        ]);
    }

    public function wisata_show($id){
        $berita = Berita::latest()->paginate(5);
        $wisata = Wisata::find($id);
        $shareComponent = \Share::page(
            url()->current(),
            $wisata->judul
        )->facebook()->twitter()->whatsapp();

        return view('user.wisata.show',[
            'sideNews' => $berita,
            'wisata'  => $wisata,
            'shareComponent' => $shareComponent
        ]);
    }

    public function berita_sideNews(){
        $berita = Berita::latest()->paginate(5);

        return view('layouts.components',[
            'beritas' => $berita,
        ]);
    }
    public function show($id){
        $berita = Berita::find($id);

        $shareComponent = Share::page(url()->current())
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()
        ->reddit();

        return view('user.berita_desa.index',[
            'beritas' => $berita,
            'shareComponent' => $shareComponent,
        ]);
    }

}
