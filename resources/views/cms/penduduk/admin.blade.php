@extends('layouts.layout-admin')
@section('title', 'Penduduk')

@section('header')
    <p class="text-sm md:text-base">
        <a href="/"><span class="text-green">Penduduk</span></a>
    </p>
    <div class="flex items-center gap-5 justify-end">
        <!-- Search Start -->
        <form class="w-72" action="/penduduk" method="GET">
            @csrf
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" name="search" id="default-search"
                    class="block w-full px-4 py-3 pr-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-green-500"
                    placeholder="Cari Berdasarkan Nama Penduduk" required>
            </div>
        </form>
        <!-- Search End -->

        <button type="button" onclick="window.location.href='{{ route('penduduk.create') }}'"
            class="flex items-center gap-3 text-white bg-green-500 hover:bg-green-600 focus:ring-2 focus:outline-none focus:ring-green-300 font-medium rounded-lg px-4 py-2 text-center mr-3 md:mr-0 text-lg">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 16 16" fill="none">
                <path
                    d="M8 0C8.55228 0 9 0.447715 9 1V7H15C15.5523 7 16 7.44772 16 8C16 8.55228 15.5523 9 15 9H9V15C9 15.5523 8.55228 16 8 16C7.44772 16 7 15.5523 7 15V9H1C0.447715 9 0 8.55228 0 8C0 7.44772 0.447715 7 1 7H7V1C7 0.447715 7.44772 0 8 0Z"
                    fill="#F8F9FA" />
                <path d="M2.5 8H13.5M8 2.5L8 13.5" stroke="#F8F9FA" stroke-linecap="round" stroke-linejoin="round" />
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M8 2C8.27614 2 8.5 2.22386 8.5 2.5V7.5H13.5C13.7761 7.5 14 7.72386 14 8C14 8.27614 13.7761 8.5 13.5 8.5H8.5V13.5C8.5 13.7761 8.27614 14 8 14C7.72386 14 7.5 13.7761 7.5 13.5V8.5H2.5C2.22386 8.5 2 8.27614 2 8C2 7.72386 2.22386 7.5 2.5 7.5H7.5V2.5C7.5 2.22386 7.72386 2 8 2Z"
                    fill="#F8F9FA" />
            </svg>
            Tambah Data
        </button>
    </div>
@endsection

@section('content')
    <div class="grid grid-cols-4 gap-7 mb-jarak">
        <!-- Card Penduduk Start -->
        <div class="p-6 shadow-xl">
            <div class="flex items-center gap-4 mb-6">
                <svg class="w-6 h-6 p-3 box-content bg-green-300 rounded-lg text-green-500" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9 2C6.38 2 4.25 4.13 4.25 6.75C4.25 9.32 6.26 11.4 8.88 11.49C8.96 11.48 9.04 11.48 9.1 11.49C9.12 11.49 9.13 11.49 9.15 11.49C9.16 11.49 9.16 11.49 9.17 11.49C11.73 11.4 13.74 9.32 13.75 6.75C13.75 4.13 11.62 2 9 2Z"
                        fill="currentColor" />
                    <path
                        d="M14.08 14.1499C11.29 12.2899 6.73996 12.2899 3.92996 14.1499C2.65996 14.9999 1.95996 16.1499 1.95996 17.3799C1.95996 18.6099 2.65996 19.7499 3.91996 20.5899C5.31996 21.5299 7.15996 21.9999 8.99996 21.9999C10.84 21.9999 12.68 21.5299 14.08 20.5899C15.34 19.7399 16.04 18.5999 16.04 17.3599C16.03 16.1299 15.34 14.9899 14.08 14.1499Z"
                        fill="currentColor" />
                    <path opacity="0.4"
                        d="M19.9899 7.3401C20.1499 9.2801 18.7699 10.9801 16.8599 11.2101C16.8499 11.2101 16.8499 11.2101 16.8399 11.2101H16.8099C16.7499 11.2101 16.6899 11.2101 16.6399 11.2301C15.6699 11.2801 14.7799 10.9701 14.1099 10.4001C15.1399 9.4801 15.7299 8.1001 15.6099 6.6001C15.5399 5.7901 15.2599 5.0501 14.8399 4.4201C15.2199 4.2301 15.6599 4.1101 16.1099 4.0701C18.0699 3.9001 19.8199 5.3601 19.9899 7.3401Z"
                        fill="white" />
                    <path
                        d="M21.9902 16.5899C21.9102 17.5599 21.2902 18.3999 20.2502 18.9699C19.2502 19.5199 17.9902 19.7799 16.7402 19.7499C17.4602 19.0999 17.8802 18.2899 17.9602 17.4299C18.0602 16.1899 17.4702 14.9999 16.2902 14.0499C15.6202 13.5199 14.8402 13.0999 13.9902 12.7899C16.2002 12.1499 18.9802 12.5799 20.6902 13.9599C21.6102 14.6999 22.0802 15.6299 21.9902 16.5899Z"
                        fill="white" />
                </svg>
                <h3 class="font-bold text-lg">Penduduk</h3>
            </div>
            <h3 class="mb-2"><span class="font-semibold text-4xl">{{ $totalPenduduks }}</span> Jiwa</h3>
        </div>
        <!-- Card Penduduk End -->

        <!-- Card Keluarga Start -->
        <div class="p-6 shadow-xl">
            <div class="flex items-center gap-4 mb-6">
                <svg class="w-6 h-6 p-3 box-content bg-purple-400 rounded-lg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.8"
                        d="M17.53 7.77C17.46 7.76 17.39 7.76 17.32 7.77C15.77 7.72 14.54 6.45 14.54 4.89C14.54 3.3 15.83 2 17.43 2C19.02 2 20.32 3.29 20.32 4.89C20.31 6.45 19.08 7.72 17.53 7.77Z"
                        fill="white" />
                    <path opacity="0.8"
                        d="M20.7901 14.6999C19.6701 15.4499 18.1001 15.7299 16.6501 15.5399C17.0301 14.7199 17.2301 13.8099 17.2401 12.8499C17.2401 11.8499 17.0201 10.8999 16.6001 10.0699C18.0801 9.86992 19.6501 10.1499 20.7801 10.8999C22.3601 11.9399 22.3601 13.6499 20.7901 14.6999Z"
                        fill="white" />
                    <path opacity="0.7"
                        d="M6.4399 7.77C6.5099 7.76 6.5799 7.76 6.6499 7.77C8.1999 7.72 9.4299 6.45 9.4299 4.89C9.4299 3.3 8.1399 2 6.5399 2C4.9499 2 3.6499 3.29 3.6499 4.89C3.6599 6.45 4.8899 7.72 6.4399 7.77Z"
                        fill="#6610F2" />
                    <path opacity="0.7"
                        d="M6.55012 12.8501C6.55012 13.8201 6.76012 14.7401 7.14012 15.5701C5.73012 15.7201 4.26012 15.4201 3.18012 14.7101C1.60012 13.6601 1.60012 11.9501 3.18012 10.9001C4.25012 10.1801 5.76012 9.8901 7.18012 10.0501C6.77012 10.8901 6.55012 11.8401 6.55012 12.8501Z"
                        fill="#6610F2" />
                    <path
                        d="M12.1203 15.87C12.0403 15.86 11.9503 15.86 11.8603 15.87C10.0203 15.81 8.55029 14.3 8.55029 12.44C8.55029 10.54 10.0803 9 11.9903 9C13.8903 9 15.4303 10.54 15.4303 12.44C15.4303 14.3 13.9703 15.81 12.1203 15.87Z"
                        fill="#6610F2" />
                    <path
                        d="M8.87029 17.9399C7.36029 18.9499 7.36029 20.6099 8.87029 21.6099C10.5903 22.7599 13.4103 22.7599 15.1303 21.6099C16.6403 20.5999 16.6403 18.9399 15.1303 17.9399C13.4203 16.7899 10.6003 16.7899 8.87029 17.9399Z"
                        fill="#6610F2" />
                </svg>
                <h3 class="font-bold text-lg">Keluarga</h3>
            </div>
            <h3 class="mb-2"><span class="font-semibold text-4xl">{{ $totalKeluargas }}</span> Keluarga</h3>
        </div>
        <!-- Card Keluarga End -->

        <!-- Card Laki Start -->
        <div class="p-6 shadow-xl">
            <div class="flex items-center gap-4 mb-6">
                <svg class="w-6 h-6 p-3 box-content bg-blue-300 rounded-lg text-blue-500" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9 2C6.38 2 4.25 4.13 4.25 6.75C4.25 9.32 6.26 11.4 8.88 11.49C8.96 11.48 9.04 11.48 9.1 11.49C9.12 11.49 9.13 11.49 9.15 11.49C9.16 11.49 9.16 11.49 9.17 11.49C11.73 11.4 13.74 9.32 13.75 6.75C13.75 4.13 11.62 2 9 2Z"
                        fill="currentColor" />
                    <path
                        d="M14.08 14.1499C11.29 12.2899 6.73996 12.2899 3.92996 14.1499C2.65996 14.9999 1.95996 16.1499 1.95996 17.3799C1.95996 18.6099 2.65996 19.7499 3.91996 20.5899C5.31996 21.5299 7.15996 21.9999 8.99996 21.9999C10.84 21.9999 12.68 21.5299 14.08 20.5899C15.34 19.7399 16.04 18.5999 16.04 17.3599C16.03 16.1299 15.34 14.9899 14.08 14.1499Z"
                        fill="currentColor" />
                    <path opacity="0.4"
                        d="M19.9899 7.3401C20.1499 9.2801 18.7699 10.9801 16.8599 11.2101C16.8499 11.2101 16.8499 11.2101 16.8399 11.2101H16.8099C16.7499 11.2101 16.6899 11.2101 16.6399 11.2301C15.6699 11.2801 14.7799 10.9701 14.1099 10.4001C15.1399 9.4801 15.7299 8.1001 15.6099 6.6001C15.5399 5.7901 15.2599 5.0501 14.8399 4.4201C15.2199 4.2301 15.6599 4.1101 16.1099 4.0701C18.0699 3.9001 19.8199 5.3601 19.9899 7.3401Z"
                        fill="white" />
                    <path
                        d="M21.9902 16.5899C21.9102 17.5599 21.2902 18.3999 20.2502 18.9699C19.2502 19.5199 17.9902 19.7799 16.7402 19.7499C17.4602 19.0999 17.8802 18.2899 17.9602 17.4299C18.0602 16.1899 17.4702 14.9999 16.2902 14.0499C15.6202 13.5199 14.8402 13.0999 13.9902 12.7899C16.2002 12.1499 18.9802 12.5799 20.6902 13.9599C21.6102 14.6999 22.0802 15.6299 21.9902 16.5899Z"
                        fill="white" />
                </svg>
                <h3 class="font-bold text-lg">Laki-Laki</h3>
            </div>
            <h3 class="mb-2"><span class="font-semibold text-4xl">{{ $totalPenduduksLK }}</span> Jiwa</h3>
        </div>
        <!-- Card Laki End -->

        <!-- Card Perempuan Start -->
        <div class="p-6 shadow-xl">
            <div class="flex items-center gap-4 mb-6">
                <svg class="w-6 h-6 p-3 box-content bg-pink-300 rounded-lg text-pink-500" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M9 2C6.38 2 4.25 4.13 4.25 6.75C4.25 9.32 6.26 11.4 8.88 11.49C8.96 11.48 9.04 11.48 9.1 11.49C9.12 11.49 9.13 11.49 9.15 11.49C9.16 11.49 9.16 11.49 9.17 11.49C11.73 11.4 13.74 9.32 13.75 6.75C13.75 4.13 11.62 2 9 2Z"
                        fill="currentColor" />
                    <path
                        d="M14.08 14.1499C11.29 12.2899 6.73996 12.2899 3.92996 14.1499C2.65996 14.9999 1.95996 16.1499 1.95996 17.3799C1.95996 18.6099 2.65996 19.7499 3.91996 20.5899C5.31996 21.5299 7.15996 21.9999 8.99996 21.9999C10.84 21.9999 12.68 21.5299 14.08 20.5899C15.34 19.7399 16.04 18.5999 16.04 17.3599C16.03 16.1299 15.34 14.9899 14.08 14.1499Z"
                        fill="currentColor" />
                    <path opacity="0.4"
                        d="M19.9899 7.3401C20.1499 9.2801 18.7699 10.9801 16.8599 11.2101C16.8499 11.2101 16.8499 11.2101 16.8399 11.2101H16.8099C16.7499 11.2101 16.6899 11.2101 16.6399 11.2301C15.6699 11.2801 14.7799 10.9701 14.1099 10.4001C15.1399 9.4801 15.7299 8.1001 15.6099 6.6001C15.5399 5.7901 15.2599 5.0501 14.8399 4.4201C15.2199 4.2301 15.6599 4.1101 16.1099 4.0701C18.0699 3.9001 19.8199 5.3601 19.9899 7.3401Z"
                        fill="white" />
                    <path
                        d="M21.9902 16.5899C21.9102 17.5599 21.2902 18.3999 20.2502 18.9699C19.2502 19.5199 17.9902 19.7799 16.7402 19.7499C17.4602 19.0999 17.8802 18.2899 17.9602 17.4299C18.0602 16.1899 17.4702 14.9999 16.2902 14.0499C15.6202 13.5199 14.8402 13.0999 13.9902 12.7899C16.2002 12.1499 18.9802 12.5799 20.6902 13.9599C21.6102 14.6999 22.0802 15.6299 21.9902 16.5899Z"
                        fill="white" />
                </svg>
                <h3 class="font-bold text-lg">Perempuan</h3>
            </div>
            <h3 class="mb-2"><span class="font-semibold text-4xl">{{ $totalPenduduksPR }}</span> Jiwa</h3>
        </div>
        <!-- Card Perempuan End -->
    </div>

    <!-- Table Start -->
    {{-- @if ($cariPenduduks->search('nama')) --}}
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-abu-700 border">
            <thead class="text-center text-white uppercase bg-green-500 border-b">
                <tr>
                    <th scope="col" class="px-6 py-3 border-r">
                        Tindakan
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        NIK
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        KK
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Jenis Kelamin
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        TTL
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Golongan Darah
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Agama
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Pendidikan
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Pekerjaan
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Status Perkawinan
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Status Hubungan Keluarga
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Kewarganegaraan
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Nama Ayah
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama Ibu
                    </th>
                </tr>
            </thead>
            @foreach ($penduduks as $penduduk)
                <tbody class="text-center">
                    <td class="px-1 py-4 flex justify-center gap-3">
                        <a href="/hapus-penduduk/{{ $penduduk->id }}">
                            <img class="bg-red-500 hover:bg-red-700 w-4 h-4 box-content p-2 rounded"
                                src="{{ asset('icon/delete.svg') }}" alt="">
                        </a>

                        <a href="/penduduk/{{ $penduduk->id }}/edit">
                            <img class="bg-green-500 hover:bg-green-700 w-4 h-4 box-content p-2 rounded"
                                src="{{ asset('icon/edit.svg') }}" alt="">
                        </a>
                    </td>
                    <td>{{ $penduduk->nik }}</td>
                    <td>{{ $penduduk->kk }}</td>
                    <td>{{ $penduduk->nama }}</td>
                    <td>{{ $penduduk->jenis_kelamin }}</td>
                    <td>{{ $penduduk->tempat_lahir }}, {{ $penduduk->tanggal_lahir }}</td>
                    <td>{{ $penduduk->darah ? $penduduk->darah->golongan : '-' }}</td>
                    <td>{{ $penduduk->agama->nama }}</td>
                    <td>{{ $penduduk->pendidikan ? $penduduk->pendidikan->nama : '-' }}</td>
                    <td>{{ $penduduk->pekerjaan ? $penduduk->pekerjaan->nama : '-' }}</td>
                    <td>{{ $penduduk->statusPerkawinan->nama }}</td>
                    <td>{{ $penduduk->statusHubunganDalamKeluarga->nama }}</td>
                    <td>
                        @php
                            switch ($penduduk->kewarganegaraan) {
                                case 1:
                                    echo 'WNI';
                                    break;
                                case 2:
                                    echo 'WNA';
                                    break;
                                case 3:
                                    echo 'Dua Kewarganegaraan';
                                    break;
                            }
                        @endphp
                    <td>{{ $penduduk->nama_ayah }}</td>
                    <td>{{ $penduduk->nama_ibu }}</td>
                </tbody>
            @endforeach
        </table>
    </div>
    <!-- Table End -->
    {{-- @endif --}}
@endsection

@section('script')

@endsection
