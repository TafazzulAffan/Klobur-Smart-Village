@extends('layouts.layout-user') 
@section('title', 'Website Resmi Pemerintah Desa Klobur - Informasi Publik')

@section('header')
<div class="">
    <a href="/"><p class="text-sm md:text-base"><span class="text-[#198754]">Regulasi</span></a> > Informasi Publik</p>
    <h3 class="font-bold text-xl md:text-3xl mt-2">Informasi Publik</h3>
</div>
@endsection

@section('content')
<!-- Search Start -->
<form class="flex flex-col md:flex-row items-center mb-jarak gap-5" action="/informasi-publik" method="GET>   
    <label for="simple-search" class="sr-only"></label>
    <div class="relative w-full">
        <input type="text" name="search" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#198754] focus:border-[#198754] block w-full pl-4 p-2.5" placeholder="Tentang" required>
    </div>
    <button type="submit" class="py-2.5 px-8 text-sm font-medium text-white bg-[#198754] rounded-lg border border-[#198754] hover:bg-[#198754]-600 focus:ring-4 focus:outline-none focus:ring-[#198754]-300">
        Cari
    </button>
</form>
<!-- Search End -->

<!-- Table Start -->
<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-abu-700 border">
        <thead class="text-center text-white uppercase bg-[#198754] border-b">
            <tr>
                <th scope="col" class="px-3 py-3 border-r">
                    No
                </th>
                <th scope="col" class="px-6 py-3 border-r">
                    Judul Informasi
                </th>
                <th scope="col" class="px-6 py-3 border-r">
                    Kategori
                </th>
                <th scope="col" class="px-6 py-3 border-r">
                    Tahun
                </th>
                <th scope="col" class="px-6 py-3 border-r">
                    Tindakan
                </th>
            </tr>
        </thead>
        <tbody class="text-left">
            @foreach ($informasiPublik as $publik)
            <tr class="bg-white border-b">
                <td class="px-3 py-4 border-r">
                    {{ $publik->id }}
                </td>
                <th scope="row" class="px-6 py-4 border-r font-medium whitespace-nowrap">
                    {{ $publik->judul }}
                </th>
                <td class="px-6 py-4 border-r">
                    {{ $publik->kategori }}
                </td>
                <td class="px-6 py-4 border-r">
                    {{ $publik->tahun}}
                </td>
                <td class="px-6 py-4 flex justify-center my-auto">
                    <a href="/downloadBerkas/informasi-publik/{{ $publik->id }}">
                        <img class="w-4 h-4 box-content p-2 rounded {{ $publik->upload_berkas == 'Proses' ? 'bg-gray-400 hover:bg-gray-400' : 'bg-blue-500 hover:bg-blue-700' }}"
                            src="{{ asset('icon/download.svg') }}" alt="">
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- Table End -->
@endsection