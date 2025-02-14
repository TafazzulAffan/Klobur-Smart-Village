@extends('layouts.layout-user')
@section('title', 'Website Resmi Pemerintah Desa Klobur - Data Pekerjaan')

@section('other')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection

@section('header')
    <div class="">
        <a href="/"><p class="text-sm md:text-base"><span class="text-[#198754]">Data Desa</span></a> > Data Pekerjaan</p>
        <h3 class="font-bold text-xl md:text-3xl mt-2">Data Pekerjaan</h3>
    </div>
@endsection

@section('content')
    {{-- Grafik Pekerjaan Start --}}
    <div>
        <div x-data="{
            activeTab: 1,
            activeClass: 'text-white bg-[#198754] active group',
            inactiveClass: 'text-[#198754] hover:text-white hover:bg-[#198754]-300 group'
        }" x-cloak>


            {{-- Tab Start --}}
            <div class="flex justify-center">
                <ul class="flex flex-wrap -mb-px font-medium text-center text-gray-500 dark:text-gray-400">
                    <li class="mr-2">
                        <a href="#grafik-pekerjaan" x-on:click="activeTab = 1"
                            :class="activeTab === 1 ? activeClass : inactiveClass"
                            class="inline-flex gap-2 items-center justify-center py-2 px-4 rounded-lg w-40 border-2 border-[#198754] hover:border-[#198754]-300">
                            <svg x-on:click="activeTab = 1" :class="activeTab === 1 ? activeClass : inactiveClass"
                                class="w-5 h-5 text-gray-500 hover:text-white group-hover:text-white"
                                xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                fill="none">
                                <path
                                    d="M18.57 12.75H15.25C12.76 12.75 11.5 11.34 11.5 8.54996V5.67996C11.5 4.65996 11.62 3.19996 12.68 2.39996C13.57 1.73996 14.85 1.68996 16.74 2.23996C19.22 2.95996 21.29 5.02996 22.01 7.50996C22.56 9.38996 22.51 10.68 21.85 11.56C21.05 12.63 19.59 12.75 18.57 12.75ZM14.53 3.35996C14.12 3.35996 13.8 3.43996 13.59 3.59996C13.2 3.88996 13.01 4.56996 13.01 5.67996V8.55996C13.01 10.8 13.87 11.26 15.26 11.26H18.58C19.68 11.26 20.36 11.07 20.66 10.68C21.01 10.22 20.98 9.29996 20.59 7.94996C20.01 5.97996 18.31 4.26996 16.34 3.69996C15.6 3.46996 15 3.35996 14.53 3.35996Z"
                                    fill="currentColor" />
                                <path
                                    d="M11.3199 22.7498C10.7899 22.7498 10.2499 22.7098 9.70988 22.6198C5.61988 21.9598 2.28988 18.6398 1.62988 14.5498C0.779883 9.28983 4.16988 4.32983 9.35988 3.26983C9.76988 3.18983 10.1599 3.44983 10.2499 3.84983C10.3299 4.25983 10.0699 4.64983 9.66988 4.73983C5.27988 5.63983 2.39988 9.83983 3.12988 14.3098C3.68988 17.7698 6.49988 20.5798 9.95988 21.1398C14.4499 21.8598 18.6399 18.9698 19.5299 14.5598C19.6099 14.1498 20.0099 13.8898 20.4099 13.9698C20.8199 14.0498 21.0799 14.4498 20.9999 14.8498C20.0499 19.5198 15.9699 22.7498 11.3199 22.7498Z"
                                    fill="currentColor" />
                            </svg>
                            Diagram Pie
                        </a>
                    </li>
                    <li class="mr-2">
                        <a href="#grafik-pekerjaan" x-on:click="activeTab = 2"
                            :class="activeTab === 2 ? activeClass : inactiveClass"
                            class="inline-flex gap-2 items-center justify-center py-2 px-4 rounded-lg w-40 border-2 border-[#198754] hover:border-[#198754]-300">
                            <svg x-on:click="activeTab = 2" :class="activeTab === 2 ? activeClass : inactiveClass"
                                class="w-5 h-5 text-gray-500 hover:text-white group-hover:text-white"
                                xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                fill="none">
                                <path
                                    d="M21.75 22.75H3.75C3.34 22.75 3 22.41 3 22C3 21.59 3.34 21.25 3.75 21.25H21.75C22.16 21.25 22.5 21.59 22.5 22C22.5 22.41 22.16 22.75 21.75 22.75Z"
                                    fill="currentColor" />
                                <path
                                    d="M6.34998 19.7499H4.75C3.79 19.7499 3 18.9599 3 17.9999V9.37988C3 8.41988 3.79 7.62988 4.75 7.62988H6.34998C7.30998 7.62988 8.09998 8.41988 8.09998 9.37988V17.9999C8.09998 18.9599 7.30998 19.7499 6.34998 19.7499ZM4.75 9.11987C4.61 9.11987 4.5 9.22987 4.5 9.36987V17.9999C4.5 18.1399 4.61 18.2499 4.75 18.2499H6.34998C6.48998 18.2499 6.59998 18.1399 6.59998 17.9999V9.37988C6.59998 9.23988 6.48998 9.12988 6.34998 9.12988H4.75V9.11987Z"
                                    fill="currentColor" />
                                <path
                                    d="M13.5502 19.7499H11.9502C10.9902 19.7499 10.2002 18.9599 10.2002 17.9999V6.18994C10.2002 5.22994 10.9902 4.43994 11.9502 4.43994H13.5502C14.5102 4.43994 15.3002 5.22994 15.3002 6.18994V17.9999C15.3002 18.9599 14.5102 19.7499 13.5502 19.7499ZM11.9502 5.93994C11.8102 5.93994 11.7002 6.04994 11.7002 6.18994V17.9999C11.7002 18.1399 11.8102 18.2499 11.9502 18.2499H13.5502C13.6902 18.2499 13.8002 18.1399 13.8002 17.9999V6.18994C13.8002 6.04994 13.6902 5.93994 13.5502 5.93994H11.9502Z"
                                    fill="currentColor" />
                                <path
                                    d="M20.7499 19.75H19.1499C18.1899 19.75 17.3999 18.96 17.3999 18V3C17.3999 2.04 18.1899 1.25 19.1499 1.25H20.7499C21.7099 1.25 22.4999 2.04 22.4999 3V18C22.4999 18.96 21.7099 19.75 20.7499 19.75ZM19.1499 2.75C19.0099 2.75 18.8999 2.86 18.8999 3V18C18.8999 18.14 19.0099 18.25 19.1499 18.25H20.7499C20.8899 18.25 20.9999 18.14 20.9999 18V3C20.9999 2.86 20.8899 2.75 20.7499 2.75H19.1499Z"
                                    fill="currentColor" />
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
                <div id="grafik-pekerjaan" x-show="activeTab === 1" class="py-5 w-full md:w-3/5 mx-auto">
                    <canvas id="chart-pekerjaan"></canvas>
                </div>
                {{-- Pie End --}}

                {{-- Bar Start --}}
                <div id="grafik-pekerjaan" x-show="activeTab === 2" class="py-5 w-full md:w-4/5 mx-auto">
                    <canvas id="chart-pekerjaan-bar"></canvas>
                </div>
                {{-- Pie End --}}

                {{-- Bar Start --}}
                <div id="grafik-pekerjaan" x-show="activeTab === 2" class="p-5 w-full md:w-1/2 mx-auto">
                    <canvas id="chart-pekerjaan-bar"></canvas>
                </div>
                {{-- Bar End --}}

                {{-- Tab Start --}}
                <div class="flex justify-center">
                    <ul class="flex flex-wrap -mb-px font-medium text-center text-gray-500 dark:text-gray-400">
                        <li class="mr-2">
                            <a href="#grafik-pekerjaan" x-on:click="activeTab = 1"
                                :class="activeTab === 1 ? activeClass : inactiveClass"
                                class="inline-flex gap-2 items-center justify-center py-2 px-4 rounded-lg w-40 border-2 border-[#198754] hover:border-[#198754]-300">
                                <svg x-on:click="activeTab = 1" :class="activeTab === 1 ? activeClass : inactiveClass"
                                    class="w-5 h-5 text-gray-500 hover:text-white group-hover:text-white"
                                    xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                    fill="none">
                                    <path
                                        d="M18.57 12.75H15.25C12.76 12.75 11.5 11.34 11.5 8.54996V5.67996C11.5 4.65996 11.62 3.19996 12.68 2.39996C13.57 1.73996 14.85 1.68996 16.74 2.23996C19.22 2.95996 21.29 5.02996 22.01 7.50996C22.56 9.38996 22.51 10.68 21.85 11.56C21.05 12.63 19.59 12.75 18.57 12.75ZM14.53 3.35996C14.12 3.35996 13.8 3.43996 13.59 3.59996C13.2 3.88996 13.01 4.56996 13.01 5.67996V8.55996C13.01 10.8 13.87 11.26 15.26 11.26H18.58C19.68 11.26 20.36 11.07 20.66 10.68C21.01 10.22 20.98 9.29996 20.59 7.94996C20.01 5.97996 18.31 4.26996 16.34 3.69996C15.6 3.46996 15 3.35996 14.53 3.35996Z"
                                        fill="currentColor" />
                                    <path
                                        d="M11.3199 22.7498C10.7899 22.7498 10.2499 22.7098 9.70988 22.6198C5.61988 21.9598 2.28988 18.6398 1.62988 14.5498C0.779883 9.28983 4.16988 4.32983 9.35988 3.26983C9.76988 3.18983 10.1599 3.44983 10.2499 3.84983C10.3299 4.25983 10.0699 4.64983 9.66988 4.73983C5.27988 5.63983 2.39988 9.83983 3.12988 14.3098C3.68988 17.7698 6.49988 20.5798 9.95988 21.1398C14.4499 21.8598 18.6399 18.9698 19.5299 14.5598C19.6099 14.1498 20.0099 13.8898 20.4099 13.9698C20.8199 14.0498 21.0799 14.4498 20.9999 14.8498C20.0499 19.5198 15.9699 22.7498 11.3199 22.7498Z"
                                        fill="currentColor" />
                                </svg>
                                Diagram Pie
                            </a>
                        </li>
                        <li class="mr-2">
                            <a href="#grafik-pekerjaan" x-on:click="activeTab = 2"
                                :class="activeTab === 2 ? activeClass : inactiveClass"
                                class="inline-flex gap-2 items-center justify-center py-2 px-4 rounded-lg w-40 border-2 border-[#198754] hover:border-[#198754]-300">
                                <svg x-on:click="activeTab = 2" :class="activeTab === 2 ? activeClass : inactiveClass"
                                    class="w-5 h-5 text-gray-500 hover:text-white group-hover:text-white"
                                    xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                                    fill="none">
                                    <path
                                        d="M21.75 22.75H3.75C3.34 22.75 3 22.41 3 22C3 21.59 3.34 21.25 3.75 21.25H21.75C22.16 21.25 22.5 21.59 22.5 22C22.5 22.41 22.16 22.75 21.75 22.75Z"
                                        fill="currentColor" />
                                    <path
                                        d="M6.34998 19.7499H4.75C3.79 19.7499 3 18.9599 3 17.9999V9.37988C3 8.41988 3.79 7.62988 4.75 7.62988H6.34998C7.30998 7.62988 8.09998 8.41988 8.09998 9.37988V17.9999C8.09998 18.9599 7.30998 19.7499 6.34998 19.7499ZM4.75 9.11987C4.61 9.11987 4.5 9.22987 4.5 9.36987V17.9999C4.5 18.1399 4.61 18.2499 4.75 18.2499H6.34998C6.48998 18.2499 6.59998 18.1399 6.59998 17.9999V9.37988C6.59998 9.23988 6.48998 9.12988 6.34998 9.12988H4.75V9.11987Z"
                                        fill="currentColor" />
                                    <path
                                        d="M13.5502 19.7499H11.9502C10.9902 19.7499 10.2002 18.9599 10.2002 17.9999V6.18994C10.2002 5.22994 10.9902 4.43994 11.9502 4.43994H13.5502C14.5102 4.43994 15.3002 5.22994 15.3002 6.18994V17.9999C15.3002 18.9599 14.5102 19.7499 13.5502 19.7499ZM11.9502 5.93994C11.8102 5.93994 11.7002 6.04994 11.7002 6.18994V17.9999C11.7002 18.1399 11.8102 18.2499 11.9502 18.2499H13.5502C13.6902 18.2499 13.8002 18.1399 13.8002 17.9999V6.18994C13.8002 6.04994 13.6902 5.93994 13.5502 5.93994H11.9502Z"
                                        fill="currentColor" />
                                    <path
                                        d="M20.7499 19.75H19.1499C18.1899 19.75 17.3999 18.96 17.3999 18V3C17.3999 2.04 18.1899 1.25 19.1499 1.25H20.7499C21.7099 1.25 22.4999 2.04 22.4999 3V18C22.4999 18.96 21.7099 19.75 20.7499 19.75ZM19.1499 2.75C19.0099 2.75 18.8999 2.86 18.8999 3V18C18.8999 18.14 19.0099 18.25 19.1499 18.25H20.7499C20.8899 18.25 20.9999 18.14 20.9999 18V3C20.9999 2.86 20.8899 2.75 20.7499 2.75H19.1499Z"
                                        fill="currentColor" />
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
                    <div id="grafik-pekerjaan" x-show="activeTab === 1" class="py-5 w-full md:w-3/5 mx-auto">
                        <canvas id="chart-pekerjaan"></canvas>
                    </div>
                    {{-- Pie End --}}

                    {{-- Bar Start --}}
                    <div id="grafik-pekerjaan" x-show="activeTab === 2" class="py-5 w-full md:w-4/5 mx-auto">
                        <canvas id="chart-pekerjaan-bar"></canvas>
                    </div>
                    {{-- Tab Content End --}}
                </div>
            </div>
            {{-- Grafik Pekerjaan End --}}

            <!-- Table Start -->
            <div class="relative overflow-x-auto mt-jarak">
                <table class="w-full text-sm text-abu-700 border">
                    <thead class="text-center text-white uppercase bg-[#198754] border-b">
                        <tr>
                            <th scope="col" class="px-3 py-3 border-r">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3 border-r">
                                Pekerjaan
                            </th>
                            <th scope="col" class="px-6 py-3 border-r">
                                Jumlah
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Persentase
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-left">
                        {{-- Data Perkejaan --}}
                        <tr class="bg-white border-b">
                            <td class="px-3 py-4 border-r">
                                1
                            </td>
                            <th scope="row" class="px-6 py-4 border-r font-medium whitespace-nowrap">
                                Tidak Bekerja
                            </th>
                            <td class="px-6 py-4 border-r">
                                {{ $tidakBekerja }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pembulatanTidakBekerja }}%
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-3 py-4 border-r">
                                2
                            </td>
                            <th scope="row" class="px-6 py-4 border-r font-medium whitespace-nowrap">
                                Wiraswasta
                            </th>
                            <td class="px-6 py-4 border-r">
                                {{ $wiraswasta }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pembulatanWiraswasta }}%
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-3 py-4 border-r">
                                3
                            </td>
                            <th scope="row" class="px-6 py-4 border-r font-medium whitespace-nowrap">
                                Perangkat Desa
                            </th>
                            <td class="px-6 py-4 border-r">
                                {{ $perangkatDesa }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pembulatanPerangkatDesa }}%
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-3 py-4 border-r">
                                4
                            </td>
                            <th scope="row" class="px-6 py-4 border-r font-medium whitespace-nowrap">
                                Buruh Tani / Kebun
                            </th>
                            <td class="px-6 py-4 border-r">
                                {{ $buruhTani }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pembulatanBuruhTani }}%
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-3 py-4 border-r">
                                5
                            </td>
                            <th scope="row" class="px-6 py-4 border-r font-medium whitespace-nowrap">
                                Petani
                            </th>
                            <td class="px-6 py-4 border-r">
                                {{ $petani }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pembulatanPetani }}%
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-3 py-4 border-r">
                                6
                            </td>
                            <th scope="row" class="px-6 py-4 border-r font-medium whitespace-nowrap">
                                Pedagang
                            </th>
                            <td class="px-6 py-4 border-r">
                                {{ $pedagang }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pembulatanPedagang }}%
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-3 py-4 border-r">
                                7
                            </td>
                            <th scope="row" class="px-6 py-4 border-r font-medium whitespace-nowrap">
                                Pelajar / Mahasiswa
                            </th>
                            <td class="px-6 py-4 border-r">
                                {{ $pelajar }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pembulatanPelajar }}%
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-3 py-4 border-r">
                                8
                            </td>
                            <th scope="row" class="px-6 py-4 border-r font-medium whitespace-nowrap">
                                Mengurus Rumah Tangga
                            </th>
                            <td class="px-6 py-4 border-r">
                                {{ $mengurusRumahTangga }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pembulatanMengurusRumahTangga }}%
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-3 py-4 border-r">
                                9
                            </td>
                            <th scope="row" class="px-6 py-4 border-r font-medium whitespace-nowrap">
                                Pensiunan
                            </th>
                            <td class="px-6 py-4 border-r">
                                {{ $wiraswasta }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pembulatanPensiunan }}%
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-3 py-4 border-r">
                                10
                            </td>
                            <th scope="row" class="px-6 py-4 border-r font-medium whitespace-nowrap">
                                PNS
                            </th>
                            <td class="px-6 py-4 border-r">
                                {{ $pns }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pembulatanPns }}%
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-3 py-4 border-r">
                                11
                            </td>
                            <th scope="row" class="px-6 py-4 border-r font-medium whitespace-nowrap">
                                Karyawan BUMN
                            </th>
                            <td class="px-6 py-4 border-r">
                                {{ $bumn }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pembulatanBumn }}%
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-3 py-4 border-r">
                                12
                            </td>
                            <th scope="row" class="px-6 py-4 border-r font-medium whitespace-nowrap">
                                Buruh Lepas Harian
                            </th>
                            <td class="px-6 py-4 border-r">
                                {{ $buruhHarian }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pembulatanBuruhHarian }}%
                            </td>
                        </tr>
                        <tr class="bg-white border-b">
                            <td class="px-3 py-4 border-r">
                                13
                            </td>
                            <th scope="row" class="px-6 py-4 border-r font-medium whitespace-nowrap">
                                Guru
                            </th>
                            <td class="px-6 py-4 border-r">
                                {{ $guru }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $pembulatanGuru }}%
                            </td>
                        </tr>
                        {{-- EndPekerjaan --}}

                        {{-- Jumlah --}}
                        <tr class="bg-white border-b">
                            <th colspan="2" scope="row"
                                class="px-6 py-4 border-r font-bold text-center whitespace-nowrap">
                                Jumlah
                            </th>
                            <td class="px-6 py-4 border-r font-bold">
                                {{ $totalPekerjaan }}
                            </td>
                            <td class="px-6 py-4 font-bold">
                                100%
                            </td>
                        </tr>
                        {{-- End Jumlah --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Table End -->
@endsection

@section('script')
    <script>
        // Define Chart Pekerjaan Start
        const pekerjaan = document.getElementById("chart-pekerjaan");
        const pekerjaan_bar = document.getElementById("chart-pekerjaan-bar");
        var pekerjaanX = JSON.parse('{!! json_encode($grafikPekerjaan) !!}')
        // Define Chart Pekerjaan End

        // Chart Pekerjaan Pie Start
        new Chart(pekerjaan, {
            type: "pie",
            data: {
                labels: [
                    "Belum/Tidak Bekerja",
                    "Wiraswasta",
                    "Perangkat Desa",
                    "Buruh Tani/Kebun",
                    "Karyawan Swasta",
                    "Petani/Pekebun",
                    "Pedagang",
                    "Pelajar/Mahasiswa",
                    "Mengurus Rumah Tangga",
                    "Pensiunan",
                    "PNS",
                    "Karyawan BUMN",
                    "Buruh Harian Lepas",
                    "Guru",
                ],
                datasets: [{
                    data: pekerjaanX,
                    borderWidth: 1,
                }, ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
                plugins: {
                    title: {
                        display: true,
                        text: "Grafik Data Pekerjaan",
                    },
                },
            },
        });
        // Chart Pekerjaan Pie End

        // Chart Pekerjaan Bar Start
        new Chart(pekerjaan_bar, {
            type: "bar",
            data: {
                labels: [
                    "Belum/Tidak Bekerja",
                    "Wiraswasta",
                    "Perangkat Desa",
                    "Buruh Tani/Kebun",
                    "Karyawan Swasta",
                    "Petani/Pekebun",
                    "Pedagang",
                    "Pelajar/Mahasiswa",
                    "Mengurus Rumah Tangga",
                    "Pensiunan",
                    "PNS",
                    "Karyawan BUMN",
                    "Buruh Harian Lepas",
                    "Guru",
                ],
                datasets: [{
                    label: "Pekerjaan",
                    data: pekerjaanX,
                    borderWidth: 1,
                }, ],
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
                plugins: {
                    title: {
                        display: true,
                        text: "Grafik Data Pekerjaan",
                    },
                },
            },
        });
        // Chart Pekerjaan Bar End
    </script>
@endsection
