@extends('layouts.layout-admin') 
@section('title', 'APBDes')

@section('other')
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection

@section('header')
<<<<<<< HEAD
<p class="text-sm md:text-base"><span class="text-jingga">Kelola APBDes</span> / Pendapatan</p>
=======
<p class="text-sm md:text-base"><span class="text-green">Kelola APBDes</span> / Pendapatan</p>
>>>>>>> fix
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
<<<<<<< HEAD
            <input type="search" id="default-search" class="block w-full px-4 py-3 pr-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-jingga-500 focus:border-jingga-500" placeholder="Cari data apbdes" required>
=======
            <input type="search" id="default-search" class="block w-full px-4 py-3 pr-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-green-500" placeholder="Cari data apbdes" required>
>>>>>>> fix
        </div>
    </form>
    <!-- Search End -->

<<<<<<< HEAD
    {{-- <button type="button" onclick="window.location.href='/tambah-apbdes'" class="flex items-center gap-3 text-white bg-jingga hover:bg-jingga-600 focus:ring-2 focus:outline-none focus:ring-jingga-300 font-medium rounded-lg px-4 py-2 text-center mr-3 md:mr-0 text-lg">
=======
    {{-- <button type="button" onclick="window.location.href='/tambah-apbdes'" class="flex items-center gap-3 text-white bg-green hover:bg-green-600 focus:ring-2 focus:outline-none focus:ring-green-300 font-medium rounded-lg px-4 py-2 text-center mr-3 md:mr-0 text-lg">
>>>>>>> fix
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 16 16" fill="none">
            <path d="M8 0C8.55228 0 9 0.447715 9 1V7H15C15.5523 7 16 7.44772 16 8C16 8.55228 15.5523 9 15 9H9V15C9 15.5523 8.55228 16 8 16C7.44772 16 7 15.5523 7 15V9H1C0.447715 9 0 8.55228 0 8C0 7.44772 0.447715 7 1 7H7V1C7 0.447715 7.44772 0 8 0Z" fill="#F8F9FA"/>
            <path d="M2.5 8H13.5M8 2.5L8 13.5" stroke="#F8F9FA" stroke-linecap="round" stroke-linejoin="round"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 2C8.27614 2 8.5 2.22386 8.5 2.5V7.5H13.5C13.7761 7.5 14 7.72386 14 8C14 8.27614 13.7761 8.5 13.5 8.5H8.5V13.5C8.5 13.7761 8.27614 14 8 14C7.72386 14 7.5 13.7761 7.5 13.5V8.5H2.5C2.22386 8.5 2 8.27614 2 8C2 7.72386 2.22386 7.5 2.5 7.5H7.5V2.5C7.5 2.22386 7.72386 2 8 2Z" fill="#F8F9FA"/>
        </svg>
        Tambah Data
    </button> --}}
</div>
@endsection

@section('content')
<div x-data="{ 
    activeTab:1,
<<<<<<< HEAD
    activeClass: 'text-jingga border-jingga active group',
    inactiveClass : 'border-transparent hover:text-jingga hover:border-jingga group'
=======
    activeClass: 'text-green border-green active group',
    inactiveClass : 'border-transparent hover:text-green hover:border-green group'
>>>>>>> fix
    }" x-cloak>
    <div class="flex justify-between">
        {{-- Tab Start --}}
        <ul class="flex flex-wrap -mb-px font-medium text-center text-gray-500 dark:text-gray-400">
            <li class="mr-2">
                <a href="#" x-on:click="activeTab = 1" :class="activeTab === 1 ? activeClass : inactiveClass" class="inline-flex gap-2 items-center justify-center py-2 px-4 border-b-2 rounded-t-lg">
<<<<<<< HEAD
                    <svg x-on:click="activeTab = 1" :class="activeTab === 1 ? activeClass : inactiveClass" class="w-5 h-5 text-gray-500 hover:text-jingga group-hover:text-jingga" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
=======
                    <svg x-on:click="activeTab = 1" :class="activeTab === 1 ? activeClass : inactiveClass" class="w-5 h-5 text-gray-500 hover:text-green group-hover:text-green" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
>>>>>>> fix
                        <path d="M13.6501 16.25H11.7701C10.4401 16.25 9.3501 15.13 9.3501 13.75C9.3501 13.34 9.6901 13 10.1001 13C10.5101 13 10.8501 13.34 10.8501 13.75C10.8501 14.3 11.2601 14.75 11.7701 14.75H13.6501C14.0401 14.75 14.3501 14.4 14.3501 13.97C14.3501 13.43 14.2001 13.35 13.8601 13.23L10.8501 12.18C10.2101 11.96 9.3501 11.49 9.3501 10.02C9.3501 8.76999 10.3401 7.73999 11.5501 7.73999H13.4301C14.7601 7.73999 15.8501 8.85999 15.8501 10.24C15.8501 10.65 15.5101 10.99 15.1001 10.99C14.6901 10.99 14.3501 10.65 14.3501 10.24C14.3501 9.68999 13.9401 9.23999 13.4301 9.23999H11.5501C11.1601 9.23999 10.8501 9.58999 10.8501 10.02C10.8501 10.56 11.0001 10.64 11.3401 10.76L14.3501 11.81C14.9901 12.03 15.8501 12.5 15.8501 13.97C15.8501 15.23 14.8601 16.25 13.6501 16.25Z" fill="currentColor"/>
                        <path d="M12.6001 17.25C12.1901 17.25 11.8501 16.91 11.8501 16.5V7.5C11.8501 7.09 12.1901 6.75 12.6001 6.75C13.0101 6.75 13.3501 7.09 13.3501 7.5V16.5C13.3501 16.91 13.0101 17.25 12.6001 17.25Z" fill="currentColor"/>
                        <path d="M12.6001 22.75C6.6701 22.75 1.8501 17.93 1.8501 12C1.8501 6.07 6.6701 1.25 12.6001 1.25C13.0101 1.25 13.3501 1.59 13.3501 2C13.3501 2.41 13.0101 2.75 12.6001 2.75C7.5001 2.75 3.3501 6.9 3.3501 12C3.3501 17.1 7.5001 21.25 12.6001 21.25C17.7001 21.25 21.8501 17.1 21.8501 12C21.8501 11.59 22.1901 11.25 22.6001 11.25C23.0101 11.25 23.3501 11.59 23.3501 12C23.3501 17.93 18.5301 22.75 12.6001 22.75Z" fill="currentColor"/>
                        <path d="M21.6001 7.75H17.6001C17.1901 7.75 16.8501 7.41 16.8501 7V3C16.8501 2.59 17.1901 2.25 17.6001 2.25C18.0101 2.25 18.3501 2.59 18.3501 3V6.25H21.6001C22.0101 6.25 22.3501 6.59 22.3501 7C22.3501 7.41 22.0101 7.75 21.6001 7.75Z" fill="currentColor"/>
                        <path d="M17.6 7.74994C17.41 7.74994 17.22 7.67994 17.07 7.52994C16.78 7.23994 16.78 6.75994 17.07 6.46994L22.07 1.46994C22.36 1.17994 22.84 1.17994 23.13 1.46994C23.42 1.75994 23.42 2.23994 23.13 2.52994L18.13 7.52994C17.98 7.67994 17.79 7.74994 17.6 7.74994Z" fill="currentColor"/>
                    </svg>
                    Pendapatan
                </a>
            </li>
            <li class="mr-2"> 
                <a href="#" x-on:click="activeTab = 2" :class="activeTab === 2 ? activeClass : inactiveClass" class="inline-flex gap-2 items-center justify-center py-2 px-4 border-b-2 rounded-t-lg">
<<<<<<< HEAD
                    <svg x-on:click="activeTab = 2" :class="activeTab === 2 ? activeClass : inactiveClass" class="w-5 h-5 text-gray-500 hover:text-jingga group-hover:text-jingga" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
=======
                    <svg x-on:click="activeTab = 2" :class="activeTab === 2 ? activeClass : inactiveClass" class="w-5 h-5 text-gray-500 hover:text-green group-hover:text-green" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
>>>>>>> fix
                        <path d="M17.2902 22.75H8.30023C6.58023 22.75 5.29023 22.29 4.49023 21.38C3.69023 20.47 3.38022 19.15 3.59022 17.44L4.49023 9.94C4.75023 7.73 5.31023 5.75 9.21023 5.75H16.4102C20.3002 5.75 20.8602 7.73 21.1302 9.94L22.0302 17.44C22.2302 19.15 21.9302 20.48 21.1302 21.38C20.3002 22.29 19.0202 22.75 17.2902 22.75ZM9.20022 7.25C6.32022 7.25 6.18023 8.38999 5.97023 10.11L5.07023 17.61C4.92023 18.88 5.10023 19.81 5.61023 20.38C6.12023 20.95 7.02023 21.24 8.30023 21.24H17.2902C18.5702 21.24 19.4702 20.95 19.9802 20.38C20.4902 19.81 20.6702 18.88 20.5202 17.61L19.6202 10.11C19.4102 8.37999 19.2802 7.25 16.3902 7.25H9.20022Z" fill="currentColor"/>
                        <path d="M16.8003 8.75C16.3903 8.75 16.0503 8.41 16.0503 8V4.5C16.0503 3.42 15.3803 2.75 14.3003 2.75H11.3003C10.2203 2.75 9.55029 3.42 9.55029 4.5V8C9.55029 8.41 9.21029 8.75 8.80029 8.75C8.39029 8.75 8.05029 8.41 8.05029 8V4.5C8.05029 2.59 9.39029 1.25 11.3003 1.25H14.3003C16.2103 1.25 17.5503 2.59 17.5503 4.5V8C17.5503 8.41 17.2103 8.75 16.8003 8.75Z" fill="currentColor"/>
                        <path d="M21.2103 17.78H8.80029C8.39029 17.78 8.05029 17.44 8.05029 17.03C8.05029 16.62 8.39029 16.28 8.80029 16.28H21.2103C21.6203 16.28 21.9603 16.62 21.9603 17.03C21.9603 17.44 21.6203 17.78 21.2103 17.78Z" fill="currentColor"/>
                    </svg>
                    Belanja
                </a> 
            </li>
            <li class="mr-2"> 
                <a href="#" x-on:click="activeTab = 3" :class="activeTab === 3 ? activeClass : inactiveClass" class="inline-flex gap-2 items-center justify-center py-2 px-4 border-b-2 rounded-t-lg">
<<<<<<< HEAD
                    <svg x-on:click="activeTab = 3" :class="activeTab === 3 ? activeClass : inactiveClass" class="w-5 h-5 text-gray-500 hover:text-jingga group-hover:text-jingga" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
=======
                    <svg x-on:click="activeTab = 3" :class="activeTab === 3 ? activeClass : inactiveClass" class="w-5 h-5 text-gray-500 hover:text-green group-hover:text-green" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
>>>>>>> fix
                        <path d="M22 10.75H2C1.59 10.75 1.25 10.41 1.25 10C1.25 9.59 1.59 9.25 2 9.25H22C22.41 9.25 22.75 9.59 22.75 10C22.75 10.41 22.41 10.75 22 10.75Z" fill="currentColor"/>
                        <path d="M11.5502 21.25H6.44025C2.46025 21.25 1.24023 20.05 1.24023 16.11V7.89001C1.24023 4.74001 1.91022 2.99001 5.48022 2.78001C5.78022 2.77001 6.10025 2.76001 6.44025 2.76001H17.5502C21.5302 2.76001 22.7502 3.96001 22.7502 7.90001V12.31C22.7502 12.72 22.4102 13.06 22.0002 13.06C21.5902 13.06 21.2502 12.72 21.2502 12.31V7.90001C21.2502 4.81001 20.7002 4.26001 17.5502 4.26001H6.44025C6.12025 4.26001 5.83023 4.27001 5.55023 4.28001C3.38023 4.41001 2.74023 4.90001 2.74023 7.90001V16.12C2.74023 19.21 3.29025 19.76 6.44025 19.76H11.5502C11.9602 19.76 12.3002 20.1 12.3002 20.51C12.3002 20.92 11.9702 21.25 11.5502 21.25Z" fill="currentColor"/>
                        <path d="M10 16.75H6C5.59 16.75 5.25 16.41 5.25 16C5.25 15.59 5.59 15.25 6 15.25H10C10.41 15.25 10.75 15.59 10.75 16C10.75 16.41 10.41 16.75 10 16.75Z" fill="currentColor"/>
                        <path d="M18 22.75C16.34 22.75 14.78 21.87 13.94 20.44C13.49 19.72 13.25 18.87 13.25 18C13.25 15.38 15.38 13.25 18 13.25C20.62 13.25 22.75 15.38 22.75 18C22.75 18.87 22.51 19.72 22.06 20.45C21.22 21.87 19.66 22.75 18 22.75ZM18 14.75C16.21 14.75 14.75 16.21 14.75 18C14.75 18.59 14.91 19.17 15.22 19.67C15.8 20.65 16.87 21.25 18 21.25C19.13 21.25 20.2 20.65 20.78 19.68C21.09 19.17 21.25 18.6 21.25 18C21.25 16.21 19.79 14.75 18 14.75Z" fill="currentColor"/>
                        <path d="M17.4299 19.7401C17.2399 19.7401 17.0499 19.6701 16.8999 19.5201L15.9099 18.5301C15.6199 18.2401 15.6199 17.7601 15.9099 17.4701C16.1999 17.1801 16.6799 17.1801 16.9699 17.4701L17.4499 17.9501L19.0499 16.4701C19.3499 16.1901 19.8299 16.2101 20.1099 16.5101C20.3899 16.8101 20.3699 17.2901 20.0699 17.5701L17.9399 19.54C17.7899 19.67 17.6099 19.7401 17.4299 19.7401Z" fill="currentColor"/>
                    </svg>
                    Pembiayaan
                </a> 
            </li>
            <li class="mr-2"> 
                <a href="#" x-on:click="activeTab = 4" :class="activeTab === 4 ? activeClass : inactiveClass" class="inline-flex gap-2 items-center justify-center py-2 px-4 border-b-2 rounded-t-lg">
<<<<<<< HEAD
                    <svg x-on:click="activeTab = 4" :class="activeTab === 4 ? activeClass : inactiveClass" class="w-5 h-5 text-gray-500 hover:text-jingga group-hover:text-jingga" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
=======
                    <svg x-on:click="activeTab = 4" :class="activeTab === 4 ? activeClass : inactiveClass" class="w-5 h-5 text-gray-500 hover:text-green group-hover:text-green" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
>>>>>>> fix
                        <path d="M12.7002 22.75C11.9202 22.75 11.1602 22.35 10.6402 21.65L9.6302 20.3C9.4202 20.02 9.1402 19.86 8.8402 19.84C8.5402 19.83 8.2402 19.96 8.0002 20.21L7.4302 19.7L7.9802 20.21C6.5402 21.75 5.4302 21.63 4.9002 21.42C4.3602 21.21 3.4502 20.52 3.4502 18.3V7.04C3.4502 2.6 4.7302 1.25 8.9202 1.25H16.4802C20.6702 1.25 21.9502 2.6 21.9502 7.04V18.3C21.9502 20.51 21.0402 21.2 20.5002 21.42C19.9702 21.63 18.8702 21.75 17.4202 20.21C17.1802 19.95 16.8802 19.81 16.5702 19.84C16.2702 19.86 15.9802 20.02 15.7702 20.3L14.7602 21.65C14.2402 22.35 13.4802 22.75 12.7002 22.75ZM8.7802 18.33C8.8202 18.33 8.8702 18.33 8.9102 18.33C9.6502 18.37 10.3502 18.76 10.8202 19.39L11.8302 20.74C12.3202 21.39 13.0702 21.39 13.5602 20.74L14.5702 19.39C15.0502 18.76 15.7402 18.37 16.4902 18.33C17.2302 18.29 17.9702 18.6 18.5102 19.18C19.2702 19.99 19.7602 20.09 19.9402 20.02C20.1802 19.92 20.4402 19.34 20.4402 18.3V7.04C20.4402 3.43 19.8102 2.75 16.4702 2.75H8.9202C5.5802 2.75 4.9502 3.43 4.9502 7.04V18.3C4.9502 19.35 5.2102 19.93 5.4502 20.02C5.6202 20.09 6.1202 19.99 6.8802 19.18C7.4202 18.63 8.0902 18.33 8.7802 18.33Z" fill="currentColor"/>
                        <path d="M16.9302 11.75H11.4302C11.0202 11.75 10.6802 11.41 10.6802 11C10.6802 10.59 11.0202 10.25 11.4302 10.25H16.9302C17.3402 10.25 17.6802 10.59 17.6802 11C17.6802 11.41 17.3402 11.75 16.9302 11.75Z" fill="currentColor"/>
                        <path d="M16.9302 7.75H11.4302C11.0202 7.75 10.6802 7.41 10.6802 7C10.6802 6.59 11.0202 6.25 11.4302 6.25H16.9302C17.3402 6.25 17.6802 6.59 17.6802 7C17.6802 7.41 17.3402 7.75 16.9302 7.75Z" fill="currentColor"/>
                        <path d="M8.47998 8C7.92998 8 7.47998 7.55 7.47998 7C7.47998 6.45 7.92998 6 8.47998 6C9.02998 6 9.47998 6.45 9.47998 7C9.47998 7.55 9.02998 8 8.47998 8Z" fill="currentColor"/>
                        <path d="M8.47998 12C7.92998 12 7.47998 11.55 7.47998 11C7.47998 10.45 7.92998 10 8.47998 10C9.02998 10 9.47998 10.45 9.47998 11C9.47998 11.55 9.02998 12 8.47998 12Z" fill="currentColor"/>
                    </svg>
                    Laporan
                </a> 
            </li>
            <li class="mr-2"> 
                <a href="#" x-on:click="activeTab = 5" :class="activeTab === 5 ? activeClass : inactiveClass" class="inline-flex gap-2 items-center justify-center py-2 px-4 border-b-2 rounded-t-lg">
<<<<<<< HEAD
                    <svg x-on:click="activeTab = 5" :class="activeTab === 5 ? activeClass : inactiveClass" class="w-5 h-5 text-gray-500 hover:text-jingga group-hover:text-jingga" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
=======
                    <svg x-on:click="activeTab = 5" :class="activeTab === 5 ? activeClass : inactiveClass" class="w-5 h-5 text-gray-500 hover:text-green group-hover:text-green" xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
>>>>>>> fix
                        <path d="M21.3999 22.75H3.3999C2.9899 22.75 2.6499 22.41 2.6499 22C2.6499 21.59 2.9899 21.25 3.3999 21.25H21.3999C21.8099 21.25 22.1499 21.59 22.1499 22C22.1499 22.41 21.8099 22.75 21.3999 22.75Z" fill="currentColor"/>
                        <path d="M5.99988 19.7499H4.3999C3.4399 19.7499 2.6499 18.9599 2.6499 17.9999V9.37988C2.6499 8.41988 3.4399 7.62988 4.3999 7.62988H5.99988C6.95988 7.62988 7.74988 8.41988 7.74988 9.37988V17.9999C7.74988 18.9599 6.95988 19.7499 5.99988 19.7499ZM4.3999 9.11987C4.2599 9.11987 4.1499 9.22987 4.1499 9.36987V17.9999C4.1499 18.1399 4.2599 18.2499 4.3999 18.2499H5.99988C6.13988 18.2499 6.24988 18.1399 6.24988 17.9999V9.37988C6.24988 9.23988 6.13988 9.12988 5.99988 9.12988H4.3999V9.11987Z" fill="currentColor"/>
                        <path d="M13.2001 19.7499H11.6001C10.6401 19.7499 9.8501 18.9599 9.8501 17.9999V6.18994C9.8501 5.22994 10.6401 4.43994 11.6001 4.43994H13.2001C14.1601 4.43994 14.9501 5.22994 14.9501 6.18994V17.9999C14.9501 18.9599 14.1601 19.7499 13.2001 19.7499ZM11.6001 5.93994C11.4601 5.93994 11.3501 6.04994 11.3501 6.18994V17.9999C11.3501 18.1399 11.4601 18.2499 11.6001 18.2499H13.2001C13.3401 18.2499 13.4501 18.1399 13.4501 17.9999V6.18994C13.4501 6.04994 13.3401 5.93994 13.2001 5.93994H11.6001Z" fill="currentColor"/>
                        <path d="M20.3998 19.75H18.7998C17.8398 19.75 17.0498 18.96 17.0498 18V3C17.0498 2.04 17.8398 1.25 18.7998 1.25H20.3998C21.3598 1.25 22.1498 2.04 22.1498 3V18C22.1498 18.96 21.3598 19.75 20.3998 19.75ZM18.7998 2.75C18.6598 2.75 18.5498 2.86 18.5498 3V18C18.5498 18.14 18.6598 18.25 18.7998 18.25H20.3998C20.5398 18.25 20.6498 18.14 20.6498 18V3C20.6498 2.86 20.5398 2.75 20.3998 2.75H18.7998Z" fill="currentColor"/>
                    </svg>
                    Grafik
                </a> 
            </li>
        </ul>
        {{-- Tab End --}}

        <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3" type="button">
            <svg class="w-3 h-3 text-gray-500 mr-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
                </svg>
            Tahun
            <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
        </button>
        <!-- Dropdown menu -->
        <div id="dropdownRadio" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 rounded-lg shadow" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
            <ul class="p-3 space-y-1 text-sm text-gray-700" aria-labelledby="dropdownRadioButton">
                <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100">
                        <input id="filter-radio-example-1" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                        <label for="filter-radio-example-1" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">2023</label>
                    </div>
                </li>
                <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100">
                        <input checked="" id="filter-radio-example-2" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                        <label for="filter-radio-example-2" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">2022</label>
                    </div>
                </li>
                <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100">
                        <input id="filter-radio-example-3" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2">
                        <label for="filter-radio-example-3" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">2021</label>
                    </div>
                </li>
                <li>
                    <div class="flex items-center p-2 rounded hover:bg-gray-100 dark:hover:bg-gray-600">
                        <input id="filter-radio-example-4" type="radio" value="" name="filter-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 dark:bg-gray-700">
                        <label for="filter-radio-example-4" class="w-full ml-2 text-sm font-medium text-gray-900 rounded">2020</label>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    {{-- Tab Content Start --}}
    <div class="mt-6">
        {{-- Content Pendapatan Start --}}
        <div x-show="activeTab === 1">
            <div class="relative overflow-x-auto">
                <div class="flex items-center gap-5 justify-end">
<<<<<<< HEAD
                    <button type="button" onclick="window.location.href='/tambah-apbdes'" class="flex items-center gap-3 text-white bg-jingga hover:bg-jingga-600 focus:ring-2 focus:outline-none focus:ring-jingga-300 font-medium rounded-lg px-4 py-2 text-center mr-3 md:mr-0 text-lg">
=======
                    <button type="button" onclick="window.location.href='/tambah-apbdes'" class="flex items-center gap-3 text-white bg-green hover:bg-green-600 focus:ring-2 focus:outline-none focus:ring-green-300 font-medium rounded-lg px-4 py-2 text-center mr-3 md:mr-0 text-lg">
>>>>>>> fix
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 16 16" fill="none">
                            <path d="M8 0C8.55228 0 9 0.447715 9 1V7H15C15.5523 7 16 7.44772 16 8C16 8.55228 15.5523 9 15 9H9V15C9 15.5523 8.55228 16 8 16C7.44772 16 7 15.5523 7 15V9H1C0.447715 9 0 8.55228 0 8C0 7.44772 0.447715 7 1 7H7V1C7 0.447715 7.44772 0 8 0Z" fill="#F8F9FA"/>
                            <path d="M2.5 8H13.5M8 2.5L8 13.5" stroke="#F8F9FA" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 2C8.27614 2 8.5 2.22386 8.5 2.5V7.5H13.5C13.7761 7.5 14 7.72386 14 8C14 8.27614 13.7761 8.5 13.5 8.5H8.5V13.5C8.5 13.7761 8.27614 14 8 14C7.72386 14 7.5 13.7761 7.5 13.5V8.5H2.5C2.22386 8.5 2 8.27614 2 8C2 7.72386 2.22386 7.5 2.5 7.5H7.5V2.5C7.5 2.22386 7.72386 2 8 2Z" fill="#F8F9FA"/>
                        </svg>
                        Tambah Data
                    </button>
                </div>
                <table class="w-full text-sm text-abu-700 border">
<<<<<<< HEAD
                    <thead class="text-center text-white uppercase bg-jingga border-b">
=======
                    <thead class="text-center text-white uppercase bg-green border-b">
>>>>>>> fix
                        <tr>
                            <th scope="col" class="px-6 py-3 border-r">
                                Tindakan
                            </th>
                            <th scope="col" class="px-3 py-3 border-r">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 border-r">
                                Rincian
                            </th>
                            <th scope="col" class="px-6 py-3 border-r">
                                Anggaran
                            </th>
                            <th scope="col" class="px-6 py-3 border-r">
                                Realisasi
                            </th>
                            <th scope="col" class="px-6 py-3 border-r">
                                Ditambahkan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Diperbarui
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
                            <td class="px-3 py-4 border-r whitespace-nowrap">
                                1
                            </td>
                            <th scope="row" class="px-6 py-4 border-r font-medium whitespace-nowrap">
                                Pemberian Bupati
                            </th>
                            <td class="px-6 py-4 border-r whitespace-nowrap">
                                <span>Rp </span>2.000.000.000
                            </td>
                            <td class="px-6 py-4 border-r">
                                <span>Rp </span>20.000
                            </td>
                            <td class="px-6 py-4 border-r whitespace-nowrap">
                                11/02/2023 14:42:23
                            </td>
                            <td class="px-6 py-4 border-r">
                                11/02/2023 14:42:23
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
                            <td class="px-3 py-4 border-r whitespace-nowrap">
                                2
                            </td>
                            <th scope="row" class="px-6 py-4 border-r font-medium whitespace-nowrap">
                                Pemberian Daffa
                            </th>
                            <td class="px-6 py-4 border-r whitespace-nowrap">
                                <span>Rp </span>2.000.000.000
                            </td>
                            <td class="px-6 py-4 border-r">
                                <span>Rp </span>20.000
                            </td>
                            <td class="px-6 py-4 border-r whitespace-nowrap">
                                11/02/2023 14:42:23
                            </td>
                            <td class="px-6 py-4 border-r">
                                11/02/2023 14:42:23
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- Content Pendapatan End --}}

        {{-- Content Belanja Start --}}
        <div x-show="activeTab === 2">
            <div class="relative overflow-x-auto">
                <div class="flex items-center gap-5 justify-end">
<<<<<<< HEAD
                    <button type="button" onclick="window.location.href='/tambah-apbdes'" class="flex items-center gap-3 text-white bg-jingga hover:bg-jingga-600 focus:ring-2 focus:outline-none focus:ring-jingga-300 font-medium rounded-lg px-4 py-2 text-center mr-3 md:mr-0 text-lg">
=======
                    <button type="button" onclick="window.location.href='/tambah-apbdes'" class="flex items-center gap-3 text-white bg-green hover:bg-green-600 focus:ring-2 focus:outline-none focus:ring-green-300 font-medium rounded-lg px-4 py-2 text-center mr-3 md:mr-0 text-lg">
>>>>>>> fix
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 16 16" fill="none">
                            <path d="M8 0C8.55228 0 9 0.447715 9 1V7H15C15.5523 7 16 7.44772 16 8C16 8.55228 15.5523 9 15 9H9V15C9 15.5523 8.55228 16 8 16C7.44772 16 7 15.5523 7 15V9H1C0.447715 9 0 8.55228 0 8C0 7.44772 0.447715 7 1 7H7V1C7 0.447715 7.44772 0 8 0Z" fill="#F8F9FA"/>
                            <path d="M2.5 8H13.5M8 2.5L8 13.5" stroke="#F8F9FA" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 2C8.27614 2 8.5 2.22386 8.5 2.5V7.5H13.5C13.7761 7.5 14 7.72386 14 8C14 8.27614 13.7761 8.5 13.5 8.5H8.5V13.5C8.5 13.7761 8.27614 14 8 14C7.72386 14 7.5 13.7761 7.5 13.5V8.5H2.5C2.22386 8.5 2 8.27614 2 8C2 7.72386 2.22386 7.5 2.5 7.5H7.5V2.5C7.5 2.22386 7.72386 2 8 2Z" fill="#F8F9FA"/>
                        </svg>
                        Tambah Data
                    </button>
                </div>
                <table class="w-full text-sm text-abu-700 border">
<<<<<<< HEAD
                    <thead class="text-center text-white uppercase bg-jingga border-b">
=======
                    <thead class="text-center text-white uppercase bg-green border-b">
>>>>>>> fix
                        <tr>
                            <th scope="col" class="px-6 py-3 border-r">
                                Tindakan
                            </th>
                            <th scope="col" class="px-3 py-3 border-r">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 border-r">
                                Rincian
                            </th>
                            <th scope="col" class="px-6 py-3 border-r">
                                Anggaran
                            </th>
                            <th scope="col" class="px-6 py-3 border-r">
                                Realisasi
                            </th>
                            <th scope="col" class="px-6 py-3 border-r">
                                Ditambahkan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Diperbarui
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
                            <td class="px-3 py-4 border-r whitespace-nowrap">
                                1
                            </td>
                            <th scope="row" class="px-6 py-4 border-r font-medium whitespace-nowrap">
                                Belanja Bupati
                            </th>
                            <td class="px-6 py-4 border-r whitespace-nowrap">
                                <span>Rp </span>2.000.000.000
                            </td>
                            <td class="px-6 py-4 border-r">
                                <span>Rp </span>20.000
                            </td>
                            <td class="px-6 py-4 border-r whitespace-nowrap">
                                11/02/2023 14:42:23
                            </td>
                            <td class="px-6 py-4 border-r">
                                11/02/2023 14:42:23
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
                            <td class="px-3 py-4 border-r whitespace-nowrap">
                                2
                            </td>
                            <th scope="row" class="px-6 py-4 border-r font-medium whitespace-nowrap">
                                Belanja Daffa
                            </th>
                            <td class="px-6 py-4 border-r whitespace-nowrap">
                                <span>Rp </span>2.000.000.000
                            </td>
                            <td class="px-6 py-4 border-r">
                                <span>Rp </span>20.000
                            </td>
                            <td class="px-6 py-4 border-r whitespace-nowrap">
                                11/02/2023 14:42:23
                            </td>
                            <td class="px-6 py-4 border-r">
                                11/02/2023 14:42:23
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- Content Belanja End --}}

        {{-- Content Pembiayaan Start --}}
        <div x-show="activeTab === 3">
            <div class="relative overflow-x-auto">
                <div class="flex items-center gap-5 justify-end">
<<<<<<< HEAD
                    <button type="button" onclick="window.location.href='/tambah-apbdes'" class="flex items-center gap-3 text-white bg-jingga hover:bg-jingga-600 focus:ring-2 focus:outline-none focus:ring-jingga-300 font-medium rounded-lg px-4 py-2 text-center mr-3 md:mr-0 text-lg">
=======
                    <button type="button" onclick="window.location.href='/tambah-apbdes'" class="flex items-center gap-3 text-white bg-green hover:bg-green-600 focus:ring-2 focus:outline-none focus:ring-green-300 font-medium rounded-lg px-4 py-2 text-center mr-3 md:mr-0 text-lg">
>>>>>>> fix
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 16 16" fill="none">
                            <path d="M8 0C8.55228 0 9 0.447715 9 1V7H15C15.5523 7 16 7.44772 16 8C16 8.55228 15.5523 9 15 9H9V15C9 15.5523 8.55228 16 8 16C7.44772 16 7 15.5523 7 15V9H1C0.447715 9 0 8.55228 0 8C0 7.44772 0.447715 7 1 7H7V1C7 0.447715 7.44772 0 8 0Z" fill="#F8F9FA"/>
                            <path d="M2.5 8H13.5M8 2.5L8 13.5" stroke="#F8F9FA" stroke-linecap="round" stroke-linejoin="round"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 2C8.27614 2 8.5 2.22386 8.5 2.5V7.5H13.5C13.7761 7.5 14 7.72386 14 8C14 8.27614 13.7761 8.5 13.5 8.5H8.5V13.5C8.5 13.7761 8.27614 14 8 14C7.72386 14 7.5 13.7761 7.5 13.5V8.5H2.5C2.22386 8.5 2 8.27614 2 8C2 7.72386 2.22386 7.5 2.5 7.5H7.5V2.5C7.5 2.22386 7.72386 2 8 2Z" fill="#F8F9FA"/>
                        </svg>
                        Tambah Data
                    </button>
                </div>
                <table class="w-full text-sm text-abu-700 border">
<<<<<<< HEAD
                    <thead class="text-center text-white uppercase bg-jingga border-b">
=======
                    <thead class="text-center text-white uppercase bg-green border-b">
>>>>>>> fix
                        <tr>
                            <th scope="col" class="px-6 py-3 border-r">
                                Tindakan
                            </th>
                            <th scope="col" class="px-3 py-3 border-r">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 border-r">
                                Rincian
                            </th>
                            <th scope="col" class="px-6 py-3 border-r">
                                Anggaran
                            </th>
                            <th scope="col" class="px-6 py-3 border-r">
                                Realisasi
                            </th>
                            <th scope="col" class="px-6 py-3 border-r">
                                Ditambahkan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Diperbarui
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
                            <td class="px-3 py-4 border-r whitespace-nowrap">
                                1
                            </td>
                            <th scope="row" class="px-6 py-4 border-r font-medium whitespace-nowrap">
                                Hutang Bupati
                            </th>
                            <td class="px-6 py-4 border-r whitespace-nowrap">
                                <span>Rp </span>2.000.000.000
                            </td>
                            <td class="px-6 py-4 border-r">
                                <span>Rp </span>20.000
                            </td>
                            <td class="px-6 py-4 border-r whitespace-nowrap">
                                11/02/2023 14:42:23
                            </td>
                            <td class="px-6 py-4 border-r">
                                11/02/2023 14:42:23
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
                            <td class="px-3 py-4 border-r whitespace-nowrap">
                                2
                            </td>
                            <th scope="row" class="px-6 py-4 border-r font-medium whitespace-nowrap">
                                Hutang Daffa
                            </th>
                            <td class="px-6 py-4 border-r whitespace-nowrap">
                                <span>Rp </span>2.000.000.000
                            </td>
                            <td class="px-6 py-4 border-r">
                                <span>Rp </span>20.000
                            </td>
                            <td class="px-6 py-4 border-r whitespace-nowrap">
                                11/02/2023 14:42:23
                            </td>
                            <td class="px-6 py-4 border-r">
                                11/02/2023 14:42:23
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- Content Pembiayaan End --}}

        {{-- Content Laporan Start --}}
        <div x-show="activeTab === 4">
            @include('data.apbd.components.laporan')
        </div>
        {{-- Content Laporan End --}}

        {{-- Content Grafik Start --}}
        <div x-show="activeTab === 5">
            @include('data.apbd.components.grafik')
        </div>
        {{-- Content Grafik End --}}
    </div>
    {{-- Tab Content End --}}
</div>
@endsection
