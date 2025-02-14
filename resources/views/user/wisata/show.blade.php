@extends('layouts.layout-user') 
@section('title', 'Website Resmi Pemerintah Desa Klobur - Destinasi Wisata Kolam Renang Atas Awan')

@section('header')
<div class="">
    <a href="/wisata-desa"><p class="text-sm md:text-base"><span class="text-[#198754]">Wisata Desa</span></a>  > {{ $wisata->judul }}</p>
    <h3 class="font-bold text-xl md:text-3xl mt-2">
        {{ $wisata->judul }}
    </h3>
</div>
@endsection

@section('content')
<!--Informasi Destinasi Start-->
<div class="text-base md:text-lg text-justify flex flex-col gap-10">
    <p style="font-weight: 600;">
        {{ $wisata->deskripsi }}    
    </p>
    <p style="font-weight: 600;">
        So, jangan lupa sempatkan diri menghabiskan libur barang keluarga di 
        {{ $wisata->judul }} 
        di setiap akhir pekan atau libur kerja dan sekolah. 
    </p>
</div>

<!--Informasi Destinasi END--> 

<!--Image Start-->
<div class="my-jarak flex flex-col gap-8 md:gap-0 md:flex-row justify-around items-center">
    <img class="w-72 md:w-[25rem]" 
    src="{{asset('storage/wisata/' .  $wisata->foto) }}"
    >
</div>
<!--Image End-->

<!--Share This START-->
<div class="flex justify-start gap-3">
    <div class="container">
        <h1 class="font-semibold text-lg text-center md:text-xl mb-2 md:mb-4">Share to Social Media:</h1>
        {!! $shareComponent !!}
    </div>    
</div>
@endsection


@section('other')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        div#social-links {
            margin: 0 auto;
            max-width: 100%;
            display: flex;
            justify-content: center;
        }

        div#social-links ul li {
            display: inline-block;
            padding: 0 0.7rem;
        }

        div#social-links ul li a {
            /* padding: 20px; */
            /* border: 1px solid #ccc; */
            margin: 1px;
            font-size: 30px;
            color: #FD7E14;
            /* background-color: #ccc; */
        }
    </style>
@endsection

@section('script')
<!-- 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/share.js') }}"></script> -->
@endsection