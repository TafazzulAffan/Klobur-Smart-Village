@extends('layouts.layout-admin') 
@section('title', 'Tambah Data Wisata Desa')

@section('header')
<h2 class="font-bold text-lg">Edit Data Wisata Desa</h2>
@endsection

@section('content')
<div class="p-8 shadow-xl">
    <form action="{{ route('wisata.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col gap-6 w-3/4 mx-auto">  
            <input type="hidden" name="id" value="{{ $wisatas->id }}" hidden>
            <div>
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Judul</label>
                <input type="text" id="nama" value="{{ old('judul', $wisatas->judul) }}" 
                name="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5" placeholder="Masukkan Judul" required>
            </div>
            <div>  
                <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                <textarea id="keterangan" rows="4" name="deskripsi" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green focus:border-green" placeholder="Masukkan Deskripsi">{{$wisatas->deskripsi}}"</textarea>
            </div>
            <div>
                <label for="foto" class="block mb-2 text-sm font-medium text-gray-900">Upload Foto</label>
                <img id="fotoPreview" src="{{ asset('storage/wisata/' . $wisatas->foto) }}" alt=""
                        class="w-96 mx-auto mb-5 rounded-lg">
                <input type="file" id="foto" value="{{ old('foto', $wisatas->foto) }}"
                name="foto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full"> {{--kalo type "text" tambah p-2.5--}}
                <label for="slug" class="block mt-2 text-sm text-gray-900">Foto Saat Ini :
                    {{ $wisatas->foto }}</label>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
            </div>
        </div>
    </form>
</div>
@endsection

@section('script')
<script>
const fotoInput = document.getElementById('foto');
const fotoPreview = document.getElementById('fotoPreview');

fotoInput.addEventListener('change', function() {
    const file = fotoInput.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
            fotoPreview.src = e.target.result;
        }

        reader.readAsDataURL(file);
    } else {
        fotoPreview.src = "{{ asset('img/bg-2.png') }}";
    }
});
</script>
@endsection