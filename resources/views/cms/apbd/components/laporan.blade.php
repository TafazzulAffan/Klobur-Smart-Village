<div class="relative overflow-x-auto">
    <div class="flex items-center gap-5 justify-end">
<<<<<<< HEAD
        <button type="button" onclick="window.location.href='/tambah-apbdes'" class="flex items-center gap-3 text-jingga border-jingga hover:bg-jingga-100 focus:ring-2 focus:outline-none focus:ring-jingga-300 font-medium rounded-lg px-4 py-2 text-center mr-3 md:mr-0 text-lg">
=======
        <button type="button" onclick="window.location.href='/tambah-apbdes'" class="flex items-center gap-3 text-green border-green hover:bg-green-100 focus:ring-2 focus:outline-none focus:ring-green-300 font-medium rounded-lg px-4 py-2 text-center mr-3 md:mr-0 text-lg">
>>>>>>> fix
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 16 16" fill="none">
                <path d="M8 0C8.55228 0 9 0.447715 9 1V7H15C15.5523 7 16 7.44772 16 8C16 8.55228 15.5523 9 15 9H9V15C9 15.5523 8.55228 16 8 16C7.44772 16 7 15.5523 7 15V9H1C0.447715 9 0 8.55228 0 8C0 7.44772 0.447715 7 1 7H7V1C7 0.447715 7.44772 0 8 0Z" fill="#F8F9FA"/>
                <path d="M2.5 8H13.5M8 2.5L8 13.5" stroke="#F8F9FA" stroke-linecap="round" stroke-linejoin="round"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8 2C8.27614 2 8.5 2.22386 8.5 2.5V7.5H13.5C13.7761 7.5 14 7.72386 14 8C14 8.27614 13.7761 8.5 13.5 8.5H8.5V13.5C8.5 13.7761 8.27614 14 8 14C7.72386 14 7.5 13.7761 7.5 13.5V8.5H2.5C2.22386 8.5 2 8.27614 2 8C2 7.72386 2.22386 7.5 2.5 7.5H7.5V2.5C7.5 2.22386 7.72386 2 8 2Z" fill="#F8F9FA"/>
            </svg>
            Cetak Data
        </button>
    </div>
    <table class="w-full text-sm text-abu-700 border">
<<<<<<< HEAD
        <thead class="text-center text-white uppercase bg-jingga border-b">
=======
        <thead class="text-center text-white uppercase bg-green border-b">
>>>>>>> fix
            <tr>
                <th scope="col" class="px-3 py-3 border-r">
                    No
                </th>
                <th scope="col" class="px-6 py-3 border-r">
                    Uraian
                </th>
                <th scope="col" class="px-6 py-3 border-r">
                    Anggaran
                </th>
                <th scope="col" class="px-6 py-3 border-r">
                    Realisasi
                </th>
                <th scope="col" class="px-6 py-3 border-r">
                    Selisih
                </th>
                <th scope="col" class="px-6 py-3 border-r">
                    Persentase
                </th>
            </tr>
        </thead>
        <tbody class="text-left">
            {{-- Pendapatan Judul Start --}}
            <tr class="bg-white border-b">
                <td colspan="6" class="px-6 py-4 border-r whitespace-nowrap text-center font-bold text-base">Pendapatan</td>
            </tr>
            {{-- Pendapatan Judul End --}}

            {{-- Pendapatan Data Start --}}
            <tr class="bg-white border-b">
                <td class="px-3 py-4 border-r whitespace-nowrap">
                    1.1
                </td>
                <th scope="row" class="font-medium px-6 py-4 border-r whitespace-nowrap">
                    Pendapatan Asli Desa
                </th>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>2.000.000.000
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>2.000.000
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>1.998.000.000
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    100%
                </td>
            </tr>
            <tr class="bg-white border-b">
                <td class="px-3 py-4 border-r whitespace-nowrap">
                    1.1.1
                </td>
                <th scope="row" class="font-medium px-6 py-4 border-r whitespace-nowrap">
                    Hasil Usaha Desa
                </th>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>2.000.000.000
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>2.000.000
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>1.998.000.000
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    100%
                </td>
            </tr>
            {{-- Pendapatan Data End --}}

            {{-- Pendapatan Total Start --}}
<<<<<<< HEAD
            <tr class="bg-jingga text-white border-b">
=======
            <tr class="bg-green text-white border-b">
>>>>>>> fix
                <td colspan="3" class="px-6 py-4 border-r whitespace-nowrap text-center font-medium">Jumlah Pendapatan</td>
                <td class="font-medium px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>2.000.000
                </td>
                <td class="font-medium px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>1.998.000.000
                </td>
                <td class="font-medium px-6 py-4 border-r whitespace-nowrap">
                    100%
                </td>
            </tr>
            {{-- Pendapatan Total End --}}

            {{-- Belanja Judul Start --}}
            <tr class="bg-white border-b">
                <td colspan="6" class="px-6 py-4 border-r whitespace-nowrap text-center font-bold text-base">Belanja</td>
            </tr>
            {{-- Belanja Judul End --}}

            {{-- Belanja Data Start --}}
            <tr class="bg-white border-b">
                <td class="px-3 py-4 border-r whitespace-nowrap">
                    2.1
                </td>
                <th scope="row" class="font-medium px-6 py-4 border-r whitespace-nowrap">
                    Bidang Penyelenggaraan Pemerintahan Desa
                </th>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>2.000.000.000
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>2.000.000
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>1.998.000.000
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    100%
                </td>
            </tr>
            <tr class="bg-white border-b">
                <td class="px-3 py-4 border-r whitespace-nowrap">
                    2.2
                </td>
                <th scope="row" class="font-medium px-6 py-4 border-r whitespace-nowrap">
                    Bidang Pelaksanaan Pembangunan Desa
                </th>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>2.000.000.000
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>2.000.000
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>1.998.000.000
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    100%
                </td>
            </tr>
            {{-- Belanja Data End --}}

            {{-- Belanja Total Start --}}
<<<<<<< HEAD
            <tr class="bg-jingga text-white border-b">
=======
            <tr class="bg-green text-white border-b">
>>>>>>> fix
                <td colspan="3" class="px-6 py-4 border-r whitespace-nowrap text-center font-medium">Jumlah Belanja</td>
                <td class="font-medium px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>2.000.000
                </td>
                <td class="font-medium px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>1.998.000.000
                </td>
                <td class="font-medium px-6 py-4 border-r whitespace-nowrap">
                    100%
                </td>
            </tr>
            {{-- Belanja Total End --}}

            {{-- Belanja Surplus Start --}}
<<<<<<< HEAD
            <tr class="bg-jingga text-white border-b">
=======
            <tr class="bg-green text-white border-b">
>>>>>>> fix
                <td colspan="3" class="px-6 py-4 border-r whitespace-nowrap text-center font-medium">Surplus/(Defisit)</td>
                <td class="font-medium px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>2.000.000
                </td>
                <td class="font-medium px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>1.998.000.000
                </td>
                <td class="font-medium px-6 py-4 border-r whitespace-nowrap">
                    100%
                </td>
            </tr>
            {{-- Belanja Surplus End --}}

            {{-- Pembiayaan Judul Start --}}
            <tr class="bg-white border-b">
                <td colspan="6" class="px-6 py-4 border-r whitespace-nowrap text-center font-bold text-base">Pembiayaan</td>
            </tr>
            {{-- Pembiayaan Judul End --}}

            {{-- Pembiayaan Data Start --}}
            <tr class="bg-white border-b">
                <td class="px-3 py-4 border-r whitespace-nowrap">
                    3.1
                </td>
                <th scope="row" class="font-medium px-6 py-4 border-r whitespace-nowrap">
                    Penerimaan Biaya
                </th>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>2.000.000.000
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>2.000.000
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>1.998.000.000
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    100%
                </td>
            </tr>
            <tr class="bg-white border-b">
                <td class="px-3 py-4 border-r whitespace-nowrap">
                    3.1.1
                </td>
                <th scope="row" class="font-medium px-6 py-4 border-r whitespace-nowrap">
                    SILPA Tahun Sebelumnya
                </th>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>2.000.000.000
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>2.000.000
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>1.998.000.000
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    100%
                </td>
            </tr>
            {{-- Pembiayaan Data End --}}

            {{-- Pembiayaan Total Start --}}
<<<<<<< HEAD
            <tr class="bg-jingga text-white border-b">
=======
            <tr class="bg-green text-white border-b">
>>>>>>> fix
                <td colspan="3" class="px-6 py-4 border-r whitespace-nowrap text-center font-medium">Jumlah Pembiayaan</td>
                <td class="font-medium px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>2.000.000
                </td>
                <td class="font-medium px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>1.998.000.000
                </td>
                <td class="font-medium px-6 py-4 border-r whitespace-nowrap">
                    100%
                </td>
            </tr>
            {{-- Pembiayaan Total End --}}

            {{-- Pembiayaan Surplus Start --}}
<<<<<<< HEAD
            <tr class="bg-jingga text-white border-b">
=======
            <tr class="bg-green text-white border-b">
>>>>>>> fix
                <td colspan="3" class="px-6 py-4 border-r whitespace-nowrap text-center font-medium">Surplus/(Defisit)</td>
                <td class="font-medium px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>2.000.000
                </td>
                <td class="font-medium px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>1.998.000.000
                </td>
                <td class="font-medium px-6 py-4 border-r whitespace-nowrap">
                    100%
                </td>
            </tr>
            {{-- Pembiayaan Surplus End --}}
        </tbody>
    </table>
</div>