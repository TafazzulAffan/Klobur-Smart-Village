@php
    use Illuminate\Support\Facades\Request;
@endphp

<nav
    class="bg-white fixed w-full xl:h-[100px] z-[99999] top-0 left-0 border-b border-gray-200 xl:flex xl:items-center xl:justify-between"
>
    <div class="container mx-auto px-4 md:px-8">
        <div
            class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-4"
        >
            <a href="/" class="flex items-center">      
                <img
                    src="{{asset('img/lambang.jpeg')}}"
                    class="h-9 mr-3"
                    alt="Klobur Logo"
                />
                <span
                    class="self-center text-base font-semibold whitespace-nowrap"
                    >Klobur Smart Village</span
                >
            </a>
            <button
                data-collapse-toggle="navbar-dropdown"
                type="button"
                class="inline-flex items-center ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-dropdown"
                aria-expanded="false"
            >
                <span class="sr-only">Open Menu</span>
                <svg
                    class="w-6 h-6 fill-dark"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
            </button>
            <div
                class="hidden w-full md:flex md:w-auto justify-between"
                id="navbar-dropdown"
            >
                <ul
                    class="flex flex-col md:items-center font-medium p-4 md:p-0 mt-4 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0 text-lg"
                >
                    <li>
                        <a
                            href="/"
                            class="block py-2 pl-3 pr-4 rounded md:bg-transparent text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 {{Request::is('/') ? 'text-white bg-[#198754] md:text-[#198754]' : 'md:hover:text-[#198754]'}}"
                            aria-current="page"
                            >Beranda</a
                        >
                    </li>
                    <li>
                        <button
                            id="dropdownNavbarLink"
                            data-dropdown-toggle="dropdownNavbar1"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 md:w-auto md:bg-transparent focus:bg-[#198754] md:focus:bg-transparent focus:text-[#198754] md:focus:text-[#198754] {{ Request::is('perangkat-desa', 'sejarah-desa') ? 'text-white bg-[#198754] md:text-[#198754]' : 'md:hover:text-[#198754]' }}"
                        >
                            Profil Desa<svg
                                class="w-5 h-5 ml-1"
                                aria-hidden="true"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div
                            id="dropdownNavbar1"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-72"
                        >
                            <ul
                                class="py-2 text-lg text-gray-700"
                                aria-labelledby="dropdownLargeButton"
                            >
                                <li>
                                    <a
                                        href="/perangkat-desa"
                                        class="block px-4 py-2 border-b mx-2 hover:bg-gray-100"
                                        >Perangkat Desa</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="/sejarah-desa"
                                        class="block px-4 py-2 border-b mx-2 hover:bg-gray-100"
                                        >Sejarah Desa</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button
                            id="dropdownNavbarLink"
                            data-dropdown-toggle="dropdownNavbar2"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 md:w-auto md:bg-transparent focus:bg-[#198754] md:focus:bg-transparent focus:text-[#198754] md:focus:text-[#198754] {{ Request::is('jenis-kelamin', 'agama', 'pekerjaan', 'pendidikan') ? 'text-white bg-[#198754] md:text-[#198754]' : 'md:hover:text-[#198754]' }}"
                        >
                            Data Desa<svg
                                class="w-5 h-5 ml-1"
                                aria-hidden="true"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div
                            id="dropdownNavbar2"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-72"
                        >
                            <ul
                                class="py-2 text-lg text-gray-700"
                                aria-labelledby="dropdownLargeButton"
                            >
                                <li>
                                    <a
                                        href="/jenis-kelamin"
                                        class="block px-4 py-2 border-b mx-2 hover:bg-gray-100"
                                        >Data Jenis Kelamin</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="/agama"
                                        class="block px-4 py-2 border-b mx-2 hover:bg-gray-100"
                                        >Data Agama</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="/pekerjaan"
                                        class="block px-4 py-2 border-b mx-2 hover:bg-gray-100"
                                        >Data Pekerjaan</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="/pendidikan"
                                        class="block px-4 py-2 border-b mx-2 hover:bg-gray-100"
                                        >Data Pendidikan Dalam KK</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button
                            id="dropdownNavbarLink"
                            data-dropdown-toggle="dropdownNavbar3"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 md:w-auto  md:bg-transparent focus:bg-[#198754] md:focus:bg-transparent focus:text-white md:focus:text-[#198754] {{ Request::is('perizinan-online', 'bumdes') ? 'text-white bg-[#198754] md:text-[#198754]' : 'md:hover:text-[#198754]' }}"
                        >
                            Layanan<svg
                                class="w-5 h-5 ml-1"
                                aria-hidden="true"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div
                            id="dropdownNavbar3"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-72"
                        >
                            <ul
                                class="py-2 text-lg text-gray-700"
                                aria-labelledby="dropdownLargeButton"
                            >
                                <li>
                                    <a
                                        href="/user-perizinan-online"
                                        class="block px-4 py-2 border-b mx-2 hover:bg-gray-100"
                                        >Pelayanan Online</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="/user-status-perizinan"
                                        class="block px-4 py-2 border-b mx-2 hover:bg-gray-100"
                                        >Status Pelayanan Online</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="/bumdes"
                                        class="block px-4 py-2 border-b mx-2 hover:bg-gray-100"
                                        >BUMDes (Kontak BUMDes, Program
                                        BUMDes)</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <button
                            id="dropdownNavbarLink"
                            data-dropdown-toggle="dropdownNavbar4"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 md:w-auto  md:bg-transparent focus:bg-[#198754] md:focus:bg-transparent focus:text-white md:focus:text-[#198754] {{ Request::is('produk-hukum', 'informasi-publik') ? 'text-white bg-[#198754] md:text-[#198754]' : 'md:hover:text-[#198754]' }}"
                        >
                            Regulasi<svg
                                class="w-5 h-5 ml-1"
                                aria-hidden="true"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                ></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div
                            id="dropdownNavbar4"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-72"
                        >
                            <ul
                                class="py-2 text-lg text-gray-700"
                                aria-labelledby="dropdownLargeButton"
                            >
                                <li>
                                    <a
                                        href="/produk-hukum"
                                        class="block px-4 py-2 border-b mx-2 hover:bg-gray-100"
                                        >Produk Hukum</a
                                    >
                                </li>
                                <li>
                                    <a
                                        href="/informasi-publik"
                                        class="block px-4 py-2 border-b mx-2 hover:bg-gray-100"
                                        >Informasi Publik</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a
                            href="/wisata-desa"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0 md:bg-transparent focus:bg-[#198754] md:focus:bg-transparent focus:text-white md:focus:text-[#198754] {{ Request::is('wisata-desa') ? 'text-white bg-[#198754] md:text-[#198754]' : 'md:hover:text-[#198754]' }}"
                            >Wisata Desa</a
                        >
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
