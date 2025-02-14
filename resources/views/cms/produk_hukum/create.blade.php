@extends('layouts.layout-admin') 
@section('title', 'Tambah Data Produk Hukum')

@section('header')
<h2 class="font-bold text-lg">Tambah Data Produk Hukum</h2>
@endsection

@section('content')
<div class="p-8 shadow-xl">
    <form method="POST" action="{{route('simpan.hukum')}}" enctype="multipart/form-data">
        @csrf
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="judul-hukum" class="block mb-2 text-sm font-medium text-gray-900">Judul Produk Hukum</label>
                <input type="text" name="judul" id="judul-hukum" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5" placeholder="Masukkan Judul Produk Hukum" required>
            </div>
            <div>
                <label for="tahun" class="block mb-2 text-sm font-medium text-gray-900">Tahun</label>
                <select name="tahun" id="tahun" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
                    <option selected>Pilih Tahun Terbit</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                </select>
            </div>
            <div>
                <label for="jenis-hukum" class="block mb-2 text-sm font-medium text-gray-900">Jenis</label>
                <select name="jenis" id="jenis-hukum" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
                    <option selected>Pilih Jenis Produk Hukum</option>
                    <option value="SK Kades">SK Kades</option>
                    <option value="PerDes">PerDes</option>
                </select>
            </div>
            <div>
                <label for="upload-berkas" class="block mb-2 text-sm font-medium text-gray-900">Upload Berkas</label>
                <input type="file" name="upload_berkas" id="upload-berkas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full">
                File yang terupload:
            </div>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
        </div>
    </form>
</div>
@endsection