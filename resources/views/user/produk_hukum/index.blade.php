@extends('layouts.layout-user')
@section('title', 'Website Resmi Pemerintah Desa Klobur - Produk Hukum')

@section('header')
    <div class="">
        <a href="/"><p class="text-sm md:text-base"><span class="text-[#198754]">Regulasi</span></a> > Produk Hukum</p>
        <h3 class="font-bold text-xl md:text-3xl mt-2">Produk Hukum</h3>
    </div>
@endsection

@section('content')
    <!-- Search Start -->
    <form class="flex flex-col md:flex-row items-center mb-jarak gap-5" action="/produk-hukum"
        method="GET>
    <label for="simple-search" class="sr-only"></label>
        {{-- <div class="relative w-full mx-auto">
        <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#198754] focus:border-[#198754] block w-full pl-4 p-2.5" placeholder="Jenis" required>
    </div> --}}
        <div class="relative w-full">
            <input type="text" name="search" id="simple-search"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#198754] focus:border-[#198754] block w-full pl-4 p-2.5"
                placeholder="Jenis surat" required>
        </div>
        <button type="submit"
            class="py-2.5 px-8 text-sm font-medium text-white bg-[#198754] rounded-lg border border-[#198754] hover:bg-[#198754]-600 focus:ring-4 focus:outline-none focus:ring-[#198754]-300">
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
                        Judul Produk Hukum
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Jenis
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Tahun
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tindakan
                    </th>
                </tr>
            </thead>

            <tbody class="text-left">
                @foreach ($produkHukum as $hukum)
                    <tr class="bg-white border-b">
                        <td class="px-3 py-4 border-r">
                            {{ $hukum->id }}
                        </td>
                        <th scope="row" class="px-6 py-4 border-r font-medium whitespace-nowrap">
                            {{ $hukum->judul }}
                        </th>
                        <td class="px-6 py-4 border-r">
                            {{ $hukum->jenis }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $hukum->tahun }}
                        </td>
                        <td class="px-1 py-4 flex justify-center gap-3 box-content my-auto">
                            <a href="/downloadBerkas/{{ $hukum->id }}">
                                <img class="w-4 h-4 box-content p-2 rounded {{ $hukum->upload_berkas == 'Proses' ? 'bg-gray-400 hover:bg-gray-400' : 'bg-blue-500 hover:bg-blue-700' }}"
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
