@extends('layouts.layout-home')
@section('title', 'Website Resmi Pemerintah Desa Klobur - Berita')

@section('header')
    <div class="flex flex-col gap-2">
        <p class="text-sm md:text-base">
            <a href="/"><span class="text-[#198754]">Beranda</span></a> > {{ $beritas->judul }}
        </p>
        <h3 class="font-bold text-xl md:text-3xl mt-2">{{ $beritas->judul }}</h3>
        <p class="text-red-500 text-xs bg-abu-400 rounded-full w-fit py-0.5 px-2 md:px-3 mb-1">{{ $beritas->kategori }}</p>
        <div class="flex text-xs text-abu-500 items-center">
            <p>{{ $beritas->created_at }}</p>
            {{-- <div class="flex items-center gap-1 md:gap-3 ml-8">
                <div class="flex gap-1">
                    <p>11</p>
                    <img src="{{ asset('icon/comment-icon.svg') }}" alt="" />
                </div>
                <div class="flex gap-1">
                    <p>18</p>
                    <img src="{{ asset('icon/star-icon.svg') }}" alt="" />
                </div>
            </div> --}}
        </div>
    </div>
@endsection

@section('other')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
        div#social-links {
            margin: 0 auto;
            max-width: 500px;
        }

        div#social-links ul li {
            display: inline-block;
        }

        div#social-links ul li a {
            padding: 20px;
            /* border: 1px solid #ccc; */
            margin: 1px;
            font-size: 30px;
            color: #002fff;
            /* background-color: #ccc; */
        }
    </style>
@endsection

@section('content')
    <!--Berita START-->
    <img class="h-full md:h-72 w-4/5 mb-10 md:w-96 mx-auto" src="{{ asset('storage/berita/' . $beritas->gambar) }}">
    <div class="text-base md:text-lg text-justify mx-4 md:mx-10 flex flex-col gap-5">
        <p class="indent-8">
            {!! $beritas->konten !!}
        </p>
    </div>
    <!--Berita END-->

    <!--Share This START-->
    <div class="flex justify-start gap-3">
        <div class="container text-center">
            <h1 class="font-semibold text-lg text-center md:text-xl mb-2 md:mb-4">Share to Social Media:</h1>
            {!! $shareComponent !!}
        </div>
        {{-- <a href="https://id-id.facebook.com/">
            <img class="w-9 md:w-12" src="{{ asset('icon/fb.svg') }}" alt="">
        </a>
        <a href="https://www.google.com/intl/id/account/about/">
            <img class="w-9 md:w-12" src="{{ asset('icon/google-plus.svg') }}" alt="">
        </a>
        <a href="https://twitter.com/?lang=id">
            <img class="w-9 md:w-12" src="{{ asset('icon/twt.svg') }}" alt="">
        </a>
        <a href="https://web.telegram.org/">
            <img class="w-9 md:w-12" src="{{ asset('icon/telegram.svg') }}" alt="">
        </a>
        <a href="https://www.whatsapp.com/?lang=id_ID">
            <img class="w-9 md:w-12" src="{{ asset('icon/whatsapp.svg') }}" alt="">
        </a> --}}
    </div>
    <!--Share This END-->

@endsection

@section('script')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/share.js') }}"></script>
@endsection
