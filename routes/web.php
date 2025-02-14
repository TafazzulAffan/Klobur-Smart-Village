<?php

use App\Http\Controllers\AdminBumdesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\InformasiPublikController;
use App\Http\Controllers\PemerintahanDesaController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\PerizinanController;
use App\Http\Controllers\UserPerizinanController;
use App\Http\Controllers\ProdukHukumController;
use App\Http\Controllers\PerizinanPertahunController;

use App\Http\Controllers\WisataController;
use App\Http\Controllers\AnggaranPendapatanController;
use App\Http\Controllers\ApbdesController;
use App\Http\Controllers\Api\AgamaController;
use App\Http\Controllers\Api\GetStatistikController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BumdesController;
use App\Http\Controllers\DataDesaController;
use App\Http\Controllers\PerangkatDesaController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/login', function() {
    return view('cms.home.login');
})->name('ppko.login');
Route::post('/login', [AuthController::class, 'masuk'])->name('masuk');


Route::get('/', [BerandaController::class, 'index'])->name('beranda.index');

// Profil - Public Route
Route::get('/perangkat-desa', [PerangkatDesaController::class, 'index']);
Route::get('/sejarah-desa', [BerandaController::class, 'sejdes_index']);
Route::get('/wisata-desa', [BerandaController::class, 'wisata_index']);
Route::get('/wisata-desa/{id}', [BerandaController::class, 'wisata_show']);

// Data - Public Route
Route::get('/jenis-kelamin', [DataDesaController::class, 'index_JenisKelamin']);
Route::get('/agama', [DataDesaController::class, 'index_Agama']);
Route::get('/pekerjaan', [DataDesaController::class, 'index_Pekerjaan']);
Route::get('/pendidikan', [DataDesaController::class, 'index_Pendidikan']);
Route::get('/warga-negara', function () {
    return view('user.warga_negara.index');
});

// Layanan - Public Route
Route::get('/user-perizinan-online', [UserPerizinanController::class, 'index'])->name('userperizinan.index');
Route::post('/user-perizinan-online', [UserPerizinanController::class, 'store'])->name('userperizinan.store');
Route::get('/user-status-perizinan', [UserPerizinanController::class, 'show'])->name('userperizinan.show');

Route::get('/bumdes', [BerandaController::class, 'bumdes_index'])->name('bumdes.index');
Route::get('/produk-hukum', [ProdukHukumController::class, 'index']);
Route::get('/informasi-publik', [InformasiPublikController::class, 'index']);

// Admin
Route::get('/admin', function (){
  return redirect()->route('ppko.login');
});
Route::post('/admin', 'AuthController@masuk')->name('masuk');

Route::group(['middleware' => ['web', 'guest']], function () {

});

// Auth
Route::group(['middleware' => ['web', 'auth']], function () {
    // Route::get('/', 'HomeController@dashboard')->name('home.index');
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
    Route::post('/keluar', 'AuthController@keluar')->name('keluar');
    Route::get('/pengaturan', 'UserController@pengaturan')->name('pengaturan');
    Route::get('/profil', 'UserController@profil')->name('profil');
    Route::patch('/update-pengaturan/{user}', 'UserController@updatePengaturan')->name('update-pengaturan');
    Route::patch('/update-profil/{user}', 'UserController@updateProfil')->name('update-profil');



    // Routes Penduduk
    Route::resource('penduduk', PendudukController::class);
    Route::post('/penduduk/post',[PendudukController::class,'update'])->name('update.penduduk');
    Route::get('/hapus-penduduk/{id}',[PendudukController::class,'hapus'])->name('hapus.penduduk');
    // End Routes Penduduk

    // Routes Produk Hukum
    Route::get('/kelola-hukum', [ProdukHukumController::class,'produkHukum'])->name('index.hukum');
    Route::get('/tambah-hukum', [ProdukHukumController::class,'tambahHukum']);
    Route::post('/tambah-hukum', [ProdukHukumController::class,'simpanHukum'])->name('simpan.hukum');
    Route::post('/update-hukum', [ProdukHukumController::class,'updateHukum'])->name('update.hukum');
    Route::get('/hapus-hukum/{id}', [ProdukHukumController::class,'hapusHukum']);
    Route::get('/edit-hukum/{id}/edit', [ProdukHukumController::class,'editHukum'])->name('edit.hukum');
    Route::get('/download-hukum/{id}',[ProdukHukumController::class,'downloadBerkas_hukum']);
    // End Routes Produk Hukum

    // Route Informasi-Publik
    Route::get('/kelola-publik', [InformasiPublikController::class,'informasiPublik'])->name('index.publik');
    Route::get('/tambah-publik', [InformasiPublikController::class,'tambahPublik']);
    Route::post('/tambah-publik', [InformasiPublikController::class,'simpanPublik'])->name('simpan.publik');
    Route::get('/edit-publik/{id}/edit', [InformasiPublikController::class,'editPublik'])->name('edit.publik');
    Route::post('/update-publik', [InformasiPublikController::class,'updatePublik'])->name('update.publik');
    Route::get('/hapus-publik/{id}', [InformasiPublikController::class,'hapusPublik']);
    Route::get('/download-publik/{id}',[InformasiPublikController::class,'downloadBerkas_informasi']);
    // End Route Informasi-Publik

    // Wisata
    Route::get('/wisata', [WisataController::class, 'index'])->name('wisata.index');
    Route::get('/tambah-wisata', 'WisataController@create')->name('wisata.create');
    Route::post('/tambah-wisata', [WisataController::class,'store'])->name('wisata.store');
    Route::get('/hapus-wisata/{id}',[WisataController::class,'hapus'])->name('hapus.wisata');
    Route::get('/tambah-wisata/{id}/edit',[WisataController::class,'edit'])->name('edit.wisata');
    Route::post('/update-wisata',[WisataController::class,'update'])->name('wisata.update');


    // Routes Berita
    Route::get('/kelola-berita', [BeritaController::class,'index'])->name('berita.index');
    Route::get('/tambah-berita', [BeritaController::class,'create'])->name('berita.create');
    Route::get('/edit-berita/{id}/edit', [BeritaController::class,'edit'])->name('berita.edit');
    Route::post('/tambah-berita',[BeritaController::class,'store'])->name('berita.simpan');
    Route::get('/hapus-berita/{id}',[BeritaController::class,'destroy']);
    Route::post('/update-berita',[BeritaController::class,'update'])->name('berita.update');
    // End Routes Berita


    // Route Kelola-Perangkat
    Route::get('/kelola-perangkat',[PemerintahanDesaController::class,'index'])->name('perangkat.index');
    Route::get('/tambah-perangkat', [PemerintahanDesaController::class,'create'])->name('perangkat.create');
    Route::post('/tambah-perangkat',[PemerintahanDesaController::class,'store'])->name('perangkat.store');
    Route::post('/update-perangkat',[PemerintahanDesaController::class,'update'])->name('perangkat.update');
    Route::get('/edit-perangkat/{id}/edit',[PemerintahanDesaController::class,'edit'])->name('perangkat.edit');
    Route::get('/delete-perangkat/{id}',[PemerintahanDesaController::class,'destroy'])->name('perangkat.delete');
    // End Route Kelola-Perangkat

    // Route Layanan Public
    // Perizinan Online
    Route::get('/perizinan-online',[PerizinanController::class,'index'])->name('perizinan.index');
    Route::get('/perizinan-online/{id}',[PerizinanController::class,'dilihat'])->name('perizinan.dilihat');
    Route::get('/perizinan-online/{id}/edit',[PerizinanController::class,'edit']);
    Route::post('/update-perizinan',[PerizinanController::class,'update'])->name('perizinan.update');
    Route::get('/delete-perizinan/{id}',[PerizinanController::class,'delete']);


    Route::get('/download-ktp/{id}',[PerizinanController::class,'downloadBerkas_ktp']);
    Route::get('/download-kk/{id}',[PerizinanController::class,'downloadBerkas_kk']);
    Route::get('/download-pendukung/{id}',[PerizinanController::class,'downloadBerkas_lain']);


    Route::get('/perizinan-perbulan/{id}', [PerizinanController::class,'show_bulan'])->name('perizinan.bulan');

    Route::get('/kelola-bumdes', [AdminBumdesController::class, 'index'])->name('bumdes.admin');
    Route::get('/tambah-bumdes', [AdminBumdesController::class, 'create'])->name('bumdes.create');
    Route::post('/simpan-bumdes', [AdminBumdesController::class, 'store'])->name('bumdes.store');
    // Route::get('/kelola-apbdes', function(){
    //   return view('cms.bumdes.admin');
    // });
  //  Apbd Pendp
    Route::get('/anggaran', [AnggaranPendapatanController::class,'index'])->name('anggaran-realisasi.index');
    Route::get('/tambah-pendapatan', 'AnggaranPendapatanController@create_pendp')->name('anggaran-realisasi.create');
    Route::post('/tambah-pendapatan', [AnggaranPendapatanController::class,'storePendp'])->name('store.pendp');
    Route::get('/tambah-pendapatan/{id}/edit', [AnggaranPendapatanController::class,'edit_pendp'])->name('anggaran-realisasi.edit');
    Route::post('/tambah-pendapatan/update', [AnggaranPendapatanController::class,'update_pendp'])->name('update_pendp');
    // Route::get('/cetak-anggaranPendapatan', [AnggaranPendapatanController::class,'cetak_pendapatan']);
    Route::get('/cetakPendapatan', [AnggaranPendapatanController::class,'cetakPendapatan']);
    Route::get('/cetakBelanja', [AnggaranPendapatanController::class,'cetakBelanja']);
    Route::get('/cetakBiaya', [AnggaranPendapatanController::class,'cetakBiaya']);

 // Apbd Belj
    Route::get('/tambah-belanja', 'AnggaranPendapatanController@create_bel')->name('anggaran-realisasi.createbel');
    Route::post('/tambah-belanja', [AnggaranPendapatanController::class,'storeBelanja'])->name('store.belanja');
    Route::get('/tambah-belanja/{id}/edit', 'AnggaranPendapatanController@edit_belj')->name('anggaran-realisasi.editbel');
    Route::post('/tambah-belanja-update', [AnggaranPendapatanController::class,'update_belj'])->name('update_belj');
    
    // Apbd Biaya
    Route::get('/tambah-pembiayaan', 'AnggaranPendapatanController@create_biaya')->name('anggaran-realisasi.createbiaya');
    Route::post('/tambah-pembiayaan', [AnggaranPendapatanController::class,'storeBiaya'])->name('store.biaya');
    Route::get('/tambah-pembiayaan/{id}/edit', 'AnggaranPendapatanController@edit_biaya')->name('anggaran-realisasi.editbiaya');
    Route::post('/tambah-pembiayaan-update', [AnggaranPendapatanController::class,'update_biaya'])->name('update_biaya');
 
  // Apbd Hapus
    Route::get('/hapus-pendp/{id}',[AnggaranPendapatanController::class,'hapus_pendp']);
    Route::get('/hapus-belj/{id}',[AnggaranPendapatanController::class,'hapus_belj']);
    Route::get('/hapus-biaya/{id}',[AnggaranPendapatanController::class,'hapus_biaya']);

    Route::get('/filter',[AnggaranPendapatanController::class, 'filter']);


});

// CMS Panduan Start
Route::get('/panduan', function(){
    return view('cms.panduan.admin');
});
// CMS Panduan End


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// API
Route::get('/statistik', [GetStatistikController::class, 'getStatistik']);