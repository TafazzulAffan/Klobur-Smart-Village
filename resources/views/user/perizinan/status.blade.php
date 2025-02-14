@extends('layouts.layout-user')
@section('title', 'Website Resmi Pemerintah Desa Klobur - Status Pelayanan Online')

@section('header')
    <div class="">
        <p class="text-sm md:text-base">
            <a href="/perizinan-online"><span class="text-[#198754]">Layanan</span></a> > Status Pelayanan Online
        </p>
        <h3 class="font-bold text-xl md:text-3xl mt-2">Status Pelayanan Online Warga Desa Klobur</h3>
    </div>
@endsection

@section('content')
    <!-- Search Start -->
    <form class="flex flex-col md:flex-row items-center mb-jarak gap-5" role="search" method="GET"
        action="{{ URL::current() }}">
        @csrf
        <label for="default-search" class="sr-only">Search</label>
        <div class="relative w-full">
            <input type="text" id="default-search" name="search"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#198754] focus:border-[#198754] block w-full pl-4 p-2.5"
                placeholder="Cari Surat Berdasarkan NIK" value="{{ request('search') }}" required>
        </div>
        <button type="submit"
            class="py-2.5 px-8 text-sm font-medium text-white bg-[#198754] rounded-lg border border-[#198754] hover:bg-[#198754]-600 focus:ring-4 focus:outline-none focus:ring-[#198754]-300">
            Cari
        </button>
    </form>
    <!-- Search End -->

    <!-- Table Start -->
    {{-- @if (Session::has('nik_search')) --}}
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-abu-700 border">
            <thead class="text-center text-white uppercase bg-[#198754] border-b">
                <tr>
                    <th scope="col" class="px-3 py-3 border-r">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        NIK
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Waktu Surat Masuk
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tindakan
                    </th>
                </tr>
            </thead>
            @php
                $no = 1;
            @endphp
            @if($ada==1)
                @foreach ($perizinans as $perizinan)
                    <tbody class="text-left">
                        <tr class="bg-white border-b">
                            <td class="px-3 py-4 border-r">
                                {{ $no++ }}
                            </td>
                            <th scope="row" class="px-3 py-4 border-r font-medium">
                                {{ $perizinan->nama }}
                            </th>
                            <td class="px-3 py-4 border-r">
                                {{ $perizinan->nik }}
                            </td>
                            <td class="px-3 py-4 border-r">
                                {{ $perizinan->created_at }}
                            </td>
                            <td class="px-3 py-4 border-r whitespace-nowrap">
                                <div
                                    class="py-1 px-6 w-fit flex gap-2 items-center rounded-full justify-center mx-auto {{ $perizinan->status_surat == 'Selesai' ? 'bg-green-300 text-green-700' : 'bg-yellow-200 text-yellow-700' }}">
                                    <div
                                        class="w-2 h-2 rounded-full {{ $perizinan->status_surat == 'Selesai' ? 'bg-green-700' : 'bg-yellow-700' }}">
                                    </div>
                                    <p>{{ $perizinan->status_surat }}</p>
                                </div>
                            </td>
                            <td class="px-1 py-4 flex justify-center gap-3 box-content my-auto">
                                <button>
                                    @if ($perizinan->status_surat === 'Proses')
                                        <img class="w-4 h-4 box-content p-2 rounded {{ $perizinan->status_surat == 'Proses' ? 'bg-gray-400 hover:bg-gray-400' : 'bg-blue-500 hover:bg-blue-700' }}"
                                            src="{{ asset('icon/download.svg') }}" alt="">
                                    @elseif ($perizinan->upload_surat == null)
                                        <img class="w-4 h-4 box-content p-2 rounded {{ $perizinan->upload_surat == null ? 'bg-gray-400 hover:bg-gray-400' : 'bg-blue-500 hover:bg-blue-700' }}"
                                            src="{{ asset('icon/download.svg') }}" alt="">
                                    @else
                                        <a href="/download-surat/{{ $perizinan->id }}">
                                            <img class="w-4 h-4 box-content p-2 rounded {{ $perizinan->status_surat == 'Proses' ? 'bg-gray-400 hover:bg-gray-400' : 'bg-blue-500 hover:bg-blue-700' }}"
                                                src="{{ asset('icon/download.svg') }}" alt="">
                                        </a>
                                    @endif
                                </button>
                            </td>
                        </tr>
                    </tbody>

                @endforeach
            
            @else

                <tbody class="text-left">
                    <tr class="bg-white border-b">
                        <td colspan="6">Data Tidak Ada</td>
                    </tr>
                </tbody>
            @endif
        </table>
    </div>
    {{-- @endif --}}

    <!-- Table End -->
@endsection
