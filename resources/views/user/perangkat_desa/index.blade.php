@extends('layouts.layout-user')
@section('title', 'Website Resmi Pemerintah Desa Klobur - Perangkat Desa')

@section('header')
    <div class="">
        <p class="text-sm md:text-base">
            <a href="/"><span class="text-[#198754]">Profil Desa</span></a> > Perangkat Desa
        </p>
        <h3 class="font-bold text-xl md:text-3xl mt-2">Perangkat Desa</h3>
    </div>
@endsection

@section('content')

    <!--Foto Perangkat Desa START-->

    <!--ROW 1-->
    <div class="grid grid-cols-2 md:grid-cols-3 gap-5 justify-items-center">
        @foreach ($perangkatDesa as $orang)
            @if ($orang->status == 'Aktif')
                <div class="w-4/5 md:w-2/3 rounded">
                    <img class="w-full md:w-52 h-48 md:h-64 rounded-lg object-cover"
                        src="{{ asset('storage/perangkatDesa/' . $orang->foto) }}" alt="image">
                    <p class="font-bold text-base md:text-lg text-center mt-3">{{ $orang->nama }}</p>
                    <p class="font-normal text-center text-sm md:text-base">{{ $orang->jabatan }}</p>
                </div>
            @endif
        @endforeach
    </div>
    <!--Foto Perangkat Desa END-->

    <!--VISI MISI START-->
    <h1 class="border-b-2 border-[#198754] text-2xl md:text-4xl w-fit font-bold mx-auto pb-2 mb-9 mt-20 text-center">
        VISI dan MISI
    </h1>

    <!--Visi-->
    <div class="text-base md:text-lg flex flex-col gap-10">
        <div class="">
            <h3 class="font-bold">
                VISI
            </h3>
            <ul class="list-decimal ml-10">
                <li> Klobur Berseri (Bersih, Religius, Sejahtera, Rapi, dan Indah)</li>
                <li>Terciptanya masyarakat Desa Klobur yang maju dan sejahtera</li>
            </ul>
        </div>

        <!--Misi-->
        <div class="">
            <h3 class="font-bold">
                MISI
            </h3>
            <ul class="list-decimal ml-10">
                <li>Membentuk Manusia yang bertaqwa melalui peran Masjid dan tempat ibadah sebagai pusat peribadatan.</li>
                <li>Mendorong peran aktif pemuda dalam berorganisasi, kegiatan sosial dan bermasyarkat.</li>
                <li>Mendorong terciptanya ketentraman dan ketertiban dalam kehidupan bermasyarakat, berbangsa dan bernegara.
                </li>
                <li>Mewujudkan Pemerintah Desa yang efektif, bersih dan Demokratis.</li>
                <li>Mengoptimalkan ketetapan Alokasi dan Distribusi sumber-sumber APBDesa untuk peningkatan Kesejahteraan
                    Rakyat</li>
                <li>Peningkatan kebutuhan pelayanan sosial dasar Masyarakat bidang pendidikan dan kesehatan.</li>
                <li>Meningkatkan akses dasar transportasi jalan desa, jalan pertanian untuk mendukung perekonomian.</li>
            </ul>
        </div>
    </div>
    <!--VISI MISI END-->

@endsection
