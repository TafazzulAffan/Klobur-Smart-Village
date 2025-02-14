<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Title -->
    <title>@yield('title')</title>
    <!-- Title -->

    <!-- Other -->
    @yield('other')
    <!-- Other -->

</head>

@stack('css')

<body class="bg-white min-h-screen">
    <!-- Sidebar Start -->
    <nav class="w-full">
        @include('layouts.components.sidebar')
    </nav>
    <!-- Sidebar End -->

    <!-- Main Layout Start -->
    <div class="h-full p-4 md:p-6 sm:ml-64">
        <!-- Navbar Start -->
        <nav class="w-full h-full">
            <div class="container mx-auto">
                <div class="grid grid-cols-4 md:grid-cols-3">
                    <!-- Search Start -->
                    <form class="col-span-3 md:col-span-2">
                        <label for="default-search"
                            class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="search" id="default-search"
                                class="block w-full p-4 pl-10 text-sm text-black border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-300 focus:border-green-300"
                                placeholder="Cari..." required />
                            <button type="submit"
                                class="text-white absolute right-2.5 bottom-2.5 bg-green hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2">
                                Cari
                            </button>
                        </div>
                    </form>
                    <!-- Search End -->

                    <div class="flex justify-end gap-3">
                        <!-- Notification Start -->
                        <button id="dropdownNotificationButton" data-dropdown-toggle="dropdownNotification"
                            class="inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none"
                            type="button">
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 14 20">
                                <path
                                    d="M12.133 10.632v-1.8A5.406 5.406 0 0 0 7.979 3.57.946.946 0 0 0 8 3.464V1.1a1 1 0 0 0-2 0v2.364a.946.946 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C1.867 13.018 0 13.614 0 14.807 0 15.4 0 16 .538 16h12.924C14 16 14 15.4 14 14.807c0-1.193-1.867-1.789-1.867-4.175ZM3.823 17a3.453 3.453 0 0 0 6.354 0H3.823Z" />
                            </svg>
                            <div class="relative flex">
                                <div
                                    class="relative inline-flex w-3 h-3 bg-red-500 border-2 border-white rounded-full -top-2 right-3">
                                </div>
                            </div>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNotification"
                            class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow"
                            aria-labelledby="dropdownNotificationButton">
                            <div class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50">
                                Notifications
                            </div>
                            <div class="divide-y divide-gray-100">
                                @php
                                    $notif = App\Perizinan::latest()->paginate(5);
                                @endphp
                                @foreach ($notif as $k => $v)
                                    <a href="{{ route('perizinan.dilihat', $v->id) }}"
                                        class="flex px-4 py-3 @if ($v->dilihat) bg-gray-100 @else bg-gray-300 @endif">
                                        <div class="flex-shrink-0">
                                            <img class="rounded-full w-11 h-11 object-cover"
                                                src="{{ asset('img/avataruser.jpg') }}" alt="Jese image">
                                            <div
                                                class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-blue-600 border border-white rounded-full">
                                                <svg class="w-2 h-2 text-white" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 18 18">
                                                    <path
                                                        d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                                    <path
                                                        d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="w-full pl-3">
                                            <div class="text-gray-500 text-sm mb-1.5">New message {{ $v->nama }}
                                                meminta
                                                {{ $v->jenis_surat }} </div>
                                            <div class="text-xs text-blue-600 dark:text-blue-500">{{ $v->created_at }}
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>

                            <a href="/perizinan-online"
                                class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100">
                                <div class="inline-flex items-center ">
                                    <svg class="w-4 h-4 mr-2 text-gray-500" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                                        <path
                                            d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                    </svg>
                                    View all
                                </div>
                            </a>
                        </div>

                        <!-- Notification End -->

                        <!-- Profile Start -->

                        <button id="avatarButton" type="button" data-dropdown-toggle="userDropdown"
                            data-dropdown-placement="bottom-start"
                            class="flex items-center space-x-4 col-span-1 justify-self-end">
                            <img class="w-10 h-10 rounded-full" src="{{ asset('img/pictp.jpg') }}" alt="" />
                            <div class="hidden md:block font-medium text-left">
                                <div>R. Fan Alrachman</div>
                                <div class="text-sm text-gray-500">Admin</div>
                            </div>
                        </button>


                        <!-- Dropdown menu -->
                        <div id="userDropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                                <div>Perangkat Desa Jembul</div>
                                <div class="font-medium truncate">
                                    adminjembul@jembul.com
                                </div>
                            </div>
                            <form action="{{ route('keluar') }}" method="POST">
                                @csrf
                                <div class="py-1">
                                    <button type="submit"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign
                                        out</button>
                                </div>
                            </form>
                        </div>
                        <!-- Profile End -->
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- Header Start -->
        <div class="container mx-auto py-8">
            @yield('header')
        </div>
        <!-- Header End -->

        <!-- Content Start -->
        <div class="container mx-auto py-8">
            @yield('content')
        </div>
        <!-- Content End -->
    </div>
    <!-- Main Layout End -->

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
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
