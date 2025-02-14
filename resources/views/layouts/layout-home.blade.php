<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />">


    <!-- Title -->
    <title>@yield('title')</title>
    <link rel="icon" href={{ asset('img/lambang.jpeg') }} type="image/jpeg" />

    <!-- Title -->

    <!-- Other -->
    @yield('other')
    <!-- Other -->
</head>

<body class="bg-white min-h-screen">
    @include('layouts.components.navbar')
    <div class="h-full w-full">
        <!-- Navbar Start -->
        <!-- Navbar End -->

        <!-- Carousel Start -->
        <div class="mx-auto pt-7 md:pt-16">
            @yield('carousel')
        </div>
        <!-- Carousel End -->

        <!-- Header Start -->
        <!-- <div class="pt-16 pb-8">
            <div class="container px-4 md:px-8 mx-auto">
                @yield('header')
            </div>
        </div> -->
        <!-- Header End -->

        <!-- Content Start -->
        <div class="py-12">
            <div class="container px-4 md:px-8 mx-auto h-full">
                @yield('content')
            </div>
        </div>
        <!-- Content End -->

        <!-- Footer Start -->
        @include('layouts.components.footer')
        <!-- Footer End -->
    </div>

    @yield('script')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>

</html>
