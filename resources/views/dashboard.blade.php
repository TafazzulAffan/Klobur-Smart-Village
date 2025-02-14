@extends('layouts.layout-admin') 
@section('title', 'Dashboard Admin')

@section('other')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection

@section('header')
<h2 class="font-bold text-lg">Dashboard</h2>
@endsection 

@section('content')
<div class="grid grid-cols-4 grid-rows-2 gap-7">
    <!-- Card Penduduk Start -->
    <div class="p-6 shadow-xl">
        <div class="flex items-center gap-4 mb-6">
            <svg
                class="w-6 h-6 p-3 box-content bg-green-300 rounded-lg text-green-500"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M9 2C6.38 2 4.25 4.13 4.25 6.75C4.25 9.32 6.26 11.4 8.88 11.49C8.96 11.48 9.04 11.48 9.1 11.49C9.12 11.49 9.13 11.49 9.15 11.49C9.16 11.49 9.16 11.49 9.17 11.49C11.73 11.4 13.74 9.32 13.75 6.75C13.75 4.13 11.62 2 9 2Z"
                    fill="currentColor"
                />
                <path
                    d="M14.08 14.1499C11.29 12.2899 6.73996 12.2899 3.92996 14.1499C2.65996 14.9999 1.95996 16.1499 1.95996 17.3799C1.95996 18.6099 2.65996 19.7499 3.91996 20.5899C5.31996 21.5299 7.15996 21.9999 8.99996 21.9999C10.84 21.9999 12.68 21.5299 14.08 20.5899C15.34 19.7399 16.04 18.5999 16.04 17.3599C16.03 16.1299 15.34 14.9899 14.08 14.1499Z"
                    fill="currentColor"
                />
                <path
                    opacity="0.4"
                    d="M19.9899 7.3401C20.1499 9.2801 18.7699 10.9801 16.8599 11.2101C16.8499 11.2101 16.8499 11.2101 16.8399 11.2101H16.8099C16.7499 11.2101 16.6899 11.2101 16.6399 11.2301C15.6699 11.2801 14.7799 10.9701 14.1099 10.4001C15.1399 9.4801 15.7299 8.1001 15.6099 6.6001C15.5399 5.7901 15.2599 5.0501 14.8399 4.4201C15.2199 4.2301 15.6599 4.1101 16.1099 4.0701C18.0699 3.9001 19.8199 5.3601 19.9899 7.3401Z"
                    fill="white"
                />
                <path
                    d="M21.9902 16.5899C21.9102 17.5599 21.2902 18.3999 20.2502 18.9699C19.2502 19.5199 17.9902 19.7799 16.7402 19.7499C17.4602 19.0999 17.8802 18.2899 17.9602 17.4299C18.0602 16.1899 17.4702 14.9999 16.2902 14.0499C15.6202 13.5199 14.8402 13.0999 13.9902 12.7899C16.2002 12.1499 18.9802 12.5799 20.6902 13.9599C21.6102 14.6999 22.0802 15.6299 21.9902 16.5899Z"
                    fill="white"
                />
            </svg>
            <h3 class="font-bold text-lg">Penduduk</h3>
        </div>
        <h3 class="mb-2">
            <span class="font-semibold text-4xl">{{ $totalPenduduk }}</span> Jiwa
        </h3>
        <a
            class="flex gap-1 font-thin items-center text-abu-500"
            href="/kelola-penduduk"
            >Lihat Detail <img src="{{asset('icon/chevron-right.svg')}}" alt=""
        /></a>
    </div>
    <!-- Card Penduduk End -->

    <!-- Card Keluarga Start -->
    <div class="p-6 shadow-xl">
        <div class="flex items-center gap-4 mb-6">
            <svg
                class="w-6 h-6 p-3 box-content bg-purple-400 rounded-lg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    opacity="0.8"
                    d="M17.53 7.77C17.46 7.76 17.39 7.76 17.32 7.77C15.77 7.72 14.54 6.45 14.54 4.89C14.54 3.3 15.83 2 17.43 2C19.02 2 20.32 3.29 20.32 4.89C20.31 6.45 19.08 7.72 17.53 7.77Z"
                    fill="white"
                />
                <path
                    opacity="0.8"
                    d="M20.7901 14.6999C19.6701 15.4499 18.1001 15.7299 16.6501 15.5399C17.0301 14.7199 17.2301 13.8099 17.2401 12.8499C17.2401 11.8499 17.0201 10.8999 16.6001 10.0699C18.0801 9.86992 19.6501 10.1499 20.7801 10.8999C22.3601 11.9399 22.3601 13.6499 20.7901 14.6999Z"
                    fill="white"
                />
                <path
                    opacity="0.7"
                    d="M6.4399 7.77C6.5099 7.76 6.5799 7.76 6.6499 7.77C8.1999 7.72 9.4299 6.45 9.4299 4.89C9.4299 3.3 8.1399 2 6.5399 2C4.9499 2 3.6499 3.29 3.6499 4.89C3.6599 6.45 4.8899 7.72 6.4399 7.77Z"
                    fill="#6610F2"
                />
                <path
                    opacity="0.7"
                    d="M6.55012 12.8501C6.55012 13.8201 6.76012 14.7401 7.14012 15.5701C5.73012 15.7201 4.26012 15.4201 3.18012 14.7101C1.60012 13.6601 1.60012 11.9501 3.18012 10.9001C4.25012 10.1801 5.76012 9.8901 7.18012 10.0501C6.77012 10.8901 6.55012 11.8401 6.55012 12.8501Z"
                    fill="#6610F2"
                />
                <path
                    d="M12.1203 15.87C12.0403 15.86 11.9503 15.86 11.8603 15.87C10.0203 15.81 8.55029 14.3 8.55029 12.44C8.55029 10.54 10.0803 9 11.9903 9C13.8903 9 15.4303 10.54 15.4303 12.44C15.4303 14.3 13.9703 15.81 12.1203 15.87Z"
                    fill="#6610F2"
                />
                <path
                    d="M8.87029 17.9399C7.36029 18.9499 7.36029 20.6099 8.87029 21.6099C10.5903 22.7599 13.4103 22.7599 15.1303 21.6099C16.6403 20.5999 16.6403 18.9399 15.1303 17.9399C13.4203 16.7899 10.6003 16.7899 8.87029 17.9399Z"
                    fill="#6610F2"
                />
            </svg>
            <h3 class="font-bold text-lg">Keluarga</h3>
        </div>
        <h3 class="mb-2">
            <span class="font-semibold text-4xl">{{ $totalKeluargas }}</span> Keluarga
        </h3>
    </div>
    <!-- Card Keluarga End -->

    <!-- Card Laki Start -->
    <div class="p-6 shadow-xl">
        <div class="flex items-center gap-4 mb-6">
            <svg
                class="w-6 h-6 p-3 box-content bg-blue-300 rounded-lg text-blue-500"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M9 2C6.38 2 4.25 4.13 4.25 6.75C4.25 9.32 6.26 11.4 8.88 11.49C8.96 11.48 9.04 11.48 9.1 11.49C9.12 11.49 9.13 11.49 9.15 11.49C9.16 11.49 9.16 11.49 9.17 11.49C11.73 11.4 13.74 9.32 13.75 6.75C13.75 4.13 11.62 2 9 2Z"
                    fill="currentColor"
                />
                <path
                    d="M14.08 14.1499C11.29 12.2899 6.73996 12.2899 3.92996 14.1499C2.65996 14.9999 1.95996 16.1499 1.95996 17.3799C1.95996 18.6099 2.65996 19.7499 3.91996 20.5899C5.31996 21.5299 7.15996 21.9999 8.99996 21.9999C10.84 21.9999 12.68 21.5299 14.08 20.5899C15.34 19.7399 16.04 18.5999 16.04 17.3599C16.03 16.1299 15.34 14.9899 14.08 14.1499Z"
                    fill="currentColor"
                />
                <path
                    opacity="0.4"
                    d="M19.9899 7.3401C20.1499 9.2801 18.7699 10.9801 16.8599 11.2101C16.8499 11.2101 16.8499 11.2101 16.8399 11.2101H16.8099C16.7499 11.2101 16.6899 11.2101 16.6399 11.2301C15.6699 11.2801 14.7799 10.9701 14.1099 10.4001C15.1399 9.4801 15.7299 8.1001 15.6099 6.6001C15.5399 5.7901 15.2599 5.0501 14.8399 4.4201C15.2199 4.2301 15.6599 4.1101 16.1099 4.0701C18.0699 3.9001 19.8199 5.3601 19.9899 7.3401Z"
                    fill="white"
                />
                <path
                    d="M21.9902 16.5899C21.9102 17.5599 21.2902 18.3999 20.2502 18.9699C19.2502 19.5199 17.9902 19.7799 16.7402 19.7499C17.4602 19.0999 17.8802 18.2899 17.9602 17.4299C18.0602 16.1899 17.4702 14.9999 16.2902 14.0499C15.6202 13.5199 14.8402 13.0999 13.9902 12.7899C16.2002 12.1499 18.9802 12.5799 20.6902 13.9599C21.6102 14.6999 22.0802 15.6299 21.9902 16.5899Z"
                    fill="white"
                />
            </svg>
            <h3 class="font-bold text-lg">Laki-Laki</h3>
        </div>
        <h3 class="mb-2">
            <span class="font-semibold text-4xl">{{ $totalPendudukLK }}</span> Jiwa
        </h3>
    </div>
    <!-- Card Laki End -->

    <!-- Card Perempuan Start -->
    <div class="p-6 shadow-xl">
        <div class="flex items-center gap-4 mb-6">
            <svg
                class="w-6 h-6 p-3 box-content bg-pink-300 rounded-lg text-pink-500"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    d="M9 2C6.38 2 4.25 4.13 4.25 6.75C4.25 9.32 6.26 11.4 8.88 11.49C8.96 11.48 9.04 11.48 9.1 11.49C9.12 11.49 9.13 11.49 9.15 11.49C9.16 11.49 9.16 11.49 9.17 11.49C11.73 11.4 13.74 9.32 13.75 6.75C13.75 4.13 11.62 2 9 2Z"
                    fill="currentColor"
                />
                <path
                    d="M14.08 14.1499C11.29 12.2899 6.73996 12.2899 3.92996 14.1499C2.65996 14.9999 1.95996 16.1499 1.95996 17.3799C1.95996 18.6099 2.65996 19.7499 3.91996 20.5899C5.31996 21.5299 7.15996 21.9999 8.99996 21.9999C10.84 21.9999 12.68 21.5299 14.08 20.5899C15.34 19.7399 16.04 18.5999 16.04 17.3599C16.03 16.1299 15.34 14.9899 14.08 14.1499Z"
                    fill="currentColor"
                />
                <path
                    opacity="0.4"
                    d="M19.9899 7.3401C20.1499 9.2801 18.7699 10.9801 16.8599 11.2101C16.8499 11.2101 16.8499 11.2101 16.8399 11.2101H16.8099C16.7499 11.2101 16.6899 11.2101 16.6399 11.2301C15.6699 11.2801 14.7799 10.9701 14.1099 10.4001C15.1399 9.4801 15.7299 8.1001 15.6099 6.6001C15.5399 5.7901 15.2599 5.0501 14.8399 4.4201C15.2199 4.2301 15.6599 4.1101 16.1099 4.0701C18.0699 3.9001 19.8199 5.3601 19.9899 7.3401Z"
                    fill="white"
                />
                <path
                    d="M21.9902 16.5899C21.9102 17.5599 21.2902 18.3999 20.2502 18.9699C19.2502 19.5199 17.9902 19.7799 16.7402 19.7499C17.4602 19.0999 17.8802 18.2899 17.9602 17.4299C18.0602 16.1899 17.4702 14.9999 16.2902 14.0499C15.6202 13.5199 14.8402 13.0999 13.9902 12.7899C16.2002 12.1499 18.9802 12.5799 20.6902 13.9599C21.6102 14.6999 22.0802 15.6299 21.9902 16.5899Z"
                    fill="white"
                />
            </svg>
            <h3 class="font-bold text-lg">Perempuan</h3>
        </div>
        <h3 class="mb-2">
            <span class="font-semibold text-4xl">{{ $totalPendudukPR }}</span> Jiwa
        </h3>
    </div>
    <!-- Card Perempuan End -->

    <!-- Card Surat Total Start -->
    <div class="p-6 shadow-xl">
        <div class="flex items-center gap-4 mb-6">
            <svg
                class="w-6 h-6 p-3 box-content bg-red-300 text-red-500 rounded-lg"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
            >
                <path
                    d="M20.5 10.19H17.61C15.24 10.19 13.31 8.26 13.31 5.89V3C13.31 2.45 12.86 2 12.31 2H8.07C4.99 2 2.5 4 2.5 7.57V16.43C2.5 20 4.99 22 8.07 22H15.93C19.01 22 21.5 20 21.5 16.43V11.19C21.5 10.64 21.05 10.19 20.5 10.19Z"
                    fill="currentColor"
                />
                <path
                    d="M15.8002 2.20999C15.3902 1.79999 14.6802 2.07999 14.6802 2.64999V6.13999C14.6802 7.59999 15.9202 8.80999 17.4302 8.80999C18.3802 8.81999 19.7002 8.81999 20.8302 8.81999C21.4002 8.81999 21.7002 8.14999 21.3002 7.74999C19.8602 6.29999 17.2802 3.68999 15.8002 2.20999Z"
                    fill="currentColor"
                />
                <path
                    d="M13.5 13.75H7.5C7.09 13.75 6.75 13.41 6.75 13C6.75 12.59 7.09 12.25 7.5 12.25H13.5C13.91 12.25 14.25 12.59 14.25 13C14.25 13.41 13.91 13.75 13.5 13.75Z"
                    fill="white"
                />
                <path
                    d="M11.5 17.75H7.5C7.09 17.75 6.75 17.41 6.75 17C6.75 16.59 7.09 16.25 7.5 16.25H11.5C11.91 16.25 12.25 16.59 12.25 17C12.25 17.41 11.91 17.75 11.5 17.75Z"
                    fill="white"
                />
            </svg>
            <h3 class="font-bold text-lg">Surat Tercetak</h3>
        </div>
        <h3 class="mb-2">
            <span class="font-semibold text-4xl">{{ $totalSurat }}</span> Surat
        </h3>
        <a
            class="flex gap-1 font-thin items-center text-abu-500"
            href="/kelola-perizinan"
            >Lihat Detail <img src="{{asset('icon/chevron-right.svg')}}" alt=""
        /></a>
    </div>
    <!-- Card Surat Total End -->

    <!-- Card Surat Hari Start -->
    <div class="p-6 shadow-xl">
        <div class="flex items-center gap-4 mb-6">
            <svg
                class="w-9 h-6 p-3 box-content bg-orange-400 text-orange-500 rounded-lg"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
            >
                <path
                    d="M20.5 10.19H17.61C15.24 10.19 13.31 8.26 13.31 5.89V3C13.31 2.45 12.86 2 12.31 2H8.07C4.99 2 2.5 4 2.5 7.57V16.43C2.5 20 4.99 22 8.07 22H15.93C19.01 22 21.5 20 21.5 16.43V11.19C21.5 10.64 21.05 10.19 20.5 10.19Z"
                    fill="currentColor"
                />
                <path
                    d="M15.8002 2.20999C15.3902 1.79999 14.6802 2.07999 14.6802 2.64999V6.13999C14.6802 7.59999 15.9202 8.80999 17.4302 8.80999C18.3802 8.81999 19.7002 8.81999 20.8302 8.81999C21.4002 8.81999 21.7002 8.14999 21.3002 7.74999C19.8602 6.29999 17.2802 3.68999 15.8002 2.20999Z"
                    fill="currentColor"
                />
                <path
                    d="M13.5 13.75H7.5C7.09 13.75 6.75 13.41 6.75 13C6.75 12.59 7.09 12.25 7.5 12.25H13.5C13.91 12.25 14.25 12.59 14.25 13C14.25 13.41 13.91 13.75 13.5 13.75Z"
                    fill="white"
                />
                <path
                    d="M11.5 17.75H7.5C7.09 17.75 6.75 17.41 6.75 17C6.75 16.59 7.09 16.25 7.5 16.25H11.5C11.91 16.25 12.25 16.59 12.25 17C12.25 17.41 11.91 17.75 11.5 17.75Z"
                    fill="white"
                />
            </svg>
            <h3 class="font-bold text-lg">Surat Tercetak Hari Ini</h3>
        </div>
        <h3 class="mb-2">
            <span class="font-semibold text-4xl">{{ $suratHariIni }}</span> Surat
        </h3>
        <a
            class="flex gap-1 font-thin items-center text-abu-500"
            href="/perizinan-perhari"
            >Lihat Detail <img src="{{asset('icon/chevron-right.svg')}}" alt=""
        /></a>
    </div>
    <!-- Card Surat Hari End -->

    <!-- Card Surat Bulan Start -->
    <div class="p-6 shadow-xl">
        <div class="flex items-center gap-4 mb-6">
            <svg
                class="w-9 h-6 p-3 box-content bg-teal-300 text-teal-500 rounded-lg"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
            >
                <path
                    d="M20.5 10.19H17.61C15.24 10.19 13.31 8.26 13.31 5.89V3C13.31 2.45 12.86 2 12.31 2H8.07C4.99 2 2.5 4 2.5 7.57V16.43C2.5 20 4.99 22 8.07 22H15.93C19.01 22 21.5 20 21.5 16.43V11.19C21.5 10.64 21.05 10.19 20.5 10.19Z"
                    fill="currentColor"
                />
                <path
                    d="M15.8002 2.20999C15.3902 1.79999 14.6802 2.07999 14.6802 2.64999V6.13999C14.6802 7.59999 15.9202 8.80999 17.4302 8.80999C18.3802 8.81999 19.7002 8.81999 20.8302 8.81999C21.4002 8.81999 21.7002 8.14999 21.3002 7.74999C19.8602 6.29999 17.2802 3.68999 15.8002 2.20999Z"
                    fill="currentColor"
                />
                <path
                    d="M13.5 13.75H7.5C7.09 13.75 6.75 13.41 6.75 13C6.75 12.59 7.09 12.25 7.5 12.25H13.5C13.91 12.25 14.25 12.59 14.25 13C14.25 13.41 13.91 13.75 13.5 13.75Z"
                    fill="white"
                />
                <path
                    d="M11.5 17.75H7.5C7.09 17.75 6.75 17.41 6.75 17C6.75 16.59 7.09 16.25 7.5 16.25H11.5C11.91 16.25 12.25 16.59 12.25 17C12.25 17.41 11.91 17.75 11.5 17.75Z"
                    fill="white"
                />
            </svg>
            <h3 class="font-bold text-lg">Surat Tercetak Bulan Ini</h3>
        </div>
        <h3 class="mb-2">
            <span class="font-semibold text-4xl">{{ $suratBulanIni }}</span> Surat
        </h3>
        <a
            class="flex gap-1 font-thin items-center text-abu-500"
            href="/perizinan-perbulan"
            >Lihat Detail <img src="{{asset('icon/chevron-right.svg')}}" alt=""
        /></a>
    </div>
    <!-- Card Surat Bulan End -->

    <!-- Card Surat Tahun Start -->
    <div class="p-6 shadow-xl">
        <div class="flex items-center gap-4 mb-6">
            <svg
                class="w-9 h-6 p-3 box-content bg-yellow-200 text-yellow-400 rounded-lg"
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
            >
                <path
                    d="M20.5 10.19H17.61C15.24 10.19 13.31 8.26 13.31 5.89V3C13.31 2.45 12.86 2 12.31 2H8.07C4.99 2 2.5 4 2.5 7.57V16.43C2.5 20 4.99 22 8.07 22H15.93C19.01 22 21.5 20 21.5 16.43V11.19C21.5 10.64 21.05 10.19 20.5 10.19Z"
                    fill="currentColor"
                />
                <path
                    d="M15.8002 2.20999C15.3902 1.79999 14.6802 2.07999 14.6802 2.64999V6.13999C14.6802 7.59999 15.9202 8.80999 17.4302 8.80999C18.3802 8.81999 19.7002 8.81999 20.8302 8.81999C21.4002 8.81999 21.7002 8.14999 21.3002 7.74999C19.8602 6.29999 17.2802 3.68999 15.8002 2.20999Z"
                    fill="currentColor"
                />
                <path
                    d="M13.5 13.75H7.5C7.09 13.75 6.75 13.41 6.75 13C6.75 12.59 7.09 12.25 7.5 12.25H13.5C13.91 12.25 14.25 12.59 14.25 13C14.25 13.41 13.91 13.75 13.5 13.75Z"
                    fill="white"
                />
                <path
                    d="M11.5 17.75H7.5C7.09 17.75 6.75 17.41 6.75 17C6.75 16.59 7.09 16.25 7.5 16.25H11.5C11.91 16.25 12.25 16.59 12.25 17C12.25 17.41 11.91 17.75 11.5 17.75Z"
                    fill="white"
                />
            </svg>
            <h3 class="font-bold text-lg">Surat Tercetak Tahun Ini</h3>
        </div>
        <h3 class="mb-2">
            <span class="font-semibold text-4xl">{{ $suratTahunIni }}</span> Surat
        </h3>
        <a
            class="flex gap-1 font-thin items-center text-abu-500"
            href="/perizinan-pertahun"
            >Lihat Detail <img src="{{asset('icon/chevron-right.svg')}}" alt=""
        /></a>
    </div>
    <!-- Card Surat Tahun End -->
</div>

<div class="my-jarak flex flex-col gap-jarak mt-12">
    {{-- Grafik Agama Start --}}
    <div>
        <h2 class="font-bold text-2xl text-center">Grafik Agama Desa Klobur</h2>
        <h3 class="font-semibold text-lg text-center mb-9">Total Penduduk : {{ $totalPenduduk }}</h3>
        <div x-data="{ 
            activeTab:1,
            activeClass: 'text-white bg-[#198754] active group',
            inactiveClass : 'text-[#198754] hover:text-white hover:bg-[#198754]-300 group'
            }" x-cloak>
            {{-- Tab Start --}}
            <div class="flex justify-center">
                <ul class="flex flex-wrap -mb-px font-medium text-center text-gray-500 dark:text-gray-400">
                    <li class="mr-2">
                        <a href="#grafik-agama" x-on:click="activeTab = 1" :class="activeTab === 1 ? activeClass : inactiveClass" class="inline-flex gap-2 items-center justify-center py-2 px-4 rounded-lg w-40 border-2 border-[#198754] hover:border-[#198754]-300">
                            <svg x-on:click="activeTab = 1" :class="activeTab === 1 ? activeClass : inactiveClass" class="w-5 h-5 text-gray-500 hover:text-white group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path d="M18.57 12.75H15.25C12.76 12.75 11.5 11.34 11.5 8.54996V5.67996C11.5 4.65996 11.62 3.19996 12.68 2.39996C13.57 1.73996 14.85 1.68996 16.74 2.23996C19.22 2.95996 21.29 5.02996 22.01 7.50996C22.56 9.38996 22.51 10.68 21.85 11.56C21.05 12.63 19.59 12.75 18.57 12.75ZM14.53 3.35996C14.12 3.35996 13.8 3.43996 13.59 3.59996C13.2 3.88996 13.01 4.56996 13.01 5.67996V8.55996C13.01 10.8 13.87 11.26 15.26 11.26H18.58C19.68 11.26 20.36 11.07 20.66 10.68C21.01 10.22 20.98 9.29996 20.59 7.94996C20.01 5.97996 18.31 4.26996 16.34 3.69996C15.6 3.46996 15 3.35996 14.53 3.35996Z" fill="currentColor"/>
                                <path d="M11.3199 22.7498C10.7899 22.7498 10.2499 22.7098 9.70988 22.6198C5.61988 21.9598 2.28988 18.6398 1.62988 14.5498C0.779883 9.28983 4.16988 4.32983 9.35988 3.26983C9.76988 3.18983 10.1599 3.44983 10.2499 3.84983C10.3299 4.25983 10.0699 4.64983 9.66988 4.73983C5.27988 5.63983 2.39988 9.83983 3.12988 14.3098C3.68988 17.7698 6.49988 20.5798 9.95988 21.1398C14.4499 21.8598 18.6399 18.9698 19.5299 14.5598C19.6099 14.1498 20.0099 13.8898 20.4099 13.9698C20.8199 14.0498 21.0799 14.4498 20.9999 14.8498C20.0499 19.5198 15.9699 22.7498 11.3199 22.7498Z" fill="currentColor"/>
                            </svg>
                            Diagram Pie
                        </a>
                    </li>
                    <li class="mr-2"> 
                        <a href="#grafik-agama" x-on:click="activeTab = 2" :class="activeTab === 2 ? activeClass : inactiveClass" class="inline-flex gap-2 items-center justify-center py-2 px-4 rounded-lg w-40 border-2 border-[#198754] hover:border-[#198754]-300">
                            <svg x-on:click="activeTab = 2" :class="activeTab === 2 ? activeClass : inactiveClass" class="w-5 h-5 text-gray-500 hover:text-white group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path d="M21.75 22.75H3.75C3.34 22.75 3 22.41 3 22C3 21.59 3.34 21.25 3.75 21.25H21.75C22.16 21.25 22.5 21.59 22.5 22C22.5 22.41 22.16 22.75 21.75 22.75Z" fill="currentColor"/>
                                <path d="M6.34998 19.7499H4.75C3.79 19.7499 3 18.9599 3 17.9999V9.37988C3 8.41988 3.79 7.62988 4.75 7.62988H6.34998C7.30998 7.62988 8.09998 8.41988 8.09998 9.37988V17.9999C8.09998 18.9599 7.30998 19.7499 6.34998 19.7499ZM4.75 9.11987C4.61 9.11987 4.5 9.22987 4.5 9.36987V17.9999C4.5 18.1399 4.61 18.2499 4.75 18.2499H6.34998C6.48998 18.2499 6.59998 18.1399 6.59998 17.9999V9.37988C6.59998 9.23988 6.48998 9.12988 6.34998 9.12988H4.75V9.11987Z" fill="currentColor"/>
                                <path d="M13.5502 19.7499H11.9502C10.9902 19.7499 10.2002 18.9599 10.2002 17.9999V6.18994C10.2002 5.22994 10.9902 4.43994 11.9502 4.43994H13.5502C14.5102 4.43994 15.3002 5.22994 15.3002 6.18994V17.9999C15.3002 18.9599 14.5102 19.7499 13.5502 19.7499ZM11.9502 5.93994C11.8102 5.93994 11.7002 6.04994 11.7002 6.18994V17.9999C11.7002 18.1399 11.8102 18.2499 11.9502 18.2499H13.5502C13.6902 18.2499 13.8002 18.1399 13.8002 17.9999V6.18994C13.8002 6.04994 13.6902 5.93994 13.5502 5.93994H11.9502Z" fill="currentColor"/>
                                <path d="M20.7499 19.75H19.1499C18.1899 19.75 17.3999 18.96 17.3999 18V3C17.3999 2.04 18.1899 1.25 19.1499 1.25H20.7499C21.7099 1.25 22.4999 2.04 22.4999 3V18C22.4999 18.96 21.7099 19.75 20.7499 19.75ZM19.1499 2.75C19.0099 2.75 18.8999 2.86 18.8999 3V18C18.8999 18.14 19.0099 18.25 19.1499 18.25H20.7499C20.8899 18.25 20.9999 18.14 20.9999 18V3C20.9999 2.86 20.8899 2.75 20.7499 2.75H19.1499Z" fill="currentColor"/>
                            </svg>
                            Diagram Bar
                        </a> 
                    </li>
                </ul>
            </div>
            {{-- Tab End --}}
        
            {{-- Tab Agama Start --}}
            <div>
                {{-- Pie Start --}}
                <div id="grafik-agama" x-show="activeTab === 1" class="p-5 w-1/2 mx-auto">
                    <canvas id="chart-agama"></canvas>
                </div>
                {{-- Pie End --}}
        
                {{-- Bar Start --}}
                <div id="grafik-agama" x-show="activeTab === 2" class="p-5 w-1/2 mx-auto">
                    <canvas id="chart-agama-bar"></canvas>
                </div>
                {{-- Bar End --}}
            </div>
            {{-- Tab Content End --}}
        </div>
    </div>
    {{-- Grafik Agama End --}}

    {{-- Grafik Pendidikan Start --}}
    <div>
        <h2 class="font-bold text-2xl text-center">Grafik Pendidikan Desa Klobur</h2>
        <h3 class="font-semibold text-lg text-center mb-9">Total Penduduk : {{ $totalPenduduk }}</h3>
        <div x-data="{ 
            activeTab:1,
            activeClass: 'text-white bg-[#198754] active group',
            inactiveClass : 'text-[#198754] hover:text-white hover:bg-[#198754]-300 group'
            }" x-cloak>
            {{-- Tab Start --}}
            <div class="flex justify-center">
                <ul class="flex flex-wrap -mb-px font-medium text-center text-gray-500 dark:text-gray-400">
                    <li class="mr-2">
                        <a href="#grafik-pendidikan" x-on:click="activeTab = 1" :class="activeTab === 1 ? activeClass : inactiveClass" class="inline-flex gap-2 items-center justify-center py-2 px-4 rounded-lg w-40 border-2 border-[#198754] hover:border-[#198754]-300">
                            <svg x-on:click="activeTab = 1" :class="activeTab === 1 ? activeClass : inactiveClass" class="w-5 h-5 text-gray-500 hover:text-white group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path d="M18.57 12.75H15.25C12.76 12.75 11.5 11.34 11.5 8.54996V5.67996C11.5 4.65996 11.62 3.19996 12.68 2.39996C13.57 1.73996 14.85 1.68996 16.74 2.23996C19.22 2.95996 21.29 5.02996 22.01 7.50996C22.56 9.38996 22.51 10.68 21.85 11.56C21.05 12.63 19.59 12.75 18.57 12.75ZM14.53 3.35996C14.12 3.35996 13.8 3.43996 13.59 3.59996C13.2 3.88996 13.01 4.56996 13.01 5.67996V8.55996C13.01 10.8 13.87 11.26 15.26 11.26H18.58C19.68 11.26 20.36 11.07 20.66 10.68C21.01 10.22 20.98 9.29996 20.59 7.94996C20.01 5.97996 18.31 4.26996 16.34 3.69996C15.6 3.46996 15 3.35996 14.53 3.35996Z" fill="currentColor"/>
                                <path d="M11.3199 22.7498C10.7899 22.7498 10.2499 22.7098 9.70988 22.6198C5.61988 21.9598 2.28988 18.6398 1.62988 14.5498C0.779883 9.28983 4.16988 4.32983 9.35988 3.26983C9.76988 3.18983 10.1599 3.44983 10.2499 3.84983C10.3299 4.25983 10.0699 4.64983 9.66988 4.73983C5.27988 5.63983 2.39988 9.83983 3.12988 14.3098C3.68988 17.7698 6.49988 20.5798 9.95988 21.1398C14.4499 21.8598 18.6399 18.9698 19.5299 14.5598C19.6099 14.1498 20.0099 13.8898 20.4099 13.9698C20.8199 14.0498 21.0799 14.4498 20.9999 14.8498C20.0499 19.5198 15.9699 22.7498 11.3199 22.7498Z" fill="currentColor"/>
                            </svg>
                            Diagram Pie
                        </a>
                    </li>
                    <li class="mr-2"> 
                        <a href="#grafik-pendidikan" x-on:click="activeTab = 2" :class="activeTab === 2 ? activeClass : inactiveClass" class="inline-flex gap-2 items-center justify-center py-2 px-4 rounded-lg w-40 border-2 border-[#198754] hover:border-[#198754]-300">
                            <svg x-on:click="activeTab = 2" :class="activeTab === 2 ? activeClass : inactiveClass" class="w-5 h-5 text-gray-500 hover:text-white group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path d="M21.75 22.75H3.75C3.34 22.75 3 22.41 3 22C3 21.59 3.34 21.25 3.75 21.25H21.75C22.16 21.25 22.5 21.59 22.5 22C22.5 22.41 22.16 22.75 21.75 22.75Z" fill="currentColor"/>
                                <path d="M6.34998 19.7499H4.75C3.79 19.7499 3 18.9599 3 17.9999V9.37988C3 8.41988 3.79 7.62988 4.75 7.62988H6.34998C7.30998 7.62988 8.09998 8.41988 8.09998 9.37988V17.9999C8.09998 18.9599 7.30998 19.7499 6.34998 19.7499ZM4.75 9.11987C4.61 9.11987 4.5 9.22987 4.5 9.36987V17.9999C4.5 18.1399 4.61 18.2499 4.75 18.2499H6.34998C6.48998 18.2499 6.59998 18.1399 6.59998 17.9999V9.37988C6.59998 9.23988 6.48998 9.12988 6.34998 9.12988H4.75V9.11987Z" fill="currentColor"/>
                                <path d="M13.5502 19.7499H11.9502C10.9902 19.7499 10.2002 18.9599 10.2002 17.9999V6.18994C10.2002 5.22994 10.9902 4.43994 11.9502 4.43994H13.5502C14.5102 4.43994 15.3002 5.22994 15.3002 6.18994V17.9999C15.3002 18.9599 14.5102 19.7499 13.5502 19.7499ZM11.9502 5.93994C11.8102 5.93994 11.7002 6.04994 11.7002 6.18994V17.9999C11.7002 18.1399 11.8102 18.2499 11.9502 18.2499H13.5502C13.6902 18.2499 13.8002 18.1399 13.8002 17.9999V6.18994C13.8002 6.04994 13.6902 5.93994 13.5502 5.93994H11.9502Z" fill="currentColor"/>
                                <path d="M20.7499 19.75H19.1499C18.1899 19.75 17.3999 18.96 17.3999 18V3C17.3999 2.04 18.1899 1.25 19.1499 1.25H20.7499C21.7099 1.25 22.4999 2.04 22.4999 3V18C22.4999 18.96 21.7099 19.75 20.7499 19.75ZM19.1499 2.75C19.0099 2.75 18.8999 2.86 18.8999 3V18C18.8999 18.14 19.0099 18.25 19.1499 18.25H20.7499C20.8899 18.25 20.9999 18.14 20.9999 18V3C20.9999 2.86 20.8899 2.75 20.7499 2.75H19.1499Z" fill="currentColor"/>
                            </svg>
                            Diagram Bar
                        </a> 
                    </li>
                </ul>
            </div>
            {{-- Tab End --}}
        
            {{-- Tab Pendidikan Start --}}
            <div>
                {{-- Pie Start --}}
                <div id="grafik-pendidikan" x-show="activeTab === 1" class="p-5 w-1/2 mx-auto">
                    <canvas id="chart-pendidikan"></canvas>
                </div>
                {{-- Pie End --}}
        
                {{-- Bar Start --}}
                <div id="grafik-pendidikan" x-show="activeTab === 2" class="p-5 w-1/2 mx-auto">
                    <canvas id="chart-pendidikan-bar"></canvas>
                </div>
                {{-- Bar End --}}
            </div>
            {{-- Tab Content End --}}
        </div>
    </div>
    {{-- Grafik Pendidikan End --}}

    {{-- Grafik Perkawinan Start --}}
    <div>
        <h2 class="font-bold text-2xl text-center">Grafik Perkawinan Desa Klobur</h2>
        <h3 class="font-semibold text-lg text-center mb-9">Total Penduduk : {{ $totalPenduduk }}</h3>
        <div x-data="{ 
            activeTab:1,
            activeClass: 'text-white bg-[#198754] active group',
            inactiveClass : 'text-[#198754] hover:text-white hover:bg-[#198754]-300 group'
            }" x-cloak>
            {{-- Tab Start --}}
            <div class="flex justify-center">
                <ul class="flex flex-wrap -mb-px font-medium text-center text-gray-500 dark:text-gray-400">
                    <li class="mr-2">
                        <a href="#grafik-perkawinan" x-on:click="activeTab = 1" :class="activeTab === 1 ? activeClass : inactiveClass" class="inline-flex gap-2 items-center justify-center py-2 px-4 rounded-lg w-40 border-2 border-[#198754] hover:border-[#198754]-300">
                            <svg x-on:click="activeTab = 1" :class="activeTab === 1 ? activeClass : inactiveClass" class="w-5 h-5 text-gray-500 hover:text-white group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path d="M18.57 12.75H15.25C12.76 12.75 11.5 11.34 11.5 8.54996V5.67996C11.5 4.65996 11.62 3.19996 12.68 2.39996C13.57 1.73996 14.85 1.68996 16.74 2.23996C19.22 2.95996 21.29 5.02996 22.01 7.50996C22.56 9.38996 22.51 10.68 21.85 11.56C21.05 12.63 19.59 12.75 18.57 12.75ZM14.53 3.35996C14.12 3.35996 13.8 3.43996 13.59 3.59996C13.2 3.88996 13.01 4.56996 13.01 5.67996V8.55996C13.01 10.8 13.87 11.26 15.26 11.26H18.58C19.68 11.26 20.36 11.07 20.66 10.68C21.01 10.22 20.98 9.29996 20.59 7.94996C20.01 5.97996 18.31 4.26996 16.34 3.69996C15.6 3.46996 15 3.35996 14.53 3.35996Z" fill="currentColor"/>
                                <path d="M11.3199 22.7498C10.7899 22.7498 10.2499 22.7098 9.70988 22.6198C5.61988 21.9598 2.28988 18.6398 1.62988 14.5498C0.779883 9.28983 4.16988 4.32983 9.35988 3.26983C9.76988 3.18983 10.1599 3.44983 10.2499 3.84983C10.3299 4.25983 10.0699 4.64983 9.66988 4.73983C5.27988 5.63983 2.39988 9.83983 3.12988 14.3098C3.68988 17.7698 6.49988 20.5798 9.95988 21.1398C14.4499 21.8598 18.6399 18.9698 19.5299 14.5598C19.6099 14.1498 20.0099 13.8898 20.4099 13.9698C20.8199 14.0498 21.0799 14.4498 20.9999 14.8498C20.0499 19.5198 15.9699 22.7498 11.3199 22.7498Z" fill="currentColor"/>
                            </svg>
                            Diagram Pie
                        </a>
                    </li>
                    <li class="mr-2"> 
                        <a href="#grafik-perkawinan" x-on:click="activeTab = 2" :class="activeTab === 2 ? activeClass : inactiveClass" class="inline-flex gap-2 items-center justify-center py-2 px-4 rounded-lg w-40 border-2 border-[#198754] hover:border-[#198754]-300">
                            <svg x-on:click="activeTab = 2" :class="activeTab === 2 ? activeClass : inactiveClass" class="w-5 h-5 text-gray-500 hover:text-white group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path d="M21.75 22.75H3.75C3.34 22.75 3 22.41 3 22C3 21.59 3.34 21.25 3.75 21.25H21.75C22.16 21.25 22.5 21.59 22.5 22C22.5 22.41 22.16 22.75 21.75 22.75Z" fill="currentColor"/>
                                <path d="M6.34998 19.7499H4.75C3.79 19.7499 3 18.9599 3 17.9999V9.37988C3 8.41988 3.79 7.62988 4.75 7.62988H6.34998C7.30998 7.62988 8.09998 8.41988 8.09998 9.37988V17.9999C8.09998 18.9599 7.30998 19.7499 6.34998 19.7499ZM4.75 9.11987C4.61 9.11987 4.5 9.22987 4.5 9.36987V17.9999C4.5 18.1399 4.61 18.2499 4.75 18.2499H6.34998C6.48998 18.2499 6.59998 18.1399 6.59998 17.9999V9.37988C6.59998 9.23988 6.48998 9.12988 6.34998 9.12988H4.75V9.11987Z" fill="currentColor"/>
                                <path d="M13.5502 19.7499H11.9502C10.9902 19.7499 10.2002 18.9599 10.2002 17.9999V6.18994C10.2002 5.22994 10.9902 4.43994 11.9502 4.43994H13.5502C14.5102 4.43994 15.3002 5.22994 15.3002 6.18994V17.9999C15.3002 18.9599 14.5102 19.7499 13.5502 19.7499ZM11.9502 5.93994C11.8102 5.93994 11.7002 6.04994 11.7002 6.18994V17.9999C11.7002 18.1399 11.8102 18.2499 11.9502 18.2499H13.5502C13.6902 18.2499 13.8002 18.1399 13.8002 17.9999V6.18994C13.8002 6.04994 13.6902 5.93994 13.5502 5.93994H11.9502Z" fill="currentColor"/>
                                <path d="M20.7499 19.75H19.1499C18.1899 19.75 17.3999 18.96 17.3999 18V3C17.3999 2.04 18.1899 1.25 19.1499 1.25H20.7499C21.7099 1.25 22.4999 2.04 22.4999 3V18C22.4999 18.96 21.7099 19.75 20.7499 19.75ZM19.1499 2.75C19.0099 2.75 18.8999 2.86 18.8999 3V18C18.8999 18.14 19.0099 18.25 19.1499 18.25H20.7499C20.8899 18.25 20.9999 18.14 20.9999 18V3C20.9999 2.86 20.8899 2.75 20.7499 2.75H19.1499Z" fill="currentColor"/>
                            </svg>
                            Diagram Bar
                        </a> 
                    </li>
                </ul>
            </div>
            {{-- Tab End --}}
        
            {{-- Tab Perkawinan Start --}}
            <div>
                {{-- Pie Start --}}
                <div id="grafik-perkawinan" x-show="activeTab === 1" class="p-5 w-1/2 mx-auto">
                    <canvas id="chart-perkawinan"></canvas>
                </div>
                {{-- Pie End --}}
        
                {{-- Bar Start --}}
                <div id="grafik-perkawinan" x-show="activeTab === 2" class="p-5 w-1/2 mx-auto">
                    <canvas id="chart-perkawinan-bar"></canvas>
                </div>
                {{-- Bar End --}}
            </div>
            {{-- Tab Content End --}}
        </div>
    </div>
    {{-- Grafik Perkawinan End --}}

    {{-- Grafik Pekerjaan Start --}}
    <div>
        <h2 class="font-bold text-2xl text-center">Grafik Pekerjaan Desa Klobur</h2>
        <h3 class="font-semibold text-lg text-center mb-9">Total Penduduk : {{ $totalPenduduk }}</h3>
        <div x-data="{ 
            activeTab:1,
            activeClass: 'text-white bg-[#198754] active group',
            inactiveClass : 'text-[#198754] hover:text-white hover:bg-[#198754]-300 group'
            }" x-cloak>
            {{-- Tab Start --}}
            <div class="flex justify-center">
                <ul class="flex flex-wrap -mb-px font-medium text-center text-gray-500 dark:text-gray-400">
                    <li class="mr-2">
                        <a href="#grafik-pekerjaan" x-on:click="activeTab = 1" :class="activeTab === 1 ? activeClass : inactiveClass" class="inline-flex gap-2 items-center justify-center py-2 px-4 rounded-lg w-40 border-2 border-[#198754] hover:border-[#198754]-300">
                            <svg x-on:click="activeTab = 1" :class="activeTab === 1 ? activeClass : inactiveClass" class="w-5 h-5 text-gray-500 hover:text-white group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path d="M18.57 12.75H15.25C12.76 12.75 11.5 11.34 11.5 8.54996V5.67996C11.5 4.65996 11.62 3.19996 12.68 2.39996C13.57 1.73996 14.85 1.68996 16.74 2.23996C19.22 2.95996 21.29 5.02996 22.01 7.50996C22.56 9.38996 22.51 10.68 21.85 11.56C21.05 12.63 19.59 12.75 18.57 12.75ZM14.53 3.35996C14.12 3.35996 13.8 3.43996 13.59 3.59996C13.2 3.88996 13.01 4.56996 13.01 5.67996V8.55996C13.01 10.8 13.87 11.26 15.26 11.26H18.58C19.68 11.26 20.36 11.07 20.66 10.68C21.01 10.22 20.98 9.29996 20.59 7.94996C20.01 5.97996 18.31 4.26996 16.34 3.69996C15.6 3.46996 15 3.35996 14.53 3.35996Z" fill="currentColor"/>
                                <path d="M11.3199 22.7498C10.7899 22.7498 10.2499 22.7098 9.70988 22.6198C5.61988 21.9598 2.28988 18.6398 1.62988 14.5498C0.779883 9.28983 4.16988 4.32983 9.35988 3.26983C9.76988 3.18983 10.1599 3.44983 10.2499 3.84983C10.3299 4.25983 10.0699 4.64983 9.66988 4.73983C5.27988 5.63983 2.39988 9.83983 3.12988 14.3098C3.68988 17.7698 6.49988 20.5798 9.95988 21.1398C14.4499 21.8598 18.6399 18.9698 19.5299 14.5598C19.6099 14.1498 20.0099 13.8898 20.4099 13.9698C20.8199 14.0498 21.0799 14.4498 20.9999 14.8498C20.0499 19.5198 15.9699 22.7498 11.3199 22.7498Z" fill="currentColor"/>
                            </svg>
                            Diagram Pie
                        </a>
                    </li>
                    <li class="mr-2"> 
                        <a href="#grafik-pekerjaan" x-on:click="activeTab = 2" :class="activeTab === 2 ? activeClass : inactiveClass" class="inline-flex gap-2 items-center justify-center py-2 px-4 rounded-lg w-40 border-2 border-[#198754] hover:border-[#198754]-300">
                            <svg x-on:click="activeTab = 2" :class="activeTab === 2 ? activeClass : inactiveClass" class="w-5 h-5 text-gray-500 hover:text-white group-hover:text-white" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path d="M21.75 22.75H3.75C3.34 22.75 3 22.41 3 22C3 21.59 3.34 21.25 3.75 21.25H21.75C22.16 21.25 22.5 21.59 22.5 22C22.5 22.41 22.16 22.75 21.75 22.75Z" fill="currentColor"/>
                                <path d="M6.34998 19.7499H4.75C3.79 19.7499 3 18.9599 3 17.9999V9.37988C3 8.41988 3.79 7.62988 4.75 7.62988H6.34998C7.30998 7.62988 8.09998 8.41988 8.09998 9.37988V17.9999C8.09998 18.9599 7.30998 19.7499 6.34998 19.7499ZM4.75 9.11987C4.61 9.11987 4.5 9.22987 4.5 9.36987V17.9999C4.5 18.1399 4.61 18.2499 4.75 18.2499H6.34998C6.48998 18.2499 6.59998 18.1399 6.59998 17.9999V9.37988C6.59998 9.23988 6.48998 9.12988 6.34998 9.12988H4.75V9.11987Z" fill="currentColor"/>
                                <path d="M13.5502 19.7499H11.9502C10.9902 19.7499 10.2002 18.9599 10.2002 17.9999V6.18994C10.2002 5.22994 10.9902 4.43994 11.9502 4.43994H13.5502C14.5102 4.43994 15.3002 5.22994 15.3002 6.18994V17.9999C15.3002 18.9599 14.5102 19.7499 13.5502 19.7499ZM11.9502 5.93994C11.8102 5.93994 11.7002 6.04994 11.7002 6.18994V17.9999C11.7002 18.1399 11.8102 18.2499 11.9502 18.2499H13.5502C13.6902 18.2499 13.8002 18.1399 13.8002 17.9999V6.18994C13.8002 6.04994 13.6902 5.93994 13.5502 5.93994H11.9502Z" fill="currentColor"/>
                                <path d="M20.7499 19.75H19.1499C18.1899 19.75 17.3999 18.96 17.3999 18V3C17.3999 2.04 18.1899 1.25 19.1499 1.25H20.7499C21.7099 1.25 22.4999 2.04 22.4999 3V18C22.4999 18.96 21.7099 19.75 20.7499 19.75ZM19.1499 2.75C19.0099 2.75 18.8999 2.86 18.8999 3V18C18.8999 18.14 19.0099 18.25 19.1499 18.25H20.7499C20.8899 18.25 20.9999 18.14 20.9999 18V3C20.9999 2.86 20.8899 2.75 20.7499 2.75H19.1499Z" fill="currentColor"/>
                            </svg>
                            Diagram Bar
                        </a> 
                    </li>
                </ul>
            </div>
            {{-- Tab End --}}
        
            {{-- Tab Pekerjaan Start --}}
            <div>
                {{-- Pie Start --}}
                <div id="grafik-pekerjaan" x-show="activeTab === 1" class="p-5 w-1/2 mx-auto">
                    <canvas id="chart-pekerjaan"></canvas>
                </div>
                {{-- Pie End --}}
        
                {{-- Bar Start --}}
                <div id="grafik-pekerjaan" x-show="activeTab === 2" class="p-5 w-1/2 mx-auto">
                    <canvas id="chart-pekerjaan-bar"></canvas>
                </div>
                {{-- Bar End --}}
            </div>
            {{-- Tab Content End --}}
        </div>
</div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('js/statistik-agama.js') }}"></script>
<script src="{{ asset('js/statistik-pendidikan.js') }}"></script>
<script src="{{ asset('js/statistik-perkawinan.js') }}"></script>
<script src="{{ asset('js/statistik-pekerjaan.js') }}"></script>
@endsection