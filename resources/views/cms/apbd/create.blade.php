@extends('layouts.layout-admin') 
@section('title', 'Tambah Data APBDes')

@section('header')
<h2 class="font-bold text-lg">Tambah Data APBDes</h2>
@endsection

@section('content')
<div class="p-8 shadow-xl">
    <form>
        <div class="flex flex-col gap-6 w-3/4 mx-auto">
            <div>
                <label for="tahun" class="block mb-2 text-sm font-medium text-gray-900">Tahun</label>
<<<<<<< HEAD
                <select id="tahun" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-jingga focus:border-jingga block w-full p-2.5">
=======
                <select id="tahun" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
>>>>>>> fix
                    <option selected>Pilih Tahun</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                </select>
            </div> 
            <div>
                <label for="jenis-anggaran" class="block mb-2 text-sm font-medium text-gray-900">Jenis Anggaran</label>
<<<<<<< HEAD
                <select id="jenis-anggaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-jingga focus:border-jingga block w-full p-2.5">
=======
                <select id="jenis-anggaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
>>>>>>> fix
                    <option selected>Pilih Jenis Anggaran</option>
                    <option value="Pendapatan">Pendapatan</option>
                    <option value="Belanja">Belanja</option>
                    <option value="Pembiayaan">Pembiayaan</option>
                </select>
            </div> 
            <div>
                <label for="detail-anggaran" class="block mb-2 text-sm font-medium text-gray-900">Detail Jenis Anggaran</label>
<<<<<<< HEAD
                <select id="detail-anggaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-jingga focus:border-jingga block w-full p-2.5">
=======
                <select id="detail-anggaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
>>>>>>> fix
                    <option selected>Pilih Detail Jenis Anggaran</option>
                    <option value="Hasil Usaha Desa">1.1.1 Hasil Usaha Desa</option>
                    <option value="Hasil Aset Desa">1.1.2 Hasil Aset Desa</option>
                    <option value="Bidang Penyelenggaraan Pemerintahan Desa">2.1 Bidang Penyelenggaraan Pemerintahan Desa</option>
                    <option value="Bidang Pelaksanaan Pembangunan Desa">2.2 Bidang Pelaksanaan Pembangunan Desa</option>
                    <option value="SILPA Tahun Sebelumnya">3.1.1 SILPA Tahun Sebelumnya</option>
                    <option value="Pencairan Dana Cadangan">3.1.2 Pencairan Dana Cadangan</option>
                </select>
            </div>
            <div>
                <label for="anggaran" class="block mb-2 text-sm font-medium text-gray-900">Nilai Anggaran</label>
<<<<<<< HEAD
                <input type="text" id="anggaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-jingga focus:border-jingga block w-full p-2.5" placeholder="Masukkan Nilai Anggaran" required>
=======
                <input type="text" id="anggaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5" placeholder="Masukkan Nilai Anggaran" required>
>>>>>>> fix
                <label for="anggaran" class="block mt-2 text-sm text-gray-900">Masukkan nilai anggaran dalam Rupiah</label>
            </div>
            <div>
                <label for="realisasi" class="block mb-2 text-sm font-medium text-gray-900">Nilai Realisasi</label>
<<<<<<< HEAD
                <input type="text" id="realisasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-jingga focus:border-jingga block w-full p-2.5" placeholder="Masukkan Nilai Realisasi" required>
=======
                <input type="text" id="realisasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5" placeholder="Masukkan Nilai Realisasi" required>
>>>>>>> fix
                <label for="realisasi" class="block mt-2 text-sm text-gray-900">Masukkan nilai realisasi dalam Rupiah</label>
            </div>
            <div>  
                <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
<<<<<<< HEAD
                <textarea id="keterangan" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-jingga focus:border-jingga" placeholder="Masukkan Keterangan"></textarea>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="text-white bg-jingga hover:bg-jingga-600 focus:ring-4 focus:outline-none focus:ring-jingga-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
=======
                <textarea id="keterangan" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green focus:border-green" placeholder="Masukkan Keterangan"></textarea>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="text-white bg-green hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
>>>>>>> fix
            </div>
        </div>
    </form>
</div>
@endsection