@extends('layouts.layout-admin')
@section('title', 'Cek Perizinan Online')

@section('other')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        input[type="file"][id="berkas-ktp"]::-webkit-file-upload-button,
        input[type="file"][id="berkas-kk"]::-webkit-file-upload-button,
        input[type="file"][id="berkas-lain"]::-webkit-file-upload-button {
            visibility: hidden;
            position: absolute
        }
    </style>
@endsection

@section('header')
    <h2 class="font-bold text-lg">Cek Perizinan Online</h2>
@endsection

@section('content')
    <div x-data="{
        activeStep: 1,
        next() {
            this.activeStep = this.activeStep + 1;
        },
        prev() {
            this.activeStep = this.activeStep - 1;
        }
    }">
        <ol class="flex items-center w-4/5 mx-auto text-sm font-medium text-center text-gray-900 sm:text-base mb-jarak">
            <li class="flex md:w-full items-center sm:after:content-[''] after:w-full after:h-1 after:border-b-2 after:rounded-full after:border-gray-900 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10"
                :class="activeStep >= 2 ? 'after:border-green' : 'border-transparent'">
                <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-900 rounded"
                    :class="activeStep >= 1 ? 'text-green' : 'text-gray-900'">
                    <span class="mr-2 w-8 h-8 box-content flex items-center justify-center"
                        :class="activeStep >= 1 ? 'bg-green-100' : 'bg-gray-300'">1</span>
                    Formulir
                </span>
            </li>
            <li class="flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b-2 after:rounded-full after:border-gray-900 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10"
                :class="activeStep === 3 ? 'after:border-green' : 'border-transparent'">
                <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-900"
                    :class="activeStep >= 2 ? 'text-green' : 'text-gray-900'">
                    <span class="mr-2 w-8 h-8 box-content flex items-center justify-center rounded"
                        :class="activeStep >= 2 ? 'bg-green-100' : 'bg-gray-300'">2</span>
                    Berkas <span class="hidden sm:inline-flex sm:ml-2">Diupload</span>
                </span>
            </li>
            <li class="flex items-center" :class="activeStep === 3 ? 'text-green' : 'text-gray-900'">
                <span class="mr-2 w-8 h-8 box-content flex items-center justify-center rounded"
                    :class="activeStep === 3 ? 'bg-green-100' : 'bg-gray-300'">3</span>
                Surat <span class="hidden sm:inline-flex sm:ml-2">Perizinan
            </li>
        </ol>

        <div class="p-8 shadow-xl">
            <form action="{{ route('perizinan.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div x-show="activeStep === 1" x-transition class="bg-white flex flex-col gap-6 w-3/4 mx-auto">
                    <div>
                        <input type="hidden" name="id" value="{{ $perizinan->id }}">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                        <input type="email" id="email" name="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5"
                            value="{{ old('email', $perizinan->email) }}">
                    </div>
                    <div>
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                        <input type="text" id="nama" name="nama" disabled
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5"
                            value="{{ old('nama', $perizinan->nama) }}">
                    </div>
                    <div>
                        <label for="nik" class="block mb-2 text-sm font-medium text-gray-900">Nomor NIK</label>
                        <input type="text" id="nik" name="nik"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5"
                            value="{{ old('nik', $perizinan->nik) }}">
                        <label for="nik" class="block mt-2 text-sm text-gray-900">Nomor NIK harus 16 digit</label>
                    </div>
                    <div>
                        <label for="kk" class="block mb-2 text-sm font-medium text-gray-900">Nomor KK</label>
                        <input type="text" id="kk" name="kk"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5"
                            value="{{ old('kk', $perizinan->kk) }}">
                        <label for="nik" class="block mt-2 text-sm text-gray-900">Nomor KK harus 16 digit</label>
                    </div>
                    <div>
                        <label for="kelamin" class="block mb-2 text-sm font-medium text-gray-900">Jenis Kelamin</label>
                        <select id="kelamin" name="jenis_kelamin" disabled
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
                            <option value="{{ old('jenis_kelamin', $perizinan->jenis_kelamin) }}" selected>
                                {{ $perizinan->jenis_kelamin }}</option>
                            <option value="Perempuan">Perempuan</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                        </select>
                    </div>
                    <div>
                        <label for="alamat"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                        <textarea id="alamat" rows="4" name="alamat"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green focus:border-green">{{ $perizinan->alamat }}</textarea>
                    </div>
                    <div>
                        <label for="jenis-surat" class="block mb-2 text-sm font-medium text-gray-900">Jenis Surat</label>
                        <select id="jenis-surat" name="jenis_surat" disabled
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
                            <option value="{{ old('jenis_surat', $perizinan->jenis_surat) }}" selected>
                                {{ $perizinan->jenis_surat }}
                            </option>
                            <option value="SKU">SKU</option>
                            <option value="SKTM">SKTM</option>
                        </select>
                    </div>
                    <div>
                        <label for="keperluan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keperluan Surat</label>
                        <textarea id="keperluan" rows="4" name="keperluan_surat"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green focus:border-green">{{ $perizinan->keperluan_surat }}</textarea>
                    </div>
                    <div>
                        <label for="pesan"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pesan</label>
                        <textarea id="pesan" rows="4" name="pesan"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green focus:border-green">{{ $perizinan->pesan }}</textarea>
                    </div>
                    <div>
                        <label for="pengambilan" class="block mb-2 text-sm font-medium text-gray-900">Jenis
                            Pengambilan</label>
                        <select id="pengambilan" name="jenis_pengambilan" disabled
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
                            <option value="{{ old('jenis_pengambilan', $perizinan->jenis_pengambilan) }}" selected>
                                {{ $perizinan->jenis_pengambilan }}</option>
                            <option value="Offline">Offline</option>
                            <option value="Online">Online</option>
                        </select>
                    </div>
                    <div class="flex justify-end">
                        <a @click.prevent="next()" class="px-4 py-2 text-white bg-green-500 rounded">Selanjutnya</a>
                    </div>
                </div>

                <div x-show="activeStep === 2" x-transition class="bg-white flex flex-col gap-6 w-3/4 mx-auto">
                    <div>
                        <label for="berkas-ktp" class="block mb-2 text-sm font-medium text-gray-900">Berkas KTP</label>
                        <div class="relative flex items-center">
                            <input type="text" id="berkas-ktp" name="berkas_ktp" disabled
                                placeholder="{{ $perizinan->berkas_ktp }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
                            <a href="/download-ktp/{{ $perizinan->id }}"
                                class="absolute right-2 px-2 py-0.5 bg-green-500 text-white rounded-lg">Download</a>
                        </div>
                    </div>
                    <div>
                        <label for="berkas-kk" class="block mb-2 text-sm font-medium text-gray-900">Berkas KK</label>
                        <div class="relative flex items-center">
                            <input type="text" id="berkas-kk" name="berkas_kk" disabled
                                value{{ old('berkas_kk', $perizinan->berkas_kk) }}
                                placeholder="{{ $perizinan->berkas_kk }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
                            <a href="/download-kk/{{ $perizinan->id }}"
                                class="absolute right-2 px-2 py-0.5 bg-green-500 text-white rounded-lg">Download</a>
                        </div>
                    </div>
                    <div>
                        <label for="berkas-lain" class="block mb-2 text-sm font-medium text-gray-900">Berkas Pendukung
                            Lainnya</label>
                        <div class="relative flex items-center">
                            <input type="text" id="berkas-lain" name="berkas_lain" disabled
                                placeholder="{{ $perizinan->berkas_lain }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
                            <a href="/download-pendukung/{{ $perizinan->id }}"
                                class="absolute right-2 px-2 py-0.5 bg-green-500 text-white rounded-lg">Download</a>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <a @click.prevent="prev()"
                            class="px-4 py-2 text-green border border-green rounded">Sebelumnya</a>
                        <a @click.prevent="next()" class="px-4 py-2 text-white bg-green-500 rounded">Selanjutnya</a>
                    </div>
                </div>

                <div x-show="activeStep === 3" x-transition class="bg-white flex flex-col gap-6 w-3/4 mx-auto">
                    <div>
                        <label for="upload-surat" class="block mb-2 text-sm font-medium text-gray-900">Upload
                            Surat</label>
                        <input type="file" id="upload-surat" name="upload_surat"
                            placeholder="{{ $perizinan->upload_surat }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full">
                    </div>
                    <div>
                        <label for="status-surat" class="block mb-2 text-sm font-medium text-gray-900">Status
                            Surat</label>
                        <select id="status-surat" name="status_surat"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
                            <option value="{{ old('status_surat', $perizinan->status_surat) }}" selected>
                                {{ $perizinan->status_surat }}</option>
                            <option value="Proses">Proses</option>
                            <option value="Selesai">Selesai</option>
                        </select>
                    </div>
                    <div class="flex justify-between mt-6">
                        <a @click.prevent="prev()"
                            class="px-4 py-2 text-green border border-green rounded">Sebelumnya</a>
                        <button type="submit" class="px-4 py-2 text-white bg-green-500 rounded">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
