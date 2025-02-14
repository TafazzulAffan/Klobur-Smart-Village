@extends('layouts.layout-admin') 
@section('title', 'Tambah Data Wisata Desa')

@section('header')
<h2 class="font-bold text-lg">Tambah Data Wisata Desa</h2>
@endsection

@section('content')
<div class="p-8 shadow-xl">
    <form action="{{ route('wisata.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="flex flex-col gap-6 w-3/4 mx-auto">  
            <div>
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Judul</label>
                <input type="text" id="nama" name="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5" placeholder="Masukkan Judul" required>
            </div>
            <div>  
                <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                <textarea id="keterangan" rows="4" name="deskripsi" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green focus:border-green" placeholder="Masukkan Deskripsi"></textarea>
            </div>
            <div>
                <label for="foto-wisata" class="block mb-2 text-sm font-medium text-gray-900">Upload Foto</label>
                <img id="fotoPreview" src="{{ asset('img/gambar.png') }}" alt=""
                        class="w-96 mx-auto mb-5 rounded-lg">
                <input type="file" id="foto-wisata" name="foto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full"> {{--kalo type "text" tambah p-2.5--}}
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
const fotoInput = document.getElementById('foto-wisata');
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