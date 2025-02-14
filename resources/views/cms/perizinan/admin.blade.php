@extends('layouts.layout-admin')
@section('title', 'Perizinan Online')

@section('other')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection

@section('header')
    <p class="text-sm md:text-base">
        <a href="/"><span class="text-green">Pelayanan Online</span></a>
    </p>
    <div class="flex items-center gap-5 justify-end">
        <!-- Search Start -->
        <form class="w-72" method="GET" action="/perizinan-online">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search" name="search"
                    class="block w-full px-4 py-3 pr-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-green-500"
                    placeholder="Cari Nama Orang yang Mengajukan" required>
            </div>
        </form>
        <!-- Search End -->
    </div>
@endsection

@section('content')
    <div class="grid grid-cols-4 gap-7 mb-jarak">
        <!-- Card Surat Total Start -->
        <div class="p-6 shadow-xl">
            <div class="flex items-center gap-4 mb-6">
                <svg class="w-6 h-6 p-3 box-content bg-red-300 text-red-500 rounded-lg" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M20.5 10.19H17.61C15.24 10.19 13.31 8.26 13.31 5.89V3C13.31 2.45 12.86 2 12.31 2H8.07C4.99 2 2.5 4 2.5 7.57V16.43C2.5 20 4.99 22 8.07 22H15.93C19.01 22 21.5 20 21.5 16.43V11.19C21.5 10.64 21.05 10.19 20.5 10.19Z"
                        fill="currentColor" />
                    <path
                        d="M15.8002 2.20999C15.3902 1.79999 14.6802 2.07999 14.6802 2.64999V6.13999C14.6802 7.59999 15.9202 8.80999 17.4302 8.80999C18.3802 8.81999 19.7002 8.81999 20.8302 8.81999C21.4002 8.81999 21.7002 8.14999 21.3002 7.74999C19.8602 6.29999 17.2802 3.68999 15.8002 2.20999Z"
                        fill="currentColor" />
                    <path
                        d="M13.5 13.75H7.5C7.09 13.75 6.75 13.41 6.75 13C6.75 12.59 7.09 12.25 7.5 12.25H13.5C13.91 12.25 14.25 12.59 14.25 13C14.25 13.41 13.91 13.75 13.5 13.75Z"
                        fill="white" />
                    <path
                        d="M11.5 17.75H7.5C7.09 17.75 6.75 17.41 6.75 17C6.75 16.59 7.09 16.25 7.5 16.25H11.5C11.91 16.25 12.25 16.59 12.25 17C12.25 17.41 11.91 17.75 11.5 17.75Z"
                        fill="white" />
                </svg>
                <h3 class="font-bold text-lg">Surat Tercetak</h3>
            </div>
            <h3 class="mb-2"><span class="font-semibold text-4xl">{{ $totalSurat }}</span> Surat</h3>
            {{-- <a class="flex gap-1 font-thin items-center text-abu-500" href="#">Lihat Detail <img
                    src="{{ asset('icon/chevron-right.svg') }}" alt=""></a> --}}
        </div>
        <!-- Card Surat Total End -->

        <!-- Card Surat Hari Start -->
        <div class="p-6 shadow-xl">
            <div class="flex items-center gap-4 mb-6">
                <svg class="w-9 h-6 p-3 box-content bg-green-400 text-green-500 rounded-lg"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M20.5 10.19H17.61C15.24 10.19 13.31 8.26 13.31 5.89V3C13.31 2.45 12.86 2 12.31 2H8.07C4.99 2 2.5 4 2.5 7.57V16.43C2.5 20 4.99 22 8.07 22H15.93C19.01 22 21.5 20 21.5 16.43V11.19C21.5 10.64 21.05 10.19 20.5 10.19Z"
                        fill="currentColor" />
                    <path
                        d="M15.8002 2.20999C15.3902 1.79999 14.6802 2.07999 14.6802 2.64999V6.13999C14.6802 7.59999 15.9202 8.80999 17.4302 8.80999C18.3802 8.81999 19.7002 8.81999 20.8302 8.81999C21.4002 8.81999 21.7002 8.14999 21.3002 7.74999C19.8602 6.29999 17.2802 3.68999 15.8002 2.20999Z"
                        fill="currentColor" />
                    <path
                        d="M13.5 13.75H7.5C7.09 13.75 6.75 13.41 6.75 13C6.75 12.59 7.09 12.25 7.5 12.25H13.5C13.91 12.25 14.25 12.59 14.25 13C14.25 13.41 13.91 13.75 13.5 13.75Z"
                        fill="white" />
                    <path
                        d="M11.5 17.75H7.5C7.09 17.75 6.75 17.41 6.75 17C6.75 16.59 7.09 16.25 7.5 16.25H11.5C11.91 16.25 12.25 16.59 12.25 17C12.25 17.41 11.91 17.75 11.5 17.75Z"
                        fill="white" />
                </svg>
                <h3 class="font-bold text-lg">Surat Tercetak Hari Ini</h3>
            </div>
            <h3 class="mb-2"><span class="font-semibold text-4xl">{{ $suratHariIni }}</span> Surat</h3>
            {{-- <a class="flex gap-1 font-thin items-center text-abu-500" href="/perizinan-perhari">Lihat Detail <img
                    src="{{ asset('icon/chevron-right.svg') }}" alt=""></a> --}}
        </div>
        <!-- Card Surat Hari End -->

        <!-- Card Surat Bulan Start -->
        <div class="p-6 shadow-xl">
            <div class="flex items-center gap-4 mb-6">
                <svg class="w-9 h-6 p-3 box-content bg-teal-300 text-teal-500 rounded-lg" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M20.5 10.19H17.61C15.24 10.19 13.31 8.26 13.31 5.89V3C13.31 2.45 12.86 2 12.31 2H8.07C4.99 2 2.5 4 2.5 7.57V16.43C2.5 20 4.99 22 8.07 22H15.93C19.01 22 21.5 20 21.5 16.43V11.19C21.5 10.64 21.05 10.19 20.5 10.19Z"
                        fill="currentColor" />
                    <path
                        d="M15.8002 2.20999C15.3902 1.79999 14.6802 2.07999 14.6802 2.64999V6.13999C14.6802 7.59999 15.9202 8.80999 17.4302 8.80999C18.3802 8.81999 19.7002 8.81999 20.8302 8.81999C21.4002 8.81999 21.7002 8.14999 21.3002 7.74999C19.8602 6.29999 17.2802 3.68999 15.8002 2.20999Z"
                        fill="currentColor" />
                    <path
                        d="M13.5 13.75H7.5C7.09 13.75 6.75 13.41 6.75 13C6.75 12.59 7.09 12.25 7.5 12.25H13.5C13.91 12.25 14.25 12.59 14.25 13C14.25 13.41 13.91 13.75 13.5 13.75Z"
                        fill="white" />
                    <path
                        d="M11.5 17.75H7.5C7.09 17.75 6.75 17.41 6.75 17C6.75 16.59 7.09 16.25 7.5 16.25H11.5C11.91 16.25 12.25 16.59 12.25 17C12.25 17.41 11.91 17.75 11.5 17.75Z"
                        fill="white" />
                </svg>
                <h3 class="font-bold text-lg">Surat Tercetak Bulan Ini</h3>
            </div>

            <h3 class="mb-2"><span class="font-semibold text-4xl">{{ $suratBulanIni }}</span> Surat</h3>
            {{-- <a class="flex gap-1 font-thin items-center text-abu-500"
                href="/perizinan-perbulan/{{ $perizinans->id }}
            ">Lihat Detail <img
                    src="{{ asset('icon/chevron-right.svg') }}" alt=""></a> --}}


        </div>
        <!-- Card Surat Bulan End -->

        <!-- Card Surat Tahun Start -->
        <div class="p-6 shadow-xl">
            <div class="flex items-center gap-4 mb-6">
                <svg class="w-9 h-6 p-3 box-content bg-yellow-200 text-yellow-400 rounded-lg"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M20.5 10.19H17.61C15.24 10.19 13.31 8.26 13.31 5.89V3C13.31 2.45 12.86 2 12.31 2H8.07C4.99 2 2.5 4 2.5 7.57V16.43C2.5 20 4.99 22 8.07 22H15.93C19.01 22 21.5 20 21.5 16.43V11.19C21.5 10.64 21.05 10.19 20.5 10.19Z"
                        fill="currentColor" />
                    <path
                        d="M15.8002 2.20999C15.3902 1.79999 14.6802 2.07999 14.6802 2.64999V6.13999C14.6802 7.59999 15.9202 8.80999 17.4302 8.80999C18.3802 8.81999 19.7002 8.81999 20.8302 8.81999C21.4002 8.81999 21.7002 8.14999 21.3002 7.74999C19.8602 6.29999 17.2802 3.68999 15.8002 2.20999Z"
                        fill="currentColor" />
                    <path
                        d="M13.5 13.75H7.5C7.09 13.75 6.75 13.41 6.75 13C6.75 12.59 7.09 12.25 7.5 12.25H13.5C13.91 12.25 14.25 12.59 14.25 13C14.25 13.41 13.91 13.75 13.5 13.75Z"
                        fill="white" />
                    <path
                        d="M11.5 17.75H7.5C7.09 17.75 6.75 17.41 6.75 17C6.75 16.59 7.09 16.25 7.5 16.25H11.5C11.91 16.25 12.25 16.59 12.25 17C12.25 17.41 11.91 17.75 11.5 17.75Z"
                        fill="white" />
                </svg>
                <h3 class="font-bold text-lg">Surat Tercetak Tahun Ini</h3>
            </div>
            <h3 class="mb-2"><span class="font-semibold text-4xl">{{ $suratTahunIni }}</span> Surat</h3>
            {{-- <a class="flex gap-1 font-thin items-center text-abu-500" href="/perizinan-pertahun">Lihat Detail <img
                    src="{{ asset('icon/chevron-right.svg') }}" alt=""></a> --}}
        </div>
        <!-- Card Surat Tahun End -->
    </div>

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
            @foreach ($perizinans as $perizinan)
                <tbody class="text-left">
                    <tr class="bg-white border-b">
                        <td class="px-1 py-4 border-r flex justify-center gap-3 box-content my-auto">
                            <a href="/delete-perizinan/{{ $perizinan->id }}">
                                <img class="bg-red-500 hover:bg-red-700 w-4 h-4 box-content p-2 rounded"
                                    src="{{ asset('icon/delete.svg') }}" alt="">
                            </a>
                            <a href="/perizinan-online/{{ $perizinan->id }}/edit">
                                <img class="bg-green-500 hover:bg-green-700 w-4 h-4 box-content p-2 rounded"
                                    src="{{ asset('icon/edit.svg') }}" alt="">
                            </a>
                        </td>
                        <td class="px-6 py-4 border-r whitespace-nowrap">
                            <div
                                class="py-1 px-6 w-fit flex gap-2 items-center rounded-full justify-center mx-auto {{ $perizinan->status_surat == 'Selesai' ? 'bg-green-300 text-green-700' : 'bg-yellow-200 text-yellow-700' }}">
                                <div
                                    class="w-2 h-2 rounded-full {{ $perizinan->status_surat == 'Selesai' ? 'bg-green-700' : 'bg-red-200' }}">
                                </div>
                                <p>{{ $perizinan->status_surat }}</p>
                            </div>
                        </td>
                        <td class="px-6 py-4 border-r whitespace-nowrap">
                            {{ $perizinan->email }}
                        </td>
                        <th scope="row" class="px-6 py-4 border-r font-medium whitespace-nowrap">
                            {{ $perizinan->nama }}
                        </th>
                        <td class="px-6 py-4 border-r whitespace-nowrap">
                            {{ $perizinan->nik }}
                        </td>
                        <td class="px-6 py-4 border-r whitespace-nowrap">
                            {{ $perizinan->kk }}
                        </td>
                        <td class="px-6 py-4 border-r">
                            {{ $perizinan->jenis_kelamin }}
                        </td>
                        <td class="px-6 py-4 border-r whitespace-nowrap">
                            {{ $perizinan->alamat }}
                        </td>
                        <td class="px-6 py-4 border-r whitespace-nowrap">
                            {{ $perizinan->jenis_surat }}
                        </td>
                        <td class="px-6 py-4 border-r whitespace-nowrap">
                            {{ $perizinan->keperluan_surat }}
                        </td>
                        <td class="px-6 py-4 border-r whitespace-nowrap">
                            {{ $perizinan->pesan }}
                        </td>
                        <td class="px-6 py-4 border-r whitespace-nowrap">
                            {{ $perizinan->jenis_pengambilan }}
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
@endsection
