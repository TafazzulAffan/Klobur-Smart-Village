@extends('layouts.layout-admin')
@section('title', 'Edit Data Perangkat Desa')

@section('other')
    <style>
        input[type="file"] {
            color: transparent;
            cursor: pointer;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
        }
    </style>
@endsection

@section('header')
    <h2 class="font-bold text-lg">Edit Data Perangkat Desa</h2>
@endsection

@section('content')
    <div class="p-8 shadow-xl">
        <form method="POST" action="{{ route('perangkat.update') }}" enctype="multipart/form-data">
            @csrf
            <div class="relative mb-6 w-fit">
                <input type="hidden" name="id" value="{{ $perangkat->id }}" hidden>
                <img id="imagePreview" class="w-28 h-28 object-cover rounded-full"
                    src="{{ asset('storage/perangkatDesa/' . $perangkat->foto) }}">
                <label for="foto"
                    class="absolute bottom-0 -right-5 cursor-pointer flex w-fit gap-1 bg-green-500 text-white text-sm px-2.5 py-1.5 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 16 16"
                        fill="none">
                        <path
                            d="M12.6875 3.64844H11.0006L10.168 2.39863C10.1358 2.35043 10.0922 2.31093 10.0411 2.28363C9.99001 2.25634 9.93294 2.2421 9.875 2.24219H6.125C6.06706 2.2421 6.00999 2.25634 5.95888 2.28363C5.90776 2.31093 5.86419 2.35043 5.83203 2.39863L4.99883 3.64844H3.3125C2.97062 3.64844 2.64274 3.78425 2.401 4.026C2.15925 4.26774 2.02344 4.59562 2.02344 4.9375V11.5C2.02344 11.8419 2.15925 12.1698 2.401 12.4115C2.64274 12.6533 2.97062 12.7891 3.3125 12.7891H12.6875C13.0294 12.7891 13.3573 12.6533 13.599 12.4115C13.8408 12.1698 13.9766 11.8419 13.9766 11.5V4.9375C13.9766 4.59562 13.8408 4.26774 13.599 4.026C13.3573 3.78425 13.0294 3.64844 12.6875 3.64844ZM13.2734 11.5C13.2734 11.6554 13.2117 11.8044 13.1018 11.9143C12.9919 12.0242 12.8429 12.0859 12.6875 12.0859H3.3125C3.1571 12.0859 3.00806 12.0242 2.89818 11.9143C2.7883 11.8044 2.72656 11.6554 2.72656 11.5V4.9375C2.72656 4.7821 2.7883 4.63306 2.89818 4.52318C3.00806 4.4133 3.1571 4.35156 3.3125 4.35156H5.1875C5.24544 4.35165 5.30251 4.33741 5.35362 4.31012C5.40474 4.28282 5.44831 4.24332 5.48047 4.19512L6.31309 2.94531H9.68633L10.5195 4.19512C10.5517 4.24332 10.5953 4.28282 10.6464 4.31012C10.6975 4.33741 10.7546 4.35165 10.8125 4.35156H12.6875C12.8429 4.35156 12.9919 4.4133 13.1018 4.52318C13.2117 4.63306 13.2734 4.7821 13.2734 4.9375V11.5ZM8 5.52344C7.51327 5.52344 7.03748 5.66777 6.63278 5.93818C6.22808 6.20859 5.91265 6.59294 5.72639 7.04262C5.54013 7.49229 5.49139 7.9871 5.58635 8.46448C5.6813 8.94186 5.91569 9.38035 6.25985 9.72452C6.60402 10.0687 7.04252 10.3031 7.5199 10.398C7.99727 10.493 8.49208 10.4442 8.94176 10.258C9.39144 10.0717 9.77578 9.7563 10.0462 9.3516C10.3166 8.9469 10.4609 8.4711 10.4609 7.98438C10.4609 7.33169 10.2017 6.70575 9.74015 6.24423C9.27863 5.78271 8.65268 5.52344 8 5.52344ZM8 9.74219C7.65234 9.74219 7.31248 9.63909 7.02341 9.44594C6.73434 9.25279 6.50904 8.97826 6.37599 8.65706C6.24295 8.33586 6.20814 7.98243 6.27596 7.64144C6.34379 7.30046 6.5112 6.98725 6.75704 6.74141C7.00287 6.49558 7.31609 6.32816 7.65707 6.26034C7.99805 6.19251 8.35149 6.22732 8.67269 6.36037C8.99388 6.49341 9.26842 6.71872 9.46157 7.00779C9.65472 7.29686 9.75781 7.63671 9.75781 7.98438C9.75781 8.45058 9.57262 8.89768 9.24296 9.22734C8.91331 9.55699 8.4662 9.74219 8 9.74219Z"
                            fill="#F8F9FA" />
                    </svg>
                    Edit
                    <input id="foto" type="file" name="foto" class="appearance-none" value="foto"
                        accept=".jpg, .jpeg, .png, .gif, .pdf" />
                </label>
            </div>
            <label for="slug" class="block mb-6 text-sm text-gray-900">Foto Saat Ini :
                {{$perangkat->foto}}
            </label>
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                    <input type="text" id="nama" name="nama" value="{{ old('nama', $perangkat->nama) }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5"
                        placeholder="Masukkan Nama" required>
                </div>
                <div>
                    <label for="status" class="block mb-2 text-sm font-medium text-gray-900">Status</label>
                    <select id="status" name="status"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
                        <option value="{{ old('status', $perangkat->status) }}" selected>
                            {{ old('status', $perangkat->status) }}</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Non Aktif">Non Aktif</option>
                    </select>
                </div>
                <div>
                    <label for="kelamin" class="block mb-2 text-sm font-medium text-gray-900">Jenis Kelamin</label>
                    <select id="kelamin" name="jenis_kelamin"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
                        <option value="{{ old('jenis_kelamin', $perangkat->jenis_kelamin) }}">
                            {{ $perangkat->jenis_kelamin }}</option>
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div>
                    <label for="status" class="block mb-2 text-sm font-medium text-gray-900">Jabatan</label>
                    <select id="status" name="jabatan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
                        <option value="{{ old('jabatan', $perangkat->jabatan) }}" selected>{{ $perangkat->jabatan }}
                        </option>
                        <option value="Kepala Desa">Kepala Desa</option>
                        <option value="Sekretaris Desa">Sekretaris Desa</option>
                        <option value="Kepala Urusan Keuangan">Kepala Urusan Keuangan</option>
                        <option value="Kepala Urusan Umum">Kepala Urusan Umum</option>
                        <option value="Kepala Seksi Pemerintahan">Kepala Seksi Pemerintahan</option>
                        <option value="Kepala Seksi Pembangunan">Kepala Seksi Pembangunan</option>
                        <option value="Kepala Seksi Pelayanan">Kepala Seksi Pelayanan</option>
                        <option value="Kepala Dusun">Kepala Dusun</option>
                    </select>
                </div>
            </div>
            <div class="flex justify-end">
                <button type="submit"
                    class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
            </div>
        </form>
    </div>
@endsection

@section('script')
<script>
    const fotoInput = document.getElementById('foto');
    const imagePreview = document.getElementById('imagePreview');

    fotoInput.addEventListener('change', function () {
        const file = fotoInput.files[0];

        if (file) {
            const reader = new FileReader();

            reader.onload = function (e) {
                imagePreview.src = e.target.result;
            }

            reader.readAsDataURL(file);
        } else {
            imagePreview.src = "{{ asset('img/bg-2.png') }}";
        }
    });
</script>
@endsection