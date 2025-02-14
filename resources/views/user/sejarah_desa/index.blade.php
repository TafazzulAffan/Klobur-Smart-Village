@extends('layouts.layout-user')
@section('title', 'Website Resmi Pemerintah Desa Klobur - Sejarah Desa')

@section('header')
    <div class="">
        <p class="text-sm md:text-base">
            <a href="/"><span class="text-[#198754]">Profil Desa</span></a> > Sejarah Desa
        </p>
        <h3 class="font-bold text-xl md:text-3xl mt-2">Sejarah Desa</h3>
    </div>
@endsection

@section('content')
    <div class="text-justify text-base md:text-lg flex flex-col gap-10">
        <p>
            Desa Klobur, yang terletak di Kecamatan Sereseh, Kabupaten Sampang, Madura, memiliki sejarah yang erat dengan
            tradisi dan kehidupan masyarakat agraris Madura. Desa ini didirikan sejak zaman kerajaan-kerajaan kecil di
            Madura, ketika wilayah tersebut masih terbagi dalam banyak kadipaten yang saling terkait dalam kekuasaan dan
            budaya.

            Dalam sejarahnya, Desa Klobur berkembang sebagai desa pertanian dengan masyarakat yang hidup sederhana dan
            bergantung pada pertanian dan peternakan. Seperti banyak desa di Madura, Klobur juga dikenal memiliki kearifan
            lokal yang kuat, terutama dalam hal gotong royong dan tradisi kebudayaan seperti "kerapan sapi" dan berbagai
            ritual adat lainnya.

            Selain itu, Desa Klobur turut mengalami pengaruh dari perkembangan Islam di Madura. Banyak tokoh agama atau
            ulama dari Madura yang berperan dalam menjaga moral dan adat istiadat di desa ini, dengan pengaruh yang masih
            terasa hingga kini.
        </p>
    </div>

    <div class="pt-jarak">
        <h1 class="text-xl md:text-3xl font-bold mb-4 text-center">Lokasi Desa</h1>
        <div class="border mx-auto w-11/12 md:max-w-4xl border-black rounded-lg">
            <iframe class="mx-auto rounded-lg w-full h-52 md:h-96"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15833.542380670347!2d113.0791676!3d-7.196769999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd78a3a2e8c1713%3A0x6760e1dcf0ee78ec!2sKlobur%2C%20Kec.%20Sreseh%2C%20Kabupaten%20Sampang%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1731268640416!5m2!1sid!2sid"
                style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
@endsection
