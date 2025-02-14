@extends('layouts.layout-admin')
@section('title', 'Edit Data Penduduk')

@section('other')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
@endsection

@section('header')
    <h2 class="font-bold text-lg">Edit Data Penduduk</h2>
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
    }" x-cloak>
        <ol class="flex items-center w-4/5 mx-auto text-sm font-medium text-center text-gray-900 sm:text-base mb-jarak">
            <li class="flex md:w-full items-center sm:after:content-[''] after:w-full after:h-1 after:border-b-2 after:rounded-full after:border-gray-900 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10"
                :class="activeStep >= 2 ? 'after:border-green' : 'border-transparent'">
                <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-900 rounded"
                    :class="activeStep >= 1 ? 'text-green' : 'text-gray-900'">
                    <span class="mr-2 w-8 h-8 box-content flex items-center justify-center"
                        :class="activeStep >= 1 ? 'bg-green-100' : 'bg-gray-300'">1</span>
                    Identitas
                </span>
            </li>
            <li class="flex md:w-full items-center after:content-[''] after:w-full after:h-1 after:border-b-2 after:rounded-full after:border-gray-900 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10"
                :class="activeStep === 3 ? 'after:border-green' : 'border-transparent'">
                <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-gray-900"
                    :class="activeStep >= 2 ? 'text-green' : 'text-gray-900'">
                    <span class="mr-2 w-8 h-8 box-content flex items-center justify-center rounded"
                        :class="activeStep >= 2 ? 'bg-green-100' : 'bg-gray-300'">2</span>
                    Data <span class="hidden sm:inline-flex sm:ml-2">Pribadi</span>
                </span>
            </li>
            <li class="flex items-center" :class="activeStep === 3 ? 'text-green' : 'text-gray-900'">
                <span class="mr-2 w-8 h-8 box-content flex items-center justify-center rounded"
                    :class="activeStep === 3 ? 'bg-green-100' : 'bg-gray-300'">3</span>
                Keluarga
            </li>
        </ol>
        <form action="{{ route('update.penduduk') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="p-8 shadow-xl">
                <div x-show="activeStep === 1" x-transition class="bg-white flex flex-col gap-6 w-3/4 mx-auto">
                    <input type="hidden" name="id" value="{{ $penduduk->id }}" hidden>
                    <div>
                        <label for="nik" class="block mb-2 text-sm font-medium text-gray-900">Nomor NIK</label>
                        <input type="text" id="nik" name="nik" value="{{ old('nik', $penduduk->nik) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5 "
                            placeholder="Masukkan Nomor NIK">
                        <label for="nik" class="block mt-2 text-sm text-gray-900">Nomor NIK harus 16 digit</label>
                    </div>
                    <div>
                        <label for="kk" class="block mb-2 text-sm font-medium text-gray-900">Nomor KK</label>
                        <input type="text" id="kk" name="kk" value="{{ old('kk', $penduduk->kk) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5"
                            placeholder="Masukkan Nomor KK">
                        <label for="nik" class="block mt-2 text-sm text-gray-900">Nomor KK harus 16 digit</label>
                    </div>
                    <div>
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                        <input type="text" id="nama" name="nama" value="{{ old('nama', $penduduk->nama) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5"
                            placeholder="Masukkan Nama">
                    </div>
                    <div>
                        <label for="jenis_kelamin" class="block mb-2 text-sm font-medium text-gray-900">Jenis
                            Kelamin</label>
                        <select id="jenis_kelamin" name="jenis_kelamin"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
                            <option value="{{ old('jenis_kelamin', $penduduk->jenis_kelamin) }}" selected>
                                {{ $penduduk->jenis_kelamin }}</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div>
                        <label for="tempat_lahir" class="block mb-2 text-sm font-medium text-gray-900">Tempat
                            Lahir</label>
                        <input type="text" id="tempat_lahir" name="tempat_lahir"
                            value="{{ old('tempat_lahir', $penduduk->tempat_lahir) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5"
                            placeholder="Masukkan Tempat Lahir">
                    </div>
                    <div>
                        <label for="tanggal_lahir" class="block mb-2 text-sm font-medium text-gray-900">Tanggal
                            Lahir</label>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                            value="{{ old('tanggal_lahir', $penduduk->tanggal_lahir) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5"
                            placeholder="Masukkan Tanggal Lahir">
                    </div>
                    <div class="flex justify-end">
                        <a @click="next()" class="px-4 py-2 text-white bg-green-500 rounded cursor-pointer">Selanjutnya</a>
                    </div>
                </div>

                <div x-show="activeStep === 2" x-transition class="bg-white flex flex-col gap-6 w-3/4 mx-auto">
                    <div>
                        <label for="darah_id" class="block mb-2 text-sm font-medium text-gray-900">Golongan
                            Darah</label>
                        <select id="darah_id" name="darah_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
                            <option selected value="{{ old('darah', $penduduk->darah_id) }}">
                                {{ $penduduk->darah->golongan }}</option>
                            @foreach ($darahs as $darah)
                                <option value="{{ $darah->id }}">{{ $darah->golongan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="agama_id" class="block mb-2 text-sm font-medium text-gray-900">
                            Agama</label>

                        <select id="agama_id" name="agama_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
                            <option value="{{ old('agama', $penduduk->agama_id) }}" selected>{{ $penduduk->agama->nama }}
                            </option>
                            @foreach ($agamas as $agama)
                                <option value="{{ $agama->id }}">{{ $agama->nama }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div>
                        <label for="pekerjaan_id" class="block mb-2 text-sm font-medium text-gray-900">Pekerjaan</label>
                        <select id="pekerjaan_id" name="pekerjaan_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
                            <option value="{{ old('pekerjaan', $penduduk->pekerjaan_id) }}" selected>
                                {{ $penduduk->pekerjaan->nama }}</option>
                            @foreach ($pekerjaans as $pekerjaan)
                                <option value="{{ $pekerjaan->id }}">{{ $pekerjaan->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="pendidikan_id" class="block mb-2 text-sm font-medium text-gray-900">Pendidikan</label>
                        <select id="pendidikan_id" name="pendidikan_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
                            <option value="{{ old('pendidikan', $penduduk->pendidikan_id) }}" selected>
                                {{ $penduduk->pendidikan->nama }}</option>
                            @foreach ($pendidikans as $pendidikan)
                                <option value="{{ $pendidikan->id }}">{{ $pendidikan->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="status_perkawinan_id" class="block mb-2 text-sm font-medium text-gray-900">Status
                            Kawin</label>
                        <select id="status_perkawinan_id" name="status_perkawinan_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
                            <option value="{{ old('status_perkawinan_id', $penduduk->status_perkawinan_id) }}" selected>
                                {{ $penduduk->statusPerkawinan->nama }}</option>
                            @foreach ($status_perkawinans as $status_perkawinan)
                                <option value="{{ $status_perkawinan->id }}">{{ $status_perkawinan->nama }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="alamat"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                        <textarea id="alamat" rows="4" name="alamat"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green focus:border-green"
                            placeholder="Masukkan Alamat">{{ $penduduk->alamat }}</textarea>
                    </div>
                    <div class="grid gap-6 md:grid-cols-2">
                        <div>
                            <label for="rtrw" class="block mb-2 text-sm font-medium text-gray-900">RT/RW</label>
                            <select id="rtrw" name="rtrw"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5"
                                required>
                                <option value="{{ old('rtrw', $penduduk->rtrw) }}" selected>{{ $penduduk->rtrw }}</option>
                                <option value="RT 001/RW 001">RT 001/RW 001</option>
                                <option value="RT 002/RW 001">RT 002/RW 001</option>
                                <option value="RT 003/RW 002">RT 003/RW 002</option>
                                <option value="RT 004/RW 002">RT 004/RW 002</option>
                            </select>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <a @click="prev()"
                            class="px-4 py-2 text-green border border-green rounded cursor-pointer">Sebelumnya</a>
                        <a @click="next()" class="px-4 py-2 text-white bg-green-500 rounded cursor-pointer">Selanjutnya</a>
                    </div>
                </div>

                <div x-show="activeStep === 3" x-transition class="bg-white flex flex-col gap-6 w-3/4 mx-auto">
                    <div>
                        <label for="status_hubungan_dalam_keluarga_id"
                            class="block mb-2 text-sm font-medium text-gray-900">Status
                            hubungan dalam keluarga
                            Dalam
                            Keluarga</label>
                        <select id="status_hubungan_dalam_keluarga_id" name="status_hubungan_dalam_keluarga_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
                            <option
                                value="{{ old('status_hubungan_dalam_keluarga_id', $penduduk->status_hubungan_dalam_keluarga_id) }}"
                                selected>
                                {{ $penduduk->statusHubunganDalamKeluarga->nama }}</option>
                            @foreach ($status_hubungan_dalam_keluargas as $shdk)
                                <option value="{{ $shdk->id }}">{{ $shdk->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="kewarganegaraan"
                            class="block mb-2 text-sm font-medium text-gray-900">Kewarganegaraan</label>
                        <select id="kewarganegaraan" name="kewarganegaraan"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
                            <option value="1" {{ old('kewarganegaraan') == 1 ? 'selected="true"' : '' }}>WNI</option>
                            <option value="2" {{ old('kewarganegaraan') == 2 ? 'selected="true"' : '' }}>WNA</option>
                            <option value="3" {{ old('kewarganegaraan') == 3 ? 'selected="true"' : '' }}>Dua
                                Kewarganegaraan</option>
                        </select>
                    </div>
                    <div>
                        <label for="nama_ayah" class="block mb-2 text-sm font-medium text-gray-900">Nama Ayah</label>
                        <input type="text" id="nik_ayah" name="nama_ayah"
                            value="{{ old('nama_ayah', $penduduk->nama_ayah) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5"
                            placeholder="Masukkan Nama Ayah" required>
                    </div>
                    <div>
                        <label for="nik_ayah" class="block mb-2 text-sm font-medium text-gray-900">NIK Ayah</label>
                        <input type="text" id="nik_ayah" name="nik_ayah"
                            value="{{ old('nik_ayah', $penduduk->nik_ayah) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5"
                            placeholder="Masukkan NIK Ayah">
                    </div>
                    <div>
                        <label for="nama_ibu" class="block mb-2 text-sm font-medium text-gray-900">Nama Ibu</label>
                        <input type="text" id="nik_ibu" name="nama_ibu"
                            value="{{ old('nama_ibu', $penduduk->nama_ibu) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5"
                            placeholder="Masukkan Nama Ibu" required>
                    </div>
                    <div>
                        <label for="nik_ibu" class="block mb-2 text-sm font-medium text-gray-900">NIK Ibu</label>
                        <input type="text" id="nik_ibu" name="nik_ibu"
                            value="{{ old('nik_ibu', $penduduk->nik_ibu) }}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5"
                            placeholder="Masukkan NIK Ibu">
                    </div>
                    <div class="flex justify-between mt-6">
                        <a @click="prev()"
                            class="px-4 py-2 text-green border border-green rounded cursor-pointer">Sebelumnya</a>
                        <button type="submit" class="px-4 py-2 text-white bg-green-500 rounded cursor-pointer"
                            id="submit">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
