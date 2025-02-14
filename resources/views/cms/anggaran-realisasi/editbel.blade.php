@extends('layouts.layout-admin') 
@section('title', 'Tambah Data APBDes')

@section('header')
<h2 class="font-bold text-lg">Edit Data APBDes Belanja</h2>
@endsection

@section('content')
<div class="p-8 shadow-xl">
    <form action="{{ route('update_belj') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col gap-6 w-3/4 mx-auto">
            <input type="hidden" name="id" value="{{old('id', $anggaranbelj->id)}}"/>
            <div>
                <label for="tahun" class="block mb-2 text-sm font-medium text-gray-900">Tahun</label>
                <select name="tahun" id="tahun" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
                    <option selected value="{{ old('tahun', $anggaranbelj->tahun) }}">{{$anggaranbelj->tahun}}</option>
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
                <label for="detail-anggaran" class="block mb-2 text-sm font-medium text-gray-900">Detail Jenis Anggaran</label>
                <select name="detail_jenis_anggaran" id="detail-anggaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
                    <option selected value="{{ old('detail_jenis_anggaran', $anggaranbelj->detail_jenis_anggaran) }}" >{{$anggaranbelj->detail_jenis_anggaran}}</option>
                    <option value="BIDANG PENYELENGGARAAN PEMERINTAHAN DESA">1 BIDANG PENYELENGGARAAN PEMERINTAHAN DESA</option>
                    <option value="BIDANG PELAKSANAAN PEMBANGUNAN DESA">2 BIDANG PELAKSANAAN PEMBANGUNAN DESA</option>
                    <option value="BIDANG PEMBINAAN KEMASYARAKATAN">3 BIDANG PEMBINAAN KEMASYARAKATAN</option>
                    <option value="BIDANG PEMBERDAYAAN MASYARAKAT">4 BIDANG PEMBERDAYAAN MASYARAKAT</option>
                    <option value="BIDANG PENANGGULANGAN BENCANA, DARURAT DAN MENDESAK DESA">5 BIDANG PENANGGULANGAN BENCANA, DARURAT DAN MENDESAK DESA</option>
                </select>
            </div>
            <div>
                <label for="anggaran" class="block mb-2 text-sm font-medium text-gray-900">Nilai Anggaran</label>
                <input type="text"  value="{{ old('nilai_anggaran', $anggaranbelj->nilai_anggaran) }}"
                name="nilai_anggaran" id="anggaran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5" placeholder="Masukkan Nilai Anggaran" required>
                <label for="anggaran" class="block mt-2 text-sm text-gray-900">Masukkan nilai anggaran dalam Rupiah</label>
            </div>
            <div>
                <label for="realisasi" class="block mb-2 text-sm font-medium text-gray-900">Nilai Realisasi</label>
                <input type="text" value="{{ old('nilai_realisasi', $anggaranbelj->nilai_realisasi) }}"
                name="nilai_realisasi" id="realisasi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5" placeholder="Masukkan Nilai Realisasi" required>
                <label for="realisasi" class="block mt-2 text-sm text-gray-900">Masukkan nilai realisasi dalam Rupiah</label>
            </div>
            <div>  
                <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                <textarea name="rincian" id="keterangan"  placeholder="Masukkan Keterangan"
                rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green focus:border-green" >{{$anggaranbelj->rincian}}</textarea>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
            </div>
        </div>
    </form>
</div>
@endsection