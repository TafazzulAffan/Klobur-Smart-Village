<footer class="bg-[#198754]">
    <div class="mx-auto w-full max-w-screen-xl px-4 md:px-8 py-12 lg:py-20">
        <div class="md:flex md:justify-between">
            <div class="mb-6 md:mb-0">
                <a href="/" class="flex items-center">
                    <img
                        src="{{asset('img/lambang.jpeg')}}"
                        class="h-12 mr-3"
                        alt="Klobur Logo"
                    />
                    <span
                        class="self-center text-xl font-semibold whitespace-nowrap text-white"
                        >Klobur Smart Village</span
                    >
                </a>
                <h2 class="text-lg font-semibold text-white mt-10 mb-6">
                    Ikuti Kami
                </h2>
                <div class="flex gap-3">
                    <a href="mailto:desaKlobur76@gmail.com" target="_blank">
                        <img src="{{ asset('icon/gmail.svg') }}" alt="" />
                    </a>
                    <a href="https://twitter.com/DesaKlobur" target="_blank">
                        <img src="{{ asset('icon/twit.svg') }}" alt="" />
                    </a>
                    <a href="https://www.instagram.com/desaKlobur76/" target="_blank">
                        <img src="{{ asset('icon/ig.svg') }}" alt="" />
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=61551445071424" target="_blank">
                        <img src="{{ asset('icon/fb.svg') }}" alt="" />
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-5">
                <div class="order-1 xl:ml-5">
                    <h2 class="mb-6 text-lg font-semibold text-white">
                        Profil Desa
                    </h2>
                    <ul class="text-white font-normal">
                        <li class="mb-4">
                            <a href="/perangkat-desa" class="hover:underline"
                                >Perangkat</a
                            >
                        </li>
                        <li>
                            <a href="/sejarah-desa" class="hover:underline"
                                >Sejarah</a
                            >
                        </li>
                    </ul>
                </div>
                <div class="order-4 md:order-2">
                    <h2 class="mb-6 text-lg font-semibold text-white">
                        Data Desa
                    </h2>
                    <ul class="text-white font-normal">
                        <li class="mb-4">
                            <a
                                href="/jenis-kelamin"
                                class="hover:underline"
                                >Jenis Kelamin</a
                            >
                        </li>
                        <li class="mb-4">
                            <a
                                href="/agama"
                                class="hover:underline"
                                >Agama</a
                            >
                        </li>
                        <li class="mb-4">
                            <a
                                href="/pekerjaan"
                                class="hover:underline"
                                >Pekerjaan</a
                            >
                        </li>
                        <li>
                            <a
                                href="/pendidikan"
                                class="hover:underline"
                                >Pendidikan Dalam KK</a
                            >
                        </li>
                    </ul>
                </div>
                <div class="order-2 md:order-3">
                    <h2 class="mb-6 text-lg font-semibold text-white">
                        Layanan
                    </h2>
                    <ul class="text-white font-normal">
                        <li class="mb-4">
                            <a href="/perizinan-online" class="hover:underline"
                                >Pelayanan Online</a
                            >
                        </li>
                        <li class="mb-4">
                            <a href="/status-perizinan" class="hover:underline"
                                >Status Pelayanan Online</a
                            >
                        </li>
                        <li>
                            <a href="/bumdes" class="hover:underline">BUMDes</a>
                        </li>
                    </ul>
                </div>
                <div class="order-3 md:order-4">
                    <h2 class="mb-6 text-lg font-semibold text-white">
                        Regulasi
                    </h2>
                    <ul class="text-white font-normal">
                        <li class="mb-4">
                            <a href="/produk-hukum" class="hover:underline"
                                >Produk Hukum</a
                            >
                        </li>
                        <li>
                            <a href="/informasi-publik" class="hover:underline"
                                >Informasi Publik</a
                            >
                        </li>
                    </ul>
                </div>
                <div class="order-3 md:order-4">
                    <a href="/wisata-desa">
                        <h2 class="mb-6 text-lg font-semibold text-white">
                            Wisata Desa
                        </h2>
                    </a>
                {{--    <ul class="text-white font-normal">
                        <li class="mb-4">
                            <a href="/destinasi-bukit-pelangi" class="hover:underline"
                                >Bukit Pelangi</a
                            >
                        </li>
                        <li class="mb-4">
                            <a href="/destinasi-kolam-renang-atas-awan" class="hover:underline"
                                >Kolam Atas Awan</a
                            >
                        </li>
                        <li class="mb-4">
                            <a href="/destinasi-air-terjun-kabejan" class="hover:underline"
                                >Air Terjun Kabejan</a
                            >
                        </li>
                    </ul> --}}
                </div>
            </div>
        </div>
        <hr
            class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8"
        />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-white sm:text-center"
                >© 2024
                <a href="/" class="hover:underline"
                    >Klobur</a
                >. All Rights Reserved.
            </span>
        </div>
    </div>
</footer>
