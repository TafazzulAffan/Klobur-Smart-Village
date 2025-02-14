@extends('layouts.layout-admin') 
@section('title', 'Edit Data Produk Hukum')

@section('header')
<h2 class="font-bold text-lg">Edit Data Produk Hukum</h2>
@endsection

@section('content')
<div class="p-8 shadow-xl">
    <form method="POST" action="{{route('update.hukum')}}" enctype="multipart/form-data">
        @csrf
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <input type="hidden" name="id" value="{{ $hukum->id }}" hidden>
            <div>
                {{-- <input type="hidden" name="id" value="{{ $hukum->id }}" hidden> --}}
                <label for="judul-hukum" class="block mb-2 text-sm font-medium text-gray-900">Judul Produk Hukum</label>
                <input type="text" name="judul" id="judul-hukum" value="{{ old('judul', $hukum->judul) }}"
<<<<<<< HEAD
                 class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-jingga focus:border-jingga block w-full p-2.5" placeholder="Masukkan Judul Produk Hukum" required>
            </div>
            <div>
                <label for="tahun" class="block mb-2 text-sm font-medium text-gray-900">Tahun</label>
                <select name="tahun" id="tahun" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-jingga focus:border-jingga block w-full p-2.5">
=======
                 class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5" placeholder="Masukkan Judul Produk Hukum" required>
            </div>
            <div>
                <label for="tahun" class="block mb-2 text-sm font-medium text-gray-900">Tahun</label>
                <select name="tahun" id="tahun" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
>>>>>>> fix
                    <option value="{{ old('tahun', $hukum->tahun)}}" selected>{{$hukum->tahun}}</option>
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
<<<<<<< HEAD
                <select name="jenis" id="jenis-hukum" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-jingga focus:border-jingga block w-full p-2.5">
=======
                <select name="jenis" id="jenis-hukum" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
>>>>>>> fix
                    <option  value="{{ old('jenis', $hukum->jenis)}}" selected>{{$hukum->jenis}}</option>
                    <option value="SK Kades">SK Kades</option>
                    <option value="PerDes">PerDes</option>
                </select>
            </div>
            <div>
                <label for="upload-berkas" class="block mb-2 text-sm font-medium text-gray-900">Upload Berkas</label>
<<<<<<< HEAD
                <input type="file"  value="{{ old('upload_berkas', $hukum->upload_berkas)}}"  name="upload_berkas" id="upload-berkas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-jingga focus:border-jingga block w-full">
=======
                <input type="file"  value="{{ old('upload_berkas', $hukum->upload_berkas)}}"  name="upload_berkas" id="upload-berkas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full">
>>>>>>> fix
                File yang terupload:
                <!--<a href="{{ asset($hukum->upload_berkas) }}" download>{{$hukum->upload_berkas}}</a>-->
                <a href="/download-hukum/{{ $hukum->id }}" style="color: black; text-decoration: none;" onmouseover="this.style.color='red'" onmouseout="this.style.color='black'">
                    {{$hukum->upload_berkas}}
                </a>

            </div>
        </div>
        <div class="flex justify-end">
<<<<<<< HEAD
            <button type="submit" class="text-white bg-orange-500 hover:bg-jingga-600 focus:ring-4 focus:outline-none focus:ring-jingga-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
=======
            <button type="submit" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
>>>>>>> fix
        </div>
    </form>
</div>
@endsection