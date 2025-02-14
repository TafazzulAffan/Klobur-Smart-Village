@extends('layouts.layout-admin')
@section('title', 'Edit Berita Desa')

@section('other')
    <script src="https://cdn.tiny.cloud/1/p2dc08j629ts2y9bbvyzizd6ds2ljjkkewgj8s34cojjbagt/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
@endsection

@section('header')
    <h2 class="font-bold text-lg">Edit Berita Desa</h2>
@endsection

@section('content')
    <div class="p-8 shadow-xl">
        <form method="POST" action="{{ route('berita.update') }}" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col gap-6 w-3/4 mx-auto">
                <input type="hidden" name="id" value="{{ $berita->id }}" hidden>
                <div>
                    <label for="thumbnail" class="block mb-2 text-sm font-medium text-gray-900">Thumbnail Berita</label>
                    <img id="imagePreview" alt="" class="w-96 mx-auto mb-5 rounded-lg"
                        src="{{ asset('storage/public/berita/' . $berita->gambar) }}">
                    <input type="file" id="thumbnail" name="gambar" value="{{ old('gambar', $berita->gambar) }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full">
                    <label for="slug" class="block mt-2 text-sm text-gray-900">Thumbnail Saat Ini :
                        {{ $berita->gambar }}</label>
                </div>
                <div>
                    <label for="judul" class="block mb-2 text-sm font-medium text-gray-900">Judul Berita</label>
                    <input type="text" id="judul" name="judul" value="{{ old('judul', $berita->judul) }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5"
                        placeholder="Masukkan Judul Berita" required>
                </div>
                <div>
                    <label for="status-berita" class="block mb-2 text-sm font-medium text-gray-900">Status Berita</label>
                    <select id="status-berita" name="status"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
                        <option value="{{ old('status', $berita->status) }}" selected>{{ $berita->status }}</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Non-Aktif">Non Aktif</option>
                    </select>
                </div>
                <div>
                    <label for="kategori" class="block mb-2 text-sm font-medium text-gray-900">Jenis Kategori</label>
                    <select id="kategori" name="kategori"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5">
                        <option selected value="{{ old('kategori', $berita->kategori) }}">{{ $berita->kategori }}</option>
                        <option value="Pendidikan">Pendidikan</option>
                        <option value="Kesehatan">Kesehatan</option>
                        <option value="Ekonomi">Ekonomi</option>
                        <option value="Hiburan">Hiburan</option>
                    </select>
                </div>
                <div>
                    <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi
                        Berita Singkat</label>
                    <textarea id="slug" name="slug" rows="3"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green focus:border-green"
                        placeholder="Masukkan Isi Singkat Berita">{{ $berita->slug }}</textarea>
                    <label for="slug" class="block mt-2 text-sm text-gray-900">Isi Maksimal 15 kata</label>
                </div>
                <div>
                    <label for="konten" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konten
                        Berita</label>
                    <textarea id="konten" name="konten" rows="4" value="{{ old('konten', $berita->konten) }}"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green focus:border-green"
                        placeholder="Masukkan Konten Berita">{{ $berita->konten }}</textarea>
                </div>
                <div class="flex justify-end">
                    <button type="submit" name="submit"
                        class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('script')
    <script>
        tinymce.init({
            selector: '#konten',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | addcomment showcomments | spellcheckdialog | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ]
        });

        const fotoInput = document.getElementById('thumbnail');
        const imagePreview = document.getElementById('imagePreview');

        fotoInput.addEventListener('change', function() {
            const file = fotoInput.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                }

                reader.readAsDataURL(file);
            } else {
                imagePreview.src = "{{ asset('img/bg-2.png') }}";
            }
        });
    </script>
@endsection
