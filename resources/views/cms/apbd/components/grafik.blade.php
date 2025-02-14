<div class="shadow-xl flex flex-col gap-5 py-12 px-5 mb-8">
    <div class="flex flex-col gap-2">
        <h3 class="text-2xl font-bold">PENDAPATAN</h3>
        @php
            $anggaran = 5_000_000;
            $realisasi = 700_000
        @endphp
<<<<<<< HEAD
        <p>Anggaran : <span class="text-jingga">Rp {{ number_format($anggaran, 0, ',', '.') }}</span></p>
        <p>Realisasi : <span class="text-jingga">Rp {{ number_format($realisasi, 0, ',', '.') }}</span></p>
        <div class="w-full h-3 rounded-full bg-gray-300">
            <div class="rounded-full bg-jingga text-xs leading-none h-3 text-center text-white" :style="'width: '+ parseInt({{$realisasi}} / {{$anggaran}} * 100) +'%'"></div>
=======
        <p>Anggaran : <span class="text-green">Rp {{ number_format($anggaran, 0, ',', '.') }}</span></p>
        <p>Realisasi : <span class="text-green">Rp {{ number_format($realisasi, 0, ',', '.') }}</span></p>
        <div class="w-full h-3 rounded-full bg-gray-300">
            <div class="rounded-full bg-green text-xs leading-none h-3 text-center text-white" :style="'width: '+ parseInt({{$realisasi}} / {{$anggaran}} * 100) +'%'"></div>
>>>>>>> fix
        </div>
    </div>
    <div class="flex flex-col gap-2">
        <h3 class="text-2xl font-bold">BELANJA</h3>
        @php
            $anggaran = 2_900_000;
            $realisasi = 100_000
        @endphp
<<<<<<< HEAD
        <p>Anggaran : <span class="text-jingga">Rp {{ number_format($anggaran, 0, ',', '.') }}</span></p>
        <p>Realisasi : <span class="text-jingga">Rp {{ number_format($realisasi, 0, ',', '.') }}</span></p>
        <div class="w-full h-3 rounded-full bg-gray-300">
            <div class="rounded-full bg-jingga text-xs leading-none h-3 text-center text-white" :style="'width: '+ parseInt({{$realisasi}} / {{$anggaran}} * 100) +'%'"></div>
=======
        <p>Anggaran : <span class="text-green">Rp {{ number_format($anggaran, 0, ',', '.') }}</span></p>
        <p>Realisasi : <span class="text-green">Rp {{ number_format($realisasi, 0, ',', '.') }}</span></p>
        <div class="w-full h-3 rounded-full bg-gray-300">
            <div class="rounded-full bg-green text-xs leading-none h-3 text-center text-white" :style="'width: '+ parseInt({{$realisasi}} / {{$anggaran}} * 100) +'%'"></div>
>>>>>>> fix
        </div>
    </div>
    <div class="flex flex-col gap-2">
        <h3 class="text-2xl font-bold">PEMBIAYAAN</h3>
        @php
            $anggaran = 2_000_000;
            $realisasi = 200_000
        @endphp
<<<<<<< HEAD
        <p>Anggaran : <span class="text-jingga">Rp {{ number_format($anggaran, 0, ',', '.') }}</span></p>
        <p>Realisasi : <span class="text-jingga">Rp {{ number_format($realisasi, 0, ',', '.') }}</span></p>
        <div class="w-full h-3 rounded-full bg-gray-300">
            <div class="rounded-full bg-jingga text-xs leading-none h-3 text-center text-white" :style="'width: '+ parseInt({{$realisasi}} / {{$anggaran}} * 100) +'%'"></div>
=======
        <p>Anggaran : <span class="text-green">Rp {{ number_format($anggaran, 0, ',', '.') }}</span></p>
        <p>Realisasi : <span class="text-green">Rp {{ number_format($realisasi, 0, ',', '.') }}</span></p>
        <div class="w-full h-3 rounded-full bg-gray-300">
            <div class="rounded-full bg-green text-xs leading-none h-3 text-center text-white" :style="'width: '+ parseInt({{$realisasi}} / {{$anggaran}} * 100) +'%'"></div>
>>>>>>> fix
        </div>
    </div>
</div>

<div class="grid grid-cols-3 gap-5">
    <div class="shadow-xl py-12 px-5">
        <h3 class="text-2xl font-bold text-center mb-5">PENDAPATAN</h3>
        <div class="flex flex-col gap-2 border-b-2 pb-6">
            <h3 class="text-lg font-semibold">HASIL USAHA DESA</h3>
            @php
                $anggaran = 1_000_000;
                $realisasi = 200_000
            @endphp
<<<<<<< HEAD
            <p>Anggaran : <span class="text-jingga">Rp {{ number_format($anggaran, 0, ',', '.') }}</span></p>
            <p>Realisasi : <span class="text-jingga">Rp {{ number_format($realisasi, 0, ',', '.') }}</span></p>
            <div class="w-full h-3 rounded-full bg-gray-300">
                <div class="rounded-full bg-jingga text-xs leading-none h-3 text-center text-white" :style="'width: '+ parseInt({{$realisasi}} / {{$anggaran}} * 100) +'%'"></div>
=======
            <p>Anggaran : <span class="text-green">Rp {{ number_format($anggaran, 0, ',', '.') }}</span></p>
            <p>Realisasi : <span class="text-green">Rp {{ number_format($realisasi, 0, ',', '.') }}</span></p>
            <div class="w-full h-3 rounded-full bg-gray-300">
                <div class="rounded-full bg-green text-xs leading-none h-3 text-center text-white" :style="'width: '+ parseInt({{$realisasi}} / {{$anggaran}} * 100) +'%'"></div>
>>>>>>> fix
            </div>
        </div>
        <div class="flex flex-col gap-2 border-b-2 pb-6">
            <h3 class="text-lg font-semibold">HASIL USAHA DESA</h3>
            @php
                $anggaran = 7_000_000;
                $realisasi = 1_000_000
            @endphp
<<<<<<< HEAD
            <p>Anggaran : <span class="text-jingga">Rp {{ number_format($anggaran, 0, ',', '.') }}</span></p>
            <p>Realisasi : <span class="text-jingga">Rp {{ number_format($realisasi, 0, ',', '.') }}</span></p>
            <div class="w-full h-3 rounded-full bg-gray-300">
                <div class="rounded-full bg-jingga text-xs leading-none h-3 text-center text-white" :style="'width: '+ parseInt({{$realisasi}} / {{$anggaran}} * 100) +'%'"></div>
=======
            <p>Anggaran : <span class="text-green">Rp {{ number_format($anggaran, 0, ',', '.') }}</span></p>
            <p>Realisasi : <span class="text-green">Rp {{ number_format($realisasi, 0, ',', '.') }}</span></p>
            <div class="w-full h-3 rounded-full bg-gray-300">
                <div class="rounded-full bg-green text-xs leading-none h-3 text-center text-white" :style="'width: '+ parseInt({{$realisasi}} / {{$anggaran}} * 100) +'%'"></div>
>>>>>>> fix
            </div>
        </div>
    </div>
    <div class="shadow-xl py-12 px-5">
        <h3 class="text-2xl font-bold text-center mb-5">BELANJA</h3>
        <div class="flex flex-col gap-2 border-b-2 pb-6">
            <h3 class="text-lg font-semibold">HASIL USAHA DESA</h3>
            @php
                $anggaran = 2_200_000;
                $realisasi = 220_000
            @endphp
<<<<<<< HEAD
            <p>Anggaran : <span class="text-jingga">Rp {{ number_format($anggaran, 0, ',', '.') }}</span></p>
            <p>Realisasi : <span class="text-jingga">Rp {{ number_format($realisasi, 0, ',', '.') }}</span></p>
            <div class="w-full h-3 rounded-full bg-gray-300">
                <div class="rounded-full bg-jingga text-xs leading-none h-3 text-center text-white" :style="'width: '+ parseInt({{$realisasi}} / {{$anggaran}} * 100) +'%'"></div>
=======
            <p>Anggaran : <span class="text-green">Rp {{ number_format($anggaran, 0, ',', '.') }}</span></p>
            <p>Realisasi : <span class="text-green">Rp {{ number_format($realisasi, 0, ',', '.') }}</span></p>
            <div class="w-full h-3 rounded-full bg-gray-300">
                <div class="rounded-full bg-green text-xs leading-none h-3 text-center text-white" :style="'width: '+ parseInt({{$realisasi}} / {{$anggaran}} * 100) +'%'"></div>
>>>>>>> fix
            </div>
        </div>
        <div class="flex flex-col gap-2 border-b-2 pb-6">
            <h3 class="text-lg font-semibold">HASIL USAHA DESA</h3>
            @php
                $anggaran = 8_000_000;
                $realisasi = 1_900_000
            @endphp
<<<<<<< HEAD
            <p>Anggaran : <span class="text-jingga">Rp {{ number_format($anggaran, 0, ',', '.') }}</span></p>
            <p>Realisasi : <span class="text-jingga">Rp {{ number_format($realisasi, 0, ',', '.') }}</span></p>
            <div class="w-full h-3 rounded-full bg-gray-300">
                <div class="rounded-full bg-jingga text-xs leading-none h-3 text-center text-white" :style="'width: '+ parseInt({{$realisasi}} / {{$anggaran}} * 100) +'%'"></div>
=======
            <p>Anggaran : <span class="text-green">Rp {{ number_format($anggaran, 0, ',', '.') }}</span></p>
            <p>Realisasi : <span class="text-green">Rp {{ number_format($realisasi, 0, ',', '.') }}</span></p>
            <div class="w-full h-3 rounded-full bg-gray-300">
                <div class="rounded-full bg-green text-xs leading-none h-3 text-center text-white" :style="'width: '+ parseInt({{$realisasi}} / {{$anggaran}} * 100) +'%'"></div>
>>>>>>> fix
            </div>
        </div>
    </div>
    <div class="shadow-xl py-12 px-5">
        <h3 class="text-lg font-bold text-center mb-5">PEMBIAYAAN</h3>
        <div class="flex flex-col gap-2 border-b-2 pb-6">
            <h3 class="text-lg font-semibold">HASIL USAHA DESA</h3>
            @php
                $anggaran = 22_000_000;
                $realisasi = 20_000_000
            @endphp
<<<<<<< HEAD
            <p>Anggaran : <span class="text-jingga">Rp {{ number_format($anggaran, 0, ',', '.') }}</span></p>
            <p>Realisasi : <span class="text-jingga">Rp {{ number_format($realisasi, 0, ',', '.') }}</span></p>
            <div class="w-full h-3 rounded-full bg-gray-300">
                <div class="rounded-full bg-jingga text-xs leading-none h-3 text-center text-white" :style="'width: '+ parseInt({{$realisasi}} / {{$anggaran}} * 100) +'%'"></div>
=======
            <p>Anggaran : <span class="text-green">Rp {{ number_format($anggaran, 0, ',', '.') }}</span></p>
            <p>Realisasi : <span class="text-green">Rp {{ number_format($realisasi, 0, ',', '.') }}</span></p>
            <div class="w-full h-3 rounded-full bg-gray-300">
                <div class="rounded-full bg-green text-xs leading-none h-3 text-center text-white" :style="'width: '+ parseInt({{$realisasi}} / {{$anggaran}} * 100) +'%'"></div>
>>>>>>> fix
            </div>
        </div>
        <div class="flex flex-col gap-2 border-b-2 pb-6">
            <h3 class="text-lg font-semibold">HASIL USAHA DESA</h3>
            @php
                $anggaran = 2_000_000;
                $realisasi = 400_000
            @endphp
<<<<<<< HEAD
            <p>Anggaran : <span class="text-jingga">Rp {{ number_format($anggaran, 0, ',', '.') }}</span></p>
            <p>Realisasi : <span class="text-jingga">Rp {{ number_format($realisasi, 0, ',', '.') }}</span></p>
            <div class="w-full h-3 rounded-full bg-gray-300">
                <div class="rounded-full bg-jingga text-xs leading-none h-3 text-center text-white" :style="'width: '+ parseInt({{$realisasi}} / {{$anggaran}} * 100) +'%'"></div>
=======
            <p>Anggaran : <span class="text-green">Rp {{ number_format($anggaran, 0, ',', '.') }}</span></p>
            <p>Realisasi : <span class="text-green">Rp {{ number_format($realisasi, 0, ',', '.') }}</span></p>
            <div class="w-full h-3 rounded-full bg-gray-300">
                <div class="rounded-full bg-green text-xs leading-none h-3 text-center text-white" :style="'width: '+ parseInt({{$realisasi}} / {{$anggaran}} * 100) +'%'"></div>
>>>>>>> fix
            </div>
        </div>
    </div>
</div>