@extends('layouts.layout-user')
@section('title', 'Website Resmi Pemerintah Desa Klobur - Pelayanan Online')

@section('header')
    <div class="">
        <a href="/"><p class="text-sm md:text-base"><span class="text-[#198754]">Layanan</span></a> > Pelayanan Online</p>
    </div>
    <div class="flex flex-col md:flex-row justify-between gap-20">
        <div class="flex flex-col justify-around">
            <h3 class="font-bold text-xl md:text-3xl mt-2">Pelayanan Online</h3>
            <p class="text-base md:text-lg text-justify">Pelayanan online merupakan fitur layanan di desa Klobur yang dapat
                mempermudah masyarakat dalam pengurusan surat secara online dimanapun dan kapanpun.</p>
            <h3 class="font-bold text-lg md:text-2xl">Formulir Layanan Administrasi</h3>
        </div>
        <img class="w-96 h-60 object-cover object-center hidden md:block" src="{{ asset('img/bg-1.png') }}" alt="">
    </div>
@endsection

@section('content')

    <form method="POST" action="{{ route('userperizinan.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col gap-6 w-4/5 mx-auto md:mx-0">
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                <input type="text" name="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#198754] focus:border-[#198754] block w-full p-2.5"
                    placeholder="Masukkan Email Anda">
            </div>
            <div>
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                <input type="text" id="nama" name="nama"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#198754] focus:border-[#198754] block w-full p-2.5"
                    placeholder="Masukkan Nama Anda">
            </div>
            <div>
                <label for="nik" class="block mb-2 text-sm font-medium text-gray-900">Nomor NIK/KTP</label>
                <input type="text" id="nik" name="nik"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#198754] focus:border-[#198754] block w-full p-2.5"
                    placeholder="Masukkan Nomor NIK/KTP">
                <label for="nik" class="block mt-2 text-sm text-gray-900">Nomor NIK/KTP harus 16 digit</label>
            </div>
            <div>
                <label for="kk" class="block mb-2 text-sm font-medium text-gray-900">Nomor KK</label>
                <input type="text" id="kk" name="kk"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#198754] focus:border-[#198754] block w-full p-2.5"
                    placeholder="Masukkan Nomor KK">
                <label for="kk" class="block mt-2 text-sm text-gray-900">Nomor KK harus 16 digit</label>
            </div>
            <div>
                <label for="kelamin" class="block mb-2 text-sm font-medium text-gray-900">Jenis Kelamin</label>
                <select id="kelamin" name="jenis_kelamin"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#198754] focus:border-[#198754] block w-full p-2.5">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div>
                <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                <textarea id="alamat" rows="4" name="alamat"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#198754] focus:border-[#198754]"
                    placeholder="Masukkan Alamat"></textarea>
            </div>
            <div>
                <label for="jenis-surat" class="block mb-2 text-sm font-medium text-gray-900">Jenis Surat</label>
                <select id="jenis-surat" name="jenis_surat"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#198754] focus:border-[#198754] block w-full p-2.5">
                    <option selected>Pilih Jenis Surat</option>
                    <option value="Pengantar KTP">Pengantar KTP</option>
                    <option value="Pengantar KK">Pengantar KK</option>
                    <option value="Pengantar SKCK">Pengantar SKCK</option>
                    <option value="Pengantar Akta Kelahiran">Pengantar Akta Kelahiran</option>
                    <option value="Pengantar Akta Kematian">Pengantar Akta Kematian</option>
                    <option value="Surat Keterangan Usaha (SKU)">Surat Keterangan Usaha (SKU)</option>
                    <option value="Surat Domisili">Surat Domisili</option>
                    <option value="SKTM">SKTM</option>
                    <option value="Surat Nikah">Surat Nikah</option>
                </select>
            </div>
            <div>
                <label for="keperluan" class="block mb-2 text-sm font-medium text-gray-900">Keperluan Surat</label>
                <textarea id="keperluan" rows="4" name="keperluan_surat"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#198754] focus:border-[#198754]"
                    placeholder="Masukkan Keperluan Surat"></textarea>
            </div>
            <div>
                <label for="pesan" class="block mb-2 text-sm font-medium text-gray-900">Pesan</label>
                <textarea id="pesan" rows="4" name="pesan"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-[#198754] focus:border-[#198754]"
                    placeholder="Masukkan Pesan Surat"></textarea>
            </div>
            <div>
                <label for="pengambilan" class="block mb-2 text-sm font-medium text-gray-900">Jenis Pengambilan
                    Surat</label>
                <select id="pengambilan" name="jenis_pengambilan"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#198754] focus:border-[#198754] block w-full p-2.5">
                    <option selected>Pilih Jenis Pengambilan Surat</option>
                    <option value="Online">Online</option>
                    <option value="Offline">Offline</option>
                </select>
            </div>

            <div>
                <select name="status_surat" id="status_surat" hidden>
                    <option value="Proses" selected></option>
                </select>
            </div>
            <div>
                <label for="berkas-ktp" class="block mb-2 text-sm font-medium text-gray-900">Upload Berkas Scan/Foto
                    KTP</label>
                <input type="file" id="berkas-ktp" name="berkas_ktp"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#198754] focus:border-[#198754] block w-full">
            </div>
            <div>
                <label for="berkas-kk" class="block mb-2 text-sm font-medium text-gray-900">Upload Berkas Scan/Foto
                    KK</label>
                <input type="file" id="berkas-kk" name="berkas_kk"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#198754] focus:border-[#198754] block w-full">
            </div>
            <div>
                <label for="berkas-pendukung" class="block mb-2 text-sm font-medium text-gray-900">Upload Berkas Scan/Foto
                    Pendukung Lainnya</label>
                <input type="file" id="berkas-pendukung" name="berkas_lain"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-[#198754] focus:border-[#198754] block w-full">
            </div>
            <div class="flex items-center mb-4">
                <input id="checkbox-data" type="checkbox" value="" required
                    class="w-6 h-6 text-[#198754] bg-gray-200 border-gray-300 rounded focus:ring-[#198754] focus:ring-2">
                <label for="checkbox-data" class="ml-2 text-sm font-medium text-gray-900">Data yang saya berikan adalah
                    benar!</label>
            </div>
            <div class="flex justify-end">
                <button type="submit"
                    class="text-white bg-[#198754] hover:bg-[#198754]-600 focus:ring-4 focus:outline-none focus:ring-[#198754]-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Kirim
                    Surat</button>
            </div>
        </div>
    </form>

    <div class="mt-jarak">
        <h3 class="font-bold text-xl md:text-3xl">Syarat Pengajuan Surat</h3>
        <p class="text-base md:text-lg text-justify my-8">Apabila ingin mengajukan layanan secara online maka dapat
            melampirkan dokumen secara online. Apabila ingin mengajukan secara offline maka dapat membawa berkas persyaratan
            di atas dan datang ke kantor Desa Klobur secara langsung.</p>
    </div>

    <div class="flex flex-col gap-5" id="accordion-collapse" data-accordion="collapse">
        <h2 id="accordion-collapse-heading-1">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium text-left text-white focus:ring-4 focus:ring-[#198754]-200 bg-[#198754] hover:bg-[#198754]-600 rounded-lg"
                data-accordion-target="#accordion-collapse-body-1" aria-expanded="false"
                aria-controls="accordion-collapse-body-1">
                <span>Syarat Pembuatan Surat Pengantar KTP</span>
                <svg data-accordion-icon class="w-3 h-3 box-content px-1 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
            <ol class="list-decimal pl-10 md:pl-jarak py-5 flex flex-col gap-2">
                <li>Berusia 17 tahun atau lebih atau telah menikah</li>
                <li>Fotocopy KK</li>
            </ol>
        </div>
        <h2 id="accordion-collapse-heading-2">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium text-left text-white border border-b-0 border-gray-200 focus:ring-4  focus:ring-[#198754]-200 bg-[#198754] hover:bg-[#198754]-600 rounded-lg"
                data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                aria-controls="accordion-collapse-body-2">
                <span>Syarat Pembuatan Surat Pengantar KK</span>
                <svg data-accordion-icon class="w-3 h-3 box-content px-1 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
            <ol class="list-decimal pl-10 md:pl-jarak py-5 flex flex-col gap-2">
                <li>Fotocopy KTP</li>
                <li>Fotocopy KK Masing-Masing Pasangan Suami Istri</li>
                <li>Fotocopy Buku Nikah/Akta Perkawinan</li>
            </ol>
        </div>
        <h2 id="accordion-collapse-heading-3">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium text-left  text-white border border-b-0 border-gray-200 focus:ring-4  focus:ring-[#198754]-200 bg-[#198754] hover:bg-[#198754]-600 rounded-lg"
                data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                aria-controls="accordion-collapse-body-3">
                <span>Syarat Pembuatan Surat Pengantar SKCK</span>
                <svg data-accordion-icon class="w-3 h-3 box-content px-1 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
            <ol class="list-decimal pl-10 md:pl-jarak py-5 flex flex-col gap-2">
                <li>Fotocopy KTP</li>
                <li>Pas Foto 3x4</li>
            </ol>
        </div>
        <h2 id="accordion-collapse-heading-4">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium text-left  text-white border border-b-0 border-gray-200 focus:ring-4  focus:ring-[#198754]-200 bg-[#198754] hover:bg-[#198754]-600 rounded-lg"
                data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                aria-controls="accordion-collapse-body-4">
                <span>Syarat Pembuatan Surat Pengantar Akta Kelahiran</span>
                <svg data-accordion-icon class="w-3 h-3 box-content px-1 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-4" class="hidden" aria-labelledby="accordion-collapse-heading-3">
            <ol class="list-decimal pl-10 md:pl-jarak py-5 flex flex-col gap-2">
                <li>Fotocopy KTP</li>
                <li>Fotocopy KK</li>
            </ol>
        </div>
        <h2 id="accordion-collapse-heading-5">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium text-left  text-white border border-b-0 border-gray-200 focus:ring-4  focus:ring-[#198754]-200 bg-[#198754] hover:bg-[#198754]-600 rounded-lg"
                data-accordion-target="#accordion-collapse-body-5" aria-expanded="false"
                aria-controls="accordion-collapse-body-5">
                <span>Syarat Pembuatan Surat Pengantar Akta Kematian</span>
                <svg data-accordion-icon class="w-3 h-3 box-content px-1 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-5" class="hidden" aria-labelledby="accordion-collapse-heading-5">
            <ol class="list-decimal pl-10 md:pl-jarak py-5 flex flex-col gap-2">
                <li>Fotocopy KTP</li>
                <li>Fotocopy KK</li>
            </ol>
        </div>
        <h2 id="accordion-collapse-heading-6">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium text-left  text-white border border-b-0 border-gray-200 focus:ring-4  focus:ring-[#198754]-200 bg-[#198754] hover:bg-[#198754]-600 rounded-lg"
                data-accordion-target="#accordion-collapse-body-6" aria-expanded="false"
                aria-controls="accordion-collapse-body-6">
                <span>Syarat Pembuatan Surat Keterangan Usaha (SKU)</span>
                <svg data-accordion-icon class="w-3 h-3 box-content px-1 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-6" class="hidden" aria-labelledby="accordion-collapse-heading-6">
            <ol class="list-decimal pl-10 md:pl-jarak py-5 flex flex-col gap-2">
                <li>Fotocopy KTP</li>
                <li>Fotocopy KK</li>
                <li>Jenis Usaha/Nama Usaha (Silahkan Tuliskan Pada Kolom Pesan Saat Pengajuan Surat)</li>
            </ol>
        </div>
        <h2 id="accordion-collapse-heading-7">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium text-left  text-white border border-b-0 border-gray-200 focus:ring-4  focus:ring-[#198754]-200 bg-[#198754] hover:bg-[#198754]-600 rounded-lg"
                data-accordion-target="#accordion-collapse-body-7" aria-expanded="false"
                aria-controls="accordion-collapse-body-7">
                <span>Syarat Pembuatan Surat Keterangan Domisili</span>
                <svg data-accordion-icon class="w-3 h-3 box-content px-1 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-7" class="hidden" aria-labelledby="accordion-collapse-heading-7">
            <ol class="list-decimal pl-10 md:pl-jarak py-5 flex flex-col gap-2">
                <li>Fotocopy KTP</li>
                <li>Fotocopy KK</li>
                <li>Surat Pengantar RT/RW</li>
            </ol>
        </div>
        <h2 id="accordion-collapse-heading-8">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium text-left  text-white border border-b-0 border-gray-200 focus:ring-4  focus:ring-[#198754]-200 bg-[#198754] hover:bg-[#198754]-600 rounded-lg"
                data-accordion-target="#accordion-collapse-body-8" aria-expanded="false"
                aria-controls="accordion-collapse-body-8">
                <span>Syarat Pembuatan Surat Keterangan Tidak Mampu (SKTM)</span>
                <svg data-accordion-icon class="w-3 h-3 box-content px-1 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-8" class="hidden" aria-labelledby="accordion-collapse-heading-8">
            <ol class="list-decimal pl-10 md:pl-jarak py-5 flex flex-col gap-2">
                <li>Fotocopy KTP</li>
                <li>Fotocopy KK</li>
            </ol>
        </div>
        <h2 id="accordion-collapse-heading-9">
            <button type="button"
                class="flex items-center justify-between w-full p-5 font-medium text-left  text-white border border-b-0 border-gray-200 focus:ring-4  focus:ring-[#198754]-200 bg-[#198754] hover:bg-[#198754]-600 rounded-lg"
                data-accordion-target="#accordion-collapse-body-9" aria-expanded="false"
                aria-controls="accordion-collapse-body-9">
                <span>Syarat Pembuatan Surat Nikah</span>
                <svg data-accordion-icon class="w-3 h-3 box-content px-1 rotate-180 shrink-0" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 5 5 1 1 5" />
                </svg>
            </button>
        </h2>
        <div id="accordion-collapse-body-9" class="hidden" aria-labelledby="accordion-collapse-heading-9">
            <ol class="list-decimal pl-10 md:pl-jarak py-5 flex flex-col gap-2">
                <li>Fotocopy KTP</li>
                <li>Fotocopy KK</li>
                <li>Fotocopy Akta Kelahiran</li>
            </ol>
        </div>
    </div>

@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" crossorigin="anonymous">
    </script>
    @if (Session::has('post_deleted'))
        <script>
            swal("Great Job!", "{!! Session::get('post_deleted') !!}", "[#198754]", {
                button: "OK",
            })
        </script>
    @endif

    @if (Session::has('[#198754]'))
        <script>
            swal("Great Job!", "{!! Session::get('[#198754]') !!}", "[#198754]", {
                button: "OK",
            })
        </script>
    @endif

@endsection
