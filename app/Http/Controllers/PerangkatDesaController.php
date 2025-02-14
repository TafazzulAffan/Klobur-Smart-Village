<?php

namespace App\Http\Controllers;

use App\Berita;
use App\PerangkatDesa;
use Illuminate\Http\Request;

class PerangkatDesaController extends Controller
{
    public function index(){

        $perangkatDesa = PerangkatDesa::latest()->paginate(9);

        $sideNews = Berita::latest()->paginate(5);
        // dd($kepalaDesa);

        return view('user.perangkat_desa.index',[
            'perangkatDesa' => $perangkatDesa,
            'sideNews' => $sideNews,
        ]);
    }


}
