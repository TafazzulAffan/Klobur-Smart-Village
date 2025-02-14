@extends('layouts.layout-admin') 
@section('title', 'Surat Tercetak Bulan Ini')

@section('other')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection

@section('header')
<p class="text-sm md:text-base"><span class="text-green">Layanan <span class="text-black">/</span> <a href="/kelola-perizinan">Perizinan Online</a></span> / Surat Tercetak Bulan Ini</p>
<div class="flex items-center gap-5 justify-end">
    <!-- Search Start -->
    <form class="w-72">   
        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                </svg>
            </div>
            <input type="search" id="default-search" class="block w-full px-4 py-3 pr-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-green-500" placeholder="Cari nama surat" required>
        </div>
    </form>
    <!-- Search End -->
</div>
@endsection

@section('content')
<!-- Table Start -->
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-abu-700 border">
        <thead class="text-center text-white uppercase bg-green border-b">
            <tr>
                <th scope="col" class="px-6 py-3 border-r">
                    Tindakan
                </th>
                <th scope="col" class="px-6 py-3 border-r">
                    Status
                </th>
                <th scope="col" class="px-6 py-3 border-r">
                    Email
                </th>
                <th scope="col" class="px-6 py-3 border-r">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3 border-r">
                    NIK
                </th>
                <th scope="col" class="px-6 py-3 border-r">
                    KK
                </th>
                <th scope="col" class="px-6 py-3 border-r">
                    Jenis Kelamin
                </th>
                <th scope="col" class="px-6 py-3 border-r">
                    Alamat
                </th>
                <th scope="col" class="px-6 py-3 border-r">
                    Jenis Surat
                </th>
                <th scope="col" class="px-6 py-3 border-r">
                    Keperluan Surat
                </th>
                <th scope="col" class="px-6 py-3 border-r">
                    Pesan
                </th>
                <th scope="col" class="px-6 py-3 border-r">
                    Jenis Pengambilan Surat
                </th>
            </tr>
        </thead>
        <tbody class="text-left">
            <tr class="bg-white border-b">
                <td class="px-1 py-4 border-r flex justify-center gap-3 box-content my-auto">
                    <button>
                        <img class="bg-red-500 hover:bg-red-700 w-4 h-4 box-content p-2 rounded" src="{{asset('icon/delete.svg')}}" alt="">
                    </button>
                    <button>
                        <img class="bg-green-500 hover:bg-green-700 w-4 h-4 box-content p-2 rounded" src="{{asset('icon/edit.svg')}}" alt="">
                    </button>
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    @php
                        $status = "Selesai";
                    @endphp
                    <div class="py-1 px-6 w-fit flex gap-2 items-center rounded-full justify-center mx-auto {{ $status == 'Selesai' ? 'bg-green-300 text-green-700' : 'bg-yellow-200 text-yellow-700' }}">
                        <div class="w-2 h-2 rounded-full {{ $status == 'Selesai' ? 'bg-green-700' : 'bg-red-200' }}"></div>
                        <p>{{ $status }}</p>
                    </div>
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    febriandaffa123@gmail.com
                </td>
                <th scope="row" class="px-6 py-4 border-r font-medium whitespace-nowrap">
                    Febrian Daffa Eka Putra
                </th>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    3453456433332
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    3352242424242
                </td>
                <td class="px-6 py-4 border-r">
                    Laki-Laki
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    Jl. Malik Ibrahim RT.05 RW.03, Kwangsan, Sedati, Sidoarjo
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    SKU (Surat Keterangan Usaha)
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    Izin berjualan dipinggir jalan tol
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    Aing pingin jualan dipinggir jalan tol kata satpam perlu surat yaudah
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    Offline
                </td>        
            </tr>
            <tr class="bg-white border-b">
                <td class="px-1 py-4 border-r flex justify-center gap-3 box-content my-auto">
                    <button>
                        <img class="bg-red-500 hover:bg-red-700 w-4 h-4 box-content p-2 rounded" src="{{asset('icon/delete.svg')}}" alt="">
                    </button>
                    <button>
                        <img class="bg-green-500 hover:bg-green-700 w-4 h-4 box-content p-2 rounded" src="{{asset('icon/edit.svg')}}" alt="">
                    </button>
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    @php
                        $status = "Proses";
                    @endphp
                    <div class="py-1 px-6 w-fit flex gap-2 items-center rounded-full justify-center mx-auto {{ $status == 'Selesai' ? 'bg-green-300 text-green-700' : 'bg-yellow-200 text-yellow-700' }}">
                        <div class="w-2 h-2 rounded-full {{ $status == 'Selesai' ? 'bg-green-700' : 'bg-yellow-700' }}"></div>
                        <p>{{ $status }}</p>
                    </div>
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    febriandaffa123@gmail.com
                </td>
                <th scope="row" class="px-6 py-4 border-r font-medium whitespace-nowrap">
                    Febrian Daffa Eka Putra
                </th>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    3453456433332
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    3352242424242
                </td>
                <td class="px-6 py-4 border-r">
                    Laki-Laki
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    Jl. Malik Ibrahim RT.05 RW.03, Kwangsan, Sedati, Sidoarjo
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    SKU (Surat Keterangan Usaha)
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    Izin berjualan dipinggir jalan tol
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    Aing pingin jualan dipinggir jalan tol kata satpam perlu surat yaudah
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    Offline
                </td>        
            </tr>
        </tbody>
    </table>
</div>
@endsection