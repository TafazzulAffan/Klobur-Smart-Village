@extends('layouts.layout-home')
@section('title', 'Website Resmi Pemerintah Desa Klobur - Wisata Desa')

@section('carousel')
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-72 overflow-hidden md:h-96">
            <div class="text-left pl-8 md:pl-16 text-white h-full flex flex-col gap-5 justify-center absolute z-30">
                <h1 class="text-2xl md:text-5xl font-bold">Destinasi Wisata</h1>
                <a href="https://wa.me/62" target="_blank" rel="noopener noreferrer">
                    <button type="button"
                        class="text-xs md:text-base text-black bg-white hover:bg-gray-300 focus:outline-none focus:ring-4 focus:ring-[#198754]-300 font-medium px-2 py-2 mr-2 mb-2 w-32 md:w-40 rounded-lg">Hubungi
                        Kami</button>
                </a>
            </div>

            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out -z-[1]" data-carousel-item>
                <img src="{{ asset('img/foto1.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out -z-[1]" data-carousel-item>
                <img src="{{ asset('img/foto2.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out -z-[1]" data-carousel-item>
                <img src="{{ asset('img/foto4.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out -z-[1]" data-carousel-item>
                <img src="{{ asset('img/foto1.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out -z-[1]" data-carousel-item>
                <img src="{{ asset('img/foto3.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-7 h-1 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-7 h-1 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-7 h-1 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
            <button type="button" class="w-7 h-1 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-7 h-1 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
    </div>
@endsection

@section('content')
    <div class="">
        <div class="md:w-[60rem] mx-auto mb-jarak">
            <h1 class="border-b-2 border-[#198754] text-2xl md:text-4xl w-fit font-bold mx-auto pb-2 mb-9 text-center">
                Selamat Datang Di Desa Wisata Klobur
            </h1>
            <div class="flex flex-col md:flex-row gap-11 justify-center items-center">
                <img class="w-72 md:w-[22rem]" src="{{ asset('img/foto1.jpg') }}" alt="">
                <img class="w-72 md:w-[22rem]" src="{{ asset('img/foto2.jpg') }}" alt="">
                <img class="w-72 md:w-[22rem]" src="{{ asset('img/foto3.jpg') }}" alt="">
            </div>
        </div>

        <!-- Sektor Unggulan Section Start -->
        {{-- <div class="pt-jarak mb-jarak">
            <div class="text-center mb-12">
                <h1 class="text-xl md:text-3xl font-bold mb-2">
                    Sektor Unggulan Desa Wisata Klobur
                </h1>
                <p class="w-72 md:w-96 mx-auto">
                    Desa Wisata Klobur memiliki beberapa potensi yang diantaranya wisata
                </p>
            </div> --}}

        <div {{-- class="flex flex-col md:flex-row justify-center items-center gap-3" --}} class="grid grid-cols-1 md:grid-cols-3 gap-5 justify-items-center my-4 mx-4">
            @foreach ($wisatas as $wst)
                <!-- Card 1 Start -->
                <div class="w-4/5 md:w-11/12 p-6 bg-white border border-gray-200 rounded-lg shadow">
                    <div class=" rounded-lg mb-4">
                        <img class="w-full" src="{{ asset('storage/wisata/' . $wst->foto) }}" {{-- src="{{ asset('storage/wisata/' . $wst->foto) }}" --}}
                            alt="" />
                    </div>
                    <div class="flex gap-3 items-center pb-2">
                        <h5 class="mb-2 text-lg md:text-xl font-semibold tracking-tight text-black">
                            {{ $wst->judul }}
                        </h5>
                    </div>
                    <p class="mb-5 font-normal text-black">
                        {{ $wst->deskripsi }}
                    </p>
                    {{-- <p class="mb-5 font-normal text-black">
                    {{ $wst->id}}
                </p> --}}
                    <a class="w-fit mx-auto flex gap-1 text-gray-400 hover:text-[#198754]"
                        href="/wisata-desa/{{ $wst->id }}">Lebih Detail
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            @endforeach
            <!-- Card 1 End -->
        </div>
    </div>
    <!-- Sektor Unggulan Section End -->


    <!-- Berita Terkini Section Start -->
    <div class="py-jarak">
        <div class="text-center mb-12">
            <h1 class="text-xl md:text-3xl font-bold mb-2">Berita Terkini</h1>
            <p class="w-72 md:w-72 mx-auto">
                Baca berita terkini untuk mengetahui perkembangan di Desa Klobur
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 grid-rows-2 justify-items-center gap-6">
            @foreach ($sideNews as $sideNew)
                @if ($sideNew->status == 'Aktif')
                    <!-- Card 1 Start -->
                    <a href="/berita/{{ $sideNew->id }}"
                        class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row w-11/12 md:max-w-lg hover:bg-gray-100">
                        <img class="object-cover w-full rounded-t-lg h-52 md:h-full md:w-48 md:rounded-none md:rounded-l-lg"
                            src="{{ asset('storage/berita/' . $sideNew->gambar) }}" alt="" />
                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-base font-bold tracking-tight text-black dark:text-white">
                                {{ $sideNew->judul }}
                            </h5>
                            <p class="text-red-500 text-xs bg-abu-400 rounded-full w-fit py-0.5 px-2 md:px-3 mb-1">
                                {{ $sideNew->kategori }}
                            </p>
                            <p class="mb-3 text-sm font-normal text-black">
                                {!! $sideNew->konten !!}
                            </p>
                        </div>
                    </a>
                    <!-- Card 1 End -->
                @endif
            @endforeach

        </div>
    </div>
    <!-- Berita Terkini Section End -->

    </div>
@endsection
