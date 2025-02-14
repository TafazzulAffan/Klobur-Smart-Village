@extends('layouts.layout-admin')

@section('title', 'Panduan')

@section('header')
<p class="text-sm md:text-base mb-8">
    <a href="/"><span class="text-green">Panduan</span></a>
</p>
<h2 class="text-center font-bold text-2xl">Cara Penggunaan Website</h2>
@endsection

@section('content')
<video class="w-3/4 h-full mx-auto rounded-xl" controls>
    <source src="{{ asset('Video.mp4') }}" type="video/mp4">
    Browser tidak mendukung jenis video
</video>
<center>
<h2 class="text-center font-bold text-2xl mt-5 mb-5">File Panduan Untuk Admin / Perangkat Desa</h2>
    <a href="{{ asset('adminn.pdf') }}" style="background-color: green; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-size: 16px;" class="mb-5" target="_blank">Download File</a>
</center>
<center>
<h2 class="text-center font-bold text-2xl mt-5 mb-5">File Panduan Untuk User / Pengguna</h2>
    <a href="{{ asset('userr.pdf') }}" style="background-color: green; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; font-size: 16px;" class="mb-5" target="_blank">Download File</a>
</center>

@endsection
