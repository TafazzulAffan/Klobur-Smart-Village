@extends('layouts.layout-admin')
@section('title', 'Wisata Desa')

@section('header')
    <p class="text-sm md:text-base">
        <a href="/"><span class="text-green">Wisata Desa</span></a>
    </p>
    <div class="flex items-center gap-5 justify-end">
        <!-- Search Start -->
        <form class="w-72" action="/wisata" method="GET">
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
                    placeholder="Cari Judul Wisata" required>
            </div>
        </form>
        <!-- Search End -->

        <button type="button" onclick="window.location.href='/tambah-wisata'"
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
    <!-- Table Start -->
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-abu-700 border">
            <thead class="text-center text-white uppercase bg-green-500 border-b">
                <tr>
                    <th scope="col" class="px-6 py-3 border-r">
                        Judul
                    </th>
                    <th scope="col" class="px-3 py-3 border-r">
                        Foto
                    </th>
                    <th scope="col" class="px-6 py-3 border-r">
                        Deskripsi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Tindakan
                    </th>
                </tr>
            </thead>
            @foreach ($wisatas as $wisata)
                <tbody class="text-left">
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 border-r font-medium whitespace-nowrap">
                            {{ $wisata->judul }}</th>
                        <td class="px-3 py-4 border-r">
                            <img class="rounded-full w-10 h-10 object-cover mx-auto"
                                src="{{ asset('storage/wisata/' . $wisata->foto) }}">
                        </td>
                        <td class="px-6 py-4 border-r">
                            {{ Str::limit($wisata->deskripsi, '110','...')}}
                        </td>
                        <td class="px-1 py-4 flex justify-center gap-3">
                            <a href="/hapus-wisata/{{ $wisata->id }}">
                                <img class="bg-red-500 hover:bg-red-700 w-4 h-4 box-content p-2 rounded"
                                    src="{{ asset('icon/delete.svg') }}" alt="">
                            </a>
                            <a href="/tambah-wisata/{{ $wisata->id }}/edit">
                                <img class="bg-green-500 hover:bg-green-700 w-4 h-4 box-content p-2 rounded"
                                    src="{{ asset('icon/edit.svg') }}" alt="">
                            </a>
                        </td>
                    </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- Table End -->
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" crossorigin="anonymous">
    </script>
    @if (Session::has('post_deleted'))
        <script>
            swal("Great Job!", "{!! Session::get('post_deleted') !!}", "success", {
                button: "OK",
            })
        </script>
    @endif

    @if (Session::has('success'))
        <script>
            swal("Great Job!", "{!! Session::get('success') !!}", "success", {
                button: "OK",
            })
        </script>
    @endif

@endsection
