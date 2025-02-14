@extends('layouts.layout-home')
@section('title', 'Website Resmi Pemerintah Desa Klobur - Beranda')


@section('carousel')
    <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-72 overflow-hidden md:h-96">
            <div class="text-left pl-8 md:pl-16 text-white h-full flex flex-col gap-5 justify-center absolute z-30">
                <h1 class="text-2xl md:text-5xl font-bold">Klobur Smart Village</h1>
                <h2 class="text-base md:text-2xl font-normal">
                    Desa Klobur
                </h2>
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
                <img src="{{ asset('img/foto3.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out -z-[1]" data-carousel-item>
                <img src="{{ asset('img/foto2.jpg') }}"
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
        </div>
    </div>
@endsection

@section('content')
    <div class="">
        <!-- Jumbotron Section Start -->
        <div class="md:w-[60rem] mx-auto mb-jarak">
            <h1 class="border-b-2 border-[#198754] text-2xl md:text-4xl w-fit font-bold mx-auto pb-2 mb-9">
                Desa Klobur
            </h1>
            <p class="text-center mb-12">
                Desa Wisata Klobur di Kecamatan Sreseh, Kabupaten Sampang, Jawa Timur, kini menjadi destinasi wisata
                unggulan dengan keindahan pemandangan laut dan pengalaman unik melalui Warung Apung (Berung Ngambeng).
                Warung ini terletak di atas sungai dan menawarkan kuliner lokal sambil menikmati pemandangan alam.
                Pengunjung juga dapat menjelajahi jalur tracking yang menawan di sekitar warung. Untuk pengalaman terbaik,
                kunjungi Klobur pada pagi atau sore hari untuk menikmati keindahan sunrise dan sunset yang mempesona.
            </p>
            <div class="flex flex-col md:flex-row gap-10">
                <img src="{{ asset('img/per1.png') }}" class="w-52 md:w-80 h-52 md:h-80 object-cover mx-auto md:mx-0"
                    alt="" />
                <div class="md:w-96 text-center md:text-left">
                    <p class="mb-5 text-center md:text-left">
                        Desa Klobur saat ini sedang berupaya untuk bertransformasi dari desa konvensional menjadi desa
                        digital. Dengan adanya website ini, diharapkan masyarakat Desa Klobur maupun masyarakat umum akan
                        lebih mudah mengakses informasi dan mendapatkan berita terbaru tentang desa secara lebih cepat dan
                        terkini.
                    </p>
                    <p class="font-semibold text-lg">Nama?</p>
                    <p>Kepala Desa Klobur</p>
                </div>
            </div>
        </div>
        <!-- Jumbotron Section End -->

        <!-- Sektor Unggulan Section Start -->
        <div class="py-jarak mb-jarak">
            <div class="text-center mb-12">
                <h1 class="text-xl md:text-3xl font-bold mb-2">
                    Sektor Unggulan Desa Klobur
                </h1>
                <p class="w-72 md:w-[35rem] mx-auto">
                    Desa Klobur memiliki beberapa sektor unggulan yang diantaranya
                    sektor pertanian, perkebunan dan wisata desa
                </p>
            </div>
            <div class="flex flex-col md:flex-row justify-center items-center gap-3">
                <!-- Card 1 Start -->
                <div class="max-w-xs md:max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                    <div class="flex gap-3 items-center pb-2">
                        <div class="p-5 bg-[#198754] rounded-lg">
                            <img class="w-10 h-10" src="{{ asset('icon/tani-icon.svg') }}" alt="" />
                        </div>
                        <h5 class="mb-2 text-lg md:text-xl font-semibold tracking-tight text-black">
                            Pertanian<br />Masyarakat
                        </h5>
                    </div>
                    <p class="mb-3 font-normal text-black">
                        Masyarakat Desa Klobur memiliki beberapa sektor pertanian
                        unggulan seperti Jagung dan Padi
                    </p>
                </div>
                <!-- Card 1 End -->

                <!-- Card 2 Start -->
                <div class="max-w-xs md:max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                    <div class="flex gap-3 items-center pb-2">
                        <div class="p-5 bg-[#198754] rounded-lg">
                            <img class="w-10 h-10" src="{{ asset('icon/kebun-icon.svg') }}" alt="" />
                        </div>
                        <h5 class="mb-2 text-lg md:text-xl font-semibold tracking-tight text-black">
                            Perkebunan<br />Masyarakat
                        </h5>
                    </div>
                    <p class="mb-3 font-normal text-black">
                        Desa Klobur memiliki bebrapa sektor perkebunan yang
                        diantaranya Tanaman Porang dan Kopi
                    </p>
                </div>
                <!-- Card 2 End -->

                <!-- Card 3 Start -->
                <div class="max-w-xs md:max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow">
                    <div class="flex gap-3 items-center pb-2">
                        <div class="p-5 bg-[#198754] rounded-lg">
                            <img class="w-10 h-10" src="{{ asset('icon/wisata-icon.svg') }}" alt="" />
                        </div>
                        <h5 class="mb-2 text-lg md:text-xl font-semibold tracking-tight text-black">
                            Desa<br />Wisata
                        </h5>
                    </div>
                    <p class="mb-3 font-normal text-black">
                        Desa Klobur memiliki banyak keindahan alam yang dapat
                        dijadikan wisata yang menarik bagi masyarakat
                    </p>
                </div>
                <!-- Card 3 End -->
            </div>
        </div>
        <!-- Sektor Unggulan Section End -->

        <!-- Berita Terkini Section Start -->
        <div class="pb-jarak">
            <div class="text-center mb-12">
                <h1 class="text-xl md:text-3xl font-bold mb-2">Berita Terkini</h1>
                <p class="w-72 md:w-72 mx-auto">
                    Baca berita terkini untuk mengetahui perkembangan di Desa Klobur
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 grid-rows-2 justify-items-center gap-6">



            </div>
        </div>
        <!-- Berita Terkini Section End -->

        <!-- Peta Lokasi Section Start -->
        <div class="py-jarak">
            <h1 class="text-xl md:text-3xl font-bold mb-4 text-center">
                Lokasi Desa
            </h1>
            <div class="border mx-auto w-11/12 md:max-w-4xl border-black rounded-lg mb-5">
                <iframe class="mx-auto rounded-lg w-full h-52 md:h-96"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15833.543127554745!2d113.06886785675134!3d-7.19674859618675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd78a3a2e8c1713%3A0x6760e1dcf0ee78ec!2sKlobur%2C%20Kec.%20Sreseh%2C%20Kabupaten%20Sampang%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1725265502362!5m2!1sid!2sid"
                    width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="w-11/12 md:max-w-4xl flex flex-col md:flex-row justify-between items-center mx-auto gap-5">
                <div class="max-w-xs md:max-w-sm">
                    <h5 class="text-lg md:text-2xl font-bold">Desa Klobur</h5>
                    <p>Kecamatan Sereseh, Kabupaten Sampang, Madura, Jawa Timur</p>
                </div>
                <button type="button"
                    class="w-fit text-black bg-abu-400 hover:bg-abu-500 focus:outline-none focus:ring-4 focus:ring-abu-500 rounded-lg px-12 py-2 font-bold shadow-md">
                    <a href="https://maps.app.goo.gl/aAvCXoAUJtcW6NQ89" target="_blank">
                        Buka Peta
                    </a>
                </button>
            </div>
        </div>
        <!-- Peta Lokasi Section End -->
    </div>
@endsection
