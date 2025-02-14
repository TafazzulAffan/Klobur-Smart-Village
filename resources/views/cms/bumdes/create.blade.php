@extends('layouts.layout-admin') 
@section('title', 'Tambah Data BUMDes')

@section('header')
<h2 class="font-bold text-lg">Tambah Data BUMDes</h2>
@endsection

@section('content')
<div class="p-8 shadow-xl">
    <form action="{{ route('bumdes.store') }}" method="POST">
        @csrf
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                <label for="judul-bumdes" class="block mb-2 text-sm font-medium text-gray-900">Judul</label>
                <input type="text" id="judul-bumdes" name="judul-bumdes" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5" placeholder="Masukkan Judul BUMDes" required>
            </div>
            <div></div>
            <div>
                <label for="contact-bumdes" class="block mb-2 text-sm font-medium text-gray-900">Contact Person</label>
                <input type="text" id="contact-bumdes" name="contact-bumdes" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green focus:border-green block w-full p-2.5" placeholder="Masukkan Contact Person" required>
            </div>
        </div>
        <div>
            <div>
                <div>  
                    <label for="deskripsi-bumdes" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi</label>
                    <textarea id="deskripsi-bumdes" name="deskripsi-bumdes" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green focus:border-green" placeholder="Masukkan Deskripsi BUMDes Beserta Jobdesc"></textarea>
                </div>
            </div>
        </div>
        <div class="flex justify-start">
            <button type="submit" class="text-white bg-green mt-3 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center" style="background-color: green;">Simpan</button>
        </div>
    </form>
</div>
@endsection