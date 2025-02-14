<div class="relative">
    <div class="flex items-center gap-5 justify-end mb-4">
        <!-- Search Start -->
        <form class="w-72" method="GET" action="/anggaran">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" name="search" id="default-search" class="block w-full px-4 py-3 pr-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-green-500" placeholder="Cari apbdes berdasarkan tahun" required>
            </div>
        </form>
    </div>

    <div class="overflow-x-auto mb-jarak">
        <table class="w-full text-sm text-abu-700 border">
            <thead class="text-center text-white uppercase bg-green border-b" style="background: green;">
                <tr>
                    <th colspan="4" scope="col" class="px-3 py-3 border-r">
                        Pendapatan
                    </th>
                    <th colspan="2" class="pr-3 py-3">
                        <a class="flex w-fit bg-white text-green-500 hover:bg-abu-300 gap-3 py-1.5 px-3 rounded-md capitalize mx-auto"
                            href="/cetakPendapatan" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                fill="none">
                                <path
                                    d="M5.5 4.6875V5.1875H6H12H12.5V4.6875V3.75C12.5 3.08822 12.4 2.48662 11.9879 2.07457C11.5759 1.66252 10.9743 1.5625 10.3125 1.5625H7.6875C7.02572 1.5625 6.42412 1.66252 6.01207 2.07457C5.60002 2.48662 5.5 3.08822 5.5 3.75V4.6875ZM12.5625 5.3125H5.4375C5.42444 5.3125 5.40878 5.3073 5.39449 5.29301C5.3802 5.27872 5.375 5.26306 5.375 5.25V3.75C5.375 2.85789 5.58299 2.30912 5.9148 1.9773C6.24662 1.64549 6.79539 1.4375 7.6875 1.4375H10.3125C11.2046 1.4375 11.7534 1.64549 12.0852 1.9773C12.417 2.30912 12.625 2.85789 12.625 3.75V5.25C12.625 5.26306 12.6198 5.27872 12.6055 5.29301C12.5912 5.3073 12.5756 5.3125 12.5625 5.3125Z"
                                    fill="#23C55E" stroke="#23C55E" />
                                <path
                                    d="M9.75 17.0625H8.25C6.435 17.0625 5.4375 16.065 5.4375 14.25V11.25C5.4375 10.9425 5.6925 10.6875 6 10.6875H12C12.3075 10.6875 12.5625 10.9425 12.5625 11.25V14.25C12.5625 16.065 11.565 17.0625 9.75 17.0625ZM6.5625 11.8125V14.25C6.5625 15.435 7.065 15.9375 8.25 15.9375H9.75C10.935 15.9375 11.4375 15.435 11.4375 14.25V11.8125H6.5625Z"
                                    fill="#23C55E" />
                                <path
                                    d="M13.5 14.0625H12C11.6925 14.0625 11.4375 13.8075 11.4375 13.5V11.8125H6.5625V13.5C6.5625 13.8075 6.3075 14.0625 6 14.0625H4.5C2.685 14.0625 1.6875 13.065 1.6875 11.25V7.5C1.6875 5.685 2.685 4.6875 4.5 4.6875H13.5C15.315 4.6875 16.3125 5.685 16.3125 7.5V11.25C16.3125 13.065 15.315 14.0625 13.5 14.0625ZM12.5625 12.9375H13.5C14.685 12.9375 15.1875 12.435 15.1875 11.25V7.5C15.1875 6.315 14.685 5.8125 13.5 5.8125H4.5C3.315 5.8125 2.8125 6.315 2.8125 7.5V11.25C2.8125 12.435 3.315 12.9375 4.5 12.9375H5.4375V11.25C5.4375 10.9425 5.6925 10.6875 6 10.6875H12C12.3075 10.6875 12.5625 10.9425 12.5625 11.25V12.9375Z"
                                    fill="#23C55E" />
                                <path
                                    d="M12.75 11.8125H5.25C4.9425 11.8125 4.6875 11.5575 4.6875 11.25C4.6875 10.9425 4.9425 10.6875 5.25 10.6875H12.75C13.0575 10.6875 13.3125 10.9425 13.3125 11.25C13.3125 11.5575 13.0575 11.8125 12.75 11.8125Z"
                                    fill="#23C55E" />
                                <path
                                    d="M7.5 8.8125H5.25C4.9425 8.8125 4.6875 8.5575 4.6875 8.25C4.6875 7.9425 4.9425 7.6875 5.25 7.6875H7.5C7.8075 7.6875 8.0625 7.9425 8.0625 8.25C8.0625 8.5575 7.8075 8.8125 7.5 8.8125Z"
                                    fill="#23C55E" />
                            </svg>
                            Cetak Data
                        </a>
                    </th>
                </tr>
            </thead>
            <thead class="text-center text-white uppercase bg-green border-b" style="background: green;">
                <tr>
                    <th scope="col" class="px-3 py-3 border-r">
                        Jenis Anggaran
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Uraian
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Anggaran
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Realisasi
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Selisih
                    </th>
                    <th scope="col" class="px-3 py-3 border-r text-center">
                        Persentase
                    </th>
                </tr>
            </thead>

            <tbody class="text-left">
                @foreach ($anggaranpenlaporans as $anggaranpenlaporan)
                {{-- Pendapatan Data Start --}}
                <tr class="bg-white border-b">
                    <td class="px-3 py-4 border-r">
                        {{$anggaranpenlaporan->detail_jenis_anggaran}}
                    </td>
                    <th scope="row" class="font-medium px-6 py-4 border-r">
                        {{ $anggaranpenlaporan->rincian }}
                    </th>
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        <span>Rp </span>{{ $anggaranpenlaporan->nilai_anggaran }}
                    </td>
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        <span>Rp </span>{{ $anggaranpenlaporan->nilai_realisasi }}
                    </td>
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        <span>Rp </span>{{ $anggaranpenlaporan->nilai_anggaran - $anggaranpenlaporan->nilai_realisasi }}
                    </td>
                    @php
                    $selisih = $anggaranpenlaporan->nilai_anggaran - $anggaranpenlaporan->nilai_realisasi;
                    @endphp
                    <td class="px-3 py-4 border-r whitespace-nowrap">
                        {{ round((($anggaranpenlaporan->nilai_anggaran - $anggaranpenlaporan->nilai_realisasi) / $anggaranpenlaporan->nilai_anggaran) * 100, 1) }}%
                    </td>

                </tr>
                {{-- Pendapatan Data End --}}
                @endforeach

                {{-- Pendapatan Total Start --}}
                <tr class="bg-green text-white border-b font-bold" style="background: green;">
                    <th colspan="2" class="px-6 py-4 border-r whitespace-nowrap text-center">JUMLAH PENDAPATAN</th>
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        <span>Rp </span>{{ $jumlahAPend }}
                    </td>
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        <span>Rp </span>{{ $jumlahAPendRea }}
                    </td>
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        <span>Rp </span>{{ $jumlahAnggaranPenSel }}
                    </td>
                    <td class="px-3 py-4 border-r whitespace-nowrap">
                        {{round(($persenPen)*100, 1)}}%
                        {{-- {{ round((($anggaranpenlaporan->nilai_anggaran - $anggaranpenlaporan->nilai_realisasi) / $anggaranpenlaporan->nilai_anggaran) * 100, 1) }}% --}}
                    </td>
                </tr>
                {{-- Pendapatan Total End --}}
            </tbody>
        </table>
    </div>

    <div class="overflow-x-auto mb-jarak">
        <table class="w-full text-sm text-abu-700 border">
            <thead class="text-center text-white uppercase bg-green border-b" style="background: green;">
                <tr>
                    <th colspan="4" scope="col" class="px-3 py-3 border-r">
                        Belanja
                    </th>
                    <th colspan="2" class="pr-3 py-3">
                        <a class="flex w-fit bg-white text-green-500 hover:bg-abu-300 gap-3 py-1.5 px-3 rounded-md capitalize mx-auto"
                            href="/cetakBelanja" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                fill="none">
                                <path
                                    d="M5.5 4.6875V5.1875H6H12H12.5V4.6875V3.75C12.5 3.08822 12.4 2.48662 11.9879 2.07457C11.5759 1.66252 10.9743 1.5625 10.3125 1.5625H7.6875C7.02572 1.5625 6.42412 1.66252 6.01207 2.07457C5.60002 2.48662 5.5 3.08822 5.5 3.75V4.6875ZM12.5625 5.3125H5.4375C5.42444 5.3125 5.40878 5.3073 5.39449 5.29301C5.3802 5.27872 5.375 5.26306 5.375 5.25V3.75C5.375 2.85789 5.58299 2.30912 5.9148 1.9773C6.24662 1.64549 6.79539 1.4375 7.6875 1.4375H10.3125C11.2046 1.4375 11.7534 1.64549 12.0852 1.9773C12.417 2.30912 12.625 2.85789 12.625 3.75V5.25C12.625 5.26306 12.6198 5.27872 12.6055 5.29301C12.5912 5.3073 12.5756 5.3125 12.5625 5.3125Z"
                                    fill="#23C55E" stroke="#23C55E" />
                                <path
                                    d="M9.75 17.0625H8.25C6.435 17.0625 5.4375 16.065 5.4375 14.25V11.25C5.4375 10.9425 5.6925 10.6875 6 10.6875H12C12.3075 10.6875 12.5625 10.9425 12.5625 11.25V14.25C12.5625 16.065 11.565 17.0625 9.75 17.0625ZM6.5625 11.8125V14.25C6.5625 15.435 7.065 15.9375 8.25 15.9375H9.75C10.935 15.9375 11.4375 15.435 11.4375 14.25V11.8125H6.5625Z"
                                    fill="#23C55E" />
                                <path
                                    d="M13.5 14.0625H12C11.6925 14.0625 11.4375 13.8075 11.4375 13.5V11.8125H6.5625V13.5C6.5625 13.8075 6.3075 14.0625 6 14.0625H4.5C2.685 14.0625 1.6875 13.065 1.6875 11.25V7.5C1.6875 5.685 2.685 4.6875 4.5 4.6875H13.5C15.315 4.6875 16.3125 5.685 16.3125 7.5V11.25C16.3125 13.065 15.315 14.0625 13.5 14.0625ZM12.5625 12.9375H13.5C14.685 12.9375 15.1875 12.435 15.1875 11.25V7.5C15.1875 6.315 14.685 5.8125 13.5 5.8125H4.5C3.315 5.8125 2.8125 6.315 2.8125 7.5V11.25C2.8125 12.435 3.315 12.9375 4.5 12.9375H5.4375V11.25C5.4375 10.9425 5.6925 10.6875 6 10.6875H12C12.3075 10.6875 12.5625 10.9425 12.5625 11.25V12.9375Z"
                                    fill="#23C55E" />
                                <path
                                    d="M12.75 11.8125H5.25C4.9425 11.8125 4.6875 11.5575 4.6875 11.25C4.6875 10.9425 4.9425 10.6875 5.25 10.6875H12.75C13.0575 10.6875 13.3125 10.9425 13.3125 11.25C13.3125 11.5575 13.0575 11.8125 12.75 11.8125Z"
                                    fill="#23C55E" />
                                <path
                                    d="M7.5 8.8125H5.25C4.9425 8.8125 4.6875 8.5575 4.6875 8.25C4.6875 7.9425 4.9425 7.6875 5.25 7.6875H7.5C7.8075 7.6875 8.0625 7.9425 8.0625 8.25C8.0625 8.5575 7.8075 8.8125 7.5 8.8125Z"
                                    fill="#23C55E" />
                            </svg>
                            Cetak Data
                        </a>
                    </th>
                </tr>
            </thead>
            <thead class="text-center text-white uppercase bg-green border-b" style="background: green;">
                <tr>
                    <th scope="col" class="px-3 py-3 border-r">
                        Jenis Anggaran
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Uraian
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Anggaran
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Realisasi
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Selisih
                    </th>
                    <th scope="col" class="px-3 py-3 border-r">
                        Persentase
                    </th>
                </tr>
            </thead>

            <tbody class="text-left">
                @foreach ($anggaranbelanjalaporans as $anggaranbelanjalaporan)
                {{-- Belanja Data Start --}}
                <tr class="bg-white border-b">
                    <td class="px-3 py-4 border-r">
                        {{$anggaranbelanjalaporan->detail_jenis_anggaran}}
                    </td>
                    <th scope="row" class="font-medium px-6 py-4 border-r">
                        {{ $anggaranbelanjalaporan->rincian }}
                    </th>
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        <span>Rp </span>{{ $anggaranbelanjalaporan->nilai_anggaran }}
                    </td>
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        <span>Rp </span>{{ $anggaranbelanjalaporan->nilai_realisasi }}
                    </td>
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        <span>Rp </span>{{ $anggaranbelanjalaporan->nilai_anggaran - $anggaranbelanjalaporan->nilai_realisasi }}
                    </td>
                    @php
                    $selisih = $anggaranbelanjalaporan->nilai_anggaran - $anggaranbelanjalaporan->nilai_realisasi;
                    @endphp
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        {{ round((($anggaranbelanjalaporan->nilai_anggaran - $anggaranbelanjalaporan->nilai_realisasi) / $anggaranbelanjalaporan->nilai_anggaran) * 100, 1) }}%
                        {{-- {{ ($selisih / $anggaranbel->nilai_anggaran) * 100 }}% --}}
                    </td>
                </tr>
                {{-- Belanja Data End --}}
                @endforeach
                {{-- Belanja Total Start --}}
                <tr class="bg-green text-white border-b font-bold" style="background: green;">
                    <th colspan="2" class="px-6 py-4 border-r whitespace-nowrap text-center">JUMLAH BELANJA</th>
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        <span>Rp </span>{{ $jumlahABel }}
                    </td>
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        <span>Rp </span>{{ $jumlahABelRea }}
                    </td>
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        <span>Rp </span>{{ $jumlahABelSel }}
                    </td>
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        {{round(($persenBel)*100, 1)}}%
                        {{-- {{ round((($anggaranbelanjalaporan->nilai_anggaran - $anggaranbelanjalaporan->nilai_realisasi) / $anggaranbelanjalaporan->nilai_anggaran) * 100, 1) }}% --}}
                    </td>
                </tr>
                {{-- Belanja Total End --}}

            </tbody>
        </table>
    </div>

    <div class="overflow-x-auto mb-jarak">
        <table class="w-full text-sm text-abu-700 border">
            <thead class="text-center text-white uppercase bg-green border-b" style="background: green;">
                <tr>
                    <th colspan="4" scope="col" class="px-3 py-3 border-r">
                        Pembiayaan
                    </th>
                    <th colspan="2" class="pr-3 py-3">
                        <a class="flex w-fit bg-white text-green-500 hover:bg-abu-300 gap-3 py-1.5 px-3 rounded-md capitalize mx-auto"
                            href="/cetakBiaya" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"
                                fill="none">
                                <path
                                    d="M5.5 4.6875V5.1875H6H12H12.5V4.6875V3.75C12.5 3.08822 12.4 2.48662 11.9879 2.07457C11.5759 1.66252 10.9743 1.5625 10.3125 1.5625H7.6875C7.02572 1.5625 6.42412 1.66252 6.01207 2.07457C5.60002 2.48662 5.5 3.08822 5.5 3.75V4.6875ZM12.5625 5.3125H5.4375C5.42444 5.3125 5.40878 5.3073 5.39449 5.29301C5.3802 5.27872 5.375 5.26306 5.375 5.25V3.75C5.375 2.85789 5.58299 2.30912 5.9148 1.9773C6.24662 1.64549 6.79539 1.4375 7.6875 1.4375H10.3125C11.2046 1.4375 11.7534 1.64549 12.0852 1.9773C12.417 2.30912 12.625 2.85789 12.625 3.75V5.25C12.625 5.26306 12.6198 5.27872 12.6055 5.29301C12.5912 5.3073 12.5756 5.3125 12.5625 5.3125Z"
                                    fill="#23C55E" stroke="#23C55E" />
                                <path
                                    d="M9.75 17.0625H8.25C6.435 17.0625 5.4375 16.065 5.4375 14.25V11.25C5.4375 10.9425 5.6925 10.6875 6 10.6875H12C12.3075 10.6875 12.5625 10.9425 12.5625 11.25V14.25C12.5625 16.065 11.565 17.0625 9.75 17.0625ZM6.5625 11.8125V14.25C6.5625 15.435 7.065 15.9375 8.25 15.9375H9.75C10.935 15.9375 11.4375 15.435 11.4375 14.25V11.8125H6.5625Z"
                                    fill="#23C55E" />
                                <path
                                    d="M13.5 14.0625H12C11.6925 14.0625 11.4375 13.8075 11.4375 13.5V11.8125H6.5625V13.5C6.5625 13.8075 6.3075 14.0625 6 14.0625H4.5C2.685 14.0625 1.6875 13.065 1.6875 11.25V7.5C1.6875 5.685 2.685 4.6875 4.5 4.6875H13.5C15.315 4.6875 16.3125 5.685 16.3125 7.5V11.25C16.3125 13.065 15.315 14.0625 13.5 14.0625ZM12.5625 12.9375H13.5C14.685 12.9375 15.1875 12.435 15.1875 11.25V7.5C15.1875 6.315 14.685 5.8125 13.5 5.8125H4.5C3.315 5.8125 2.8125 6.315 2.8125 7.5V11.25C2.8125 12.435 3.315 12.9375 4.5 12.9375H5.4375V11.25C5.4375 10.9425 5.6925 10.6875 6 10.6875H12C12.3075 10.6875 12.5625 10.9425 12.5625 11.25V12.9375Z"
                                    fill="#23C55E" />
                                <path
                                    d="M12.75 11.8125H5.25C4.9425 11.8125 4.6875 11.5575 4.6875 11.25C4.6875 10.9425 4.9425 10.6875 5.25 10.6875H12.75C13.0575 10.6875 13.3125 10.9425 13.3125 11.25C13.3125 11.5575 13.0575 11.8125 12.75 11.8125Z"
                                    fill="#23C55E" />
                                <path
                                    d="M7.5 8.8125H5.25C4.9425 8.8125 4.6875 8.5575 4.6875 8.25C4.6875 7.9425 4.9425 7.6875 5.25 7.6875H7.5C7.8075 7.6875 8.0625 7.9425 8.0625 8.25C8.0625 8.5575 7.8075 8.8125 7.5 8.8125Z"
                                    fill="#23C55E" />
                            </svg>
                            Cetak Data
                        </a>
                    </th>
                </tr>
            </thead>
            <thead class="text-center text-white uppercase bg-green border-b" style="background: green;">
                <tr>
                    <th scope="col" class="px-3 py-3 border-r">
                        Jenis Anggaran
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Uraian
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Anggaran
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Realisasi
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Selisih
                    </th>
                    <th scope="col" class="px-3 py-3 border-r">
                        Persentase
                    </th>
                </tr>
            </thead>

            <tbody class="text-left">
                @foreach ($anggaranbiayalaporans as $a)
                {{-- Pembiayaan Data Start --}}
                <tr class="bg-white border-b">
                    <td class="px-3 py-4 border-r">
                        {{$a->detail_jenis_anggaran}}
                    </td>
                    <th scope="row" class="font-medium px-6 py-4 border-r">
                        {{ $a->rincian }}
                    </th>
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        <span>Rp </span>{{ $a->nilai_anggaran }}
                    </td>
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        <span>Rp </span>{{ $a->nilai_realisasi }}
                    </td>
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        <span>Rp </span>{{ $a->nilai_anggaran - $a->nilai_realisasi }}
                    </td>
                    @php
                    $selisih = $a->nilai_anggaran - $a->nilai_realisasi;
                    @endphp
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        {{ round((($a->nilai_anggaran - $a->nilai_realisasi) / $a->nilai_anggaran) * 100, 1) }}%
                        {{-- {{ ($selisih / $a->nilai_anggaran) * 100 }}% --}}
                    </td>
                </tr>
                {{-- Pembiayaan Data End --}}
                @endforeach

                {{-- Pembiayaan Total Start --}}
                <tr class="bg-green text-white border-b font-bold" style="background: green;">
                    <th colspan="2" class="px-6 py-4 border-r whitespace-nowrap text-center">PEMBIAYAAN NETTO</th>

                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        <span>Rp </span>{{ $jumlahBiaya }}
                    </td>
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        <span>Rp </span>{{ $jumlahBiayaRea }}
                    </td>
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        <span>Rp </span>{{ $jumlahBiayaSel }}
                    </td>
                    <td class="px-3 py-4 border-r whitespace-nowrap">
                        {{round(($persenBiaya)*100, 1)}}%
                        {{-- {{ round((($a->nilai_anggaran - $a->nilai_realisasi) / $a->nilai_anggaran) * 100, 1) }}% --}}
                    </td>
                </tr>
                {{-- Pembiayaan Total End --}}
                </tr>
                {{-- Pembiayaan Total End --}}
            </tbody>
        </table>
    </div>
</div>
