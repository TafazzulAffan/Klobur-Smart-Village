<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />

    <!-- Title -->
    <title>@yield('title')</title>
    <!-- Title -->

    <!-- Other -->
    @yield('other')
    <!-- Other -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

<body class="bg-white min-h-screen">
    <div class="h-full w-full">
        <!-- Navbar Start -->
        @include('layouts.components.navbar')
        <!-- Navbar End -->

        <!-- Header Start -->
        <div class="pt-24 md:pt-28">
            <div class="container px-4 lg:px-8 mx-auto">
                @yield('header')
            </div>
        </div>
        <!-- Header End -->

        <!-- Content Start -->
        <div class="py-12">
            <div
                class="container px-4 md:px-8 mx-auto grid grid-cols-1 md:grid-cols-4 grid-rows-2 md:grid-rows-1 gap-24 md:gap-24 h-full pb-jarak">
                <div class="md:col-span-3 row-span-full">
                    @yield('content')
                </div>
                <div class="md:col-span-1">
                    @include('layouts.components.sidenews')
                </div>
            </div>
        </div>
        <!-- Content End -->

        <!-- Footer Start -->
        @include('layouts.components.footer')
        <!-- Footer End -->
    </div>

    @yield('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" crossorigin="anonymous">
    </script>
    @if (Session::has('post_deleted'))
        <script>
            swal("Great Job!", "{!! Session::get('post_deleted') !!}", "success", {
                button: "OK",
            })
        </script>
    @endif

    @if (Session::has('success'))
        <script>
            swal("Great Job!", "{!! Session::get('success') !!}", "success", {
                button: "OK",
            })
        </script>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</body>

</html>
