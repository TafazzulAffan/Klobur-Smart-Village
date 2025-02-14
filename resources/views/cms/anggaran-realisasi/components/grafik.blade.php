<div class="shadow-xl flex flex-col gap-5 py-12 px-5 mb-8">
    <div class="flex flex-col gap-2">
        <h3 class="text-2xl font-bold">PENDAPATAN</h3>
        @foreach($anggaranseluruh as $anggaranpendp)
        <p>Anggaran  : <span class="text-green">Rp {{ number_format($anggaranpendp->nilai_anggaran, 0, ',', '.') }}</span></p>
        <p>Realisasi : <span class="text-green">Rp {{ number_format($anggaranpendp->nilai_realisasi, 0, ',', '.') }}</span></p>
        <div class="w-full h-3 rounded-full bg-gray-300 overflow-hidden">
            <div class="rounded-full bg-green text-xs leading-none h-3 text-center text-white" :style="'width: '+ parseInt({{$anggaranpendp->nilai_realisasi}} / {{$anggaranpendp->nilai_anggaran}} * 100) +'%'" style="background: green;"></div>
        </div>
        @endforeach
    </div>
    <div class="flex flex-col gap-2">
        <h3 class="text-2xl font-bold">BELANJA</h3>
        @foreach($anggaranseluruhbel as $anggaranbel)
        <p>Anggaran  : <span class="text-green">Rp {{ number_format($anggaranbel->nilai_anggaran, 0, ',', '.') }}</span></p>
        <p>Realisasi : <span class="text-green">Rp {{ number_format($anggaranbel->nilai_realisasi, 0, ',', '.') }}</span></p>
        <div class="w-full h-3 rounded-full bg-gray-300 overflow-hidden">
            <div class="rounded-full bg-green text-xs leading-none h-3 text-center text-white" :style="'width: '+ parseInt({{$anggaranbel->nilai_realisasi}} / {{$anggaranbel->nilai_anggaran}} * 100) +'%'"  style="background: green;"></div>
        </div> 
        @endforeach
    </div>
    <div class="flex flex-col gap-2">
        <h3 class="text-2xl font-bold">PEMBIAYAAN</h3>
        @foreach($anggaranseluruhbiaya as $anggaranbiaya)
        <p>Anggaran  : <span class="text-green">Rp {{ number_format($anggaranbiaya->nilai_anggaran, 0, ',', '.') }}</span></p>
        <p>Realisasi : <span class="text-green">Rp {{ number_format($anggaranbiaya->nilai_realisasi, 0, ',', '.') }}</span></p>
        <div class="w-full h-3 rounded-full bg-gray-300 overflow-hidden">
            <div class="rounded-full bg-green text-xs leading-none h-3 text-center text-white" :style="'width: '+ parseInt({{$anggaranbiaya->nilai_realisasi}} / {{$anggaranbiaya->nilai_anggaran}} * 100) +'%'" style="background: green;"></div>
        </div>
        @endforeach
    </div>
</div>

<div class="grid grid-cols-3 gap-5">
    <div class="shadow-xl py-12 px-5">
        <h3 class="text-2xl font-bold text-center mb-5">PENDAPATAN</h3>
        @foreach($anggaranduapendpt as $anggaranpendp)
        <div class="flex flex-col gap-2 border-b-2 pb-6">
            <h3 class="text-lg font-semibold">{{$anggaranpendp->rincian}}</h3>

            <p>Anggaran  : <span class="text-green">Rp {{ number_format($anggaranpendp->nilai_anggaran, 0, ',', '.') }}</span></p>
            <p>Realisasi : <span class="text-green">Rp {{ number_format($anggaranpendp->nilai_realisasi, 0, ',', '.') }}</span></p>
            <div class="w-full h-3 rounded-full bg-gray-300 overflow-hidden">
                <div class="rounded-full bg-green text-xs leading-none h-3 text-center text-white" :style="'width: '+ parseInt({{$anggaranpendp->nilai_realisasi}} / {{$anggaranpendp->nilai_anggaran}} * 100) +'%'" style="background: green;"></div>
            </div>
        </div>
        @endforeach
        
    </div>
    <div class="shadow-xl py-12 px-5">
        <h3 class="text-2xl font-bold text-center mb-5">BELANJA</h3>
        @foreach($anggaranduabel as $anggaranbel)
        <div class="flex flex-col gap-2 border-b-2 pb-6">
            <h3 class="text-lg font-semibold">{{$anggaranbel->rincian}}</h3>
        
            <p>Anggaran  : <span class="text-green">Rp {{ number_format($anggaranbel->nilai_anggaran, 0, ',', '.') }}</span></p>
            <p>Realisasi : <span class="text-green">Rp {{ number_format($anggaranbel->nilai_realisasi, 0, ',', '.') }}</span></p>
            <div class="w-full h-3 rounded-full bg-gray-300 overflow-hidden">
                <div class="rounded-full bg-green text-xs leading-none h-3 text-center text-white" :style="'width: '+ parseInt({{$anggaranbel->nilai_realisasi}} / {{$anggaranbel->nilai_anggaran}} * 100) +'%'" style="background: green;"></div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="shadow-xl py-12 px-5">
        <h3 class="text-lg font-bold text-center mb-5">PEMBIAYAAN</h3>@foreach($anggaranduabiaya as $anggaranbiaya)
        <div class="flex flex-col gap-2 border-b-2 pb-6">
            <h3 class="text-lg font-semibold">{{$anggaranbiaya->rincian}}</h3>

            <p>Anggaran  : <span class="text-green">Rp {{ number_format($anggaranbiaya->nilai_anggaran, 0, ',', '.') }}</span></p>
            <p>Realisasi : <span class="text-green">Rp {{ number_format($anggaranbiaya->nilai_realisasi, 0, ',', '.') }}</span></p>
            <div class="w-full h-3 rounded-full bg-gray-300 overflow-hidden">
                <div class="rounded-full bg-green text-xs leading-none h-3 text-center text-white" :style="'width: '+ parseInt({{$anggaranbiaya->nilai_realisasi}} / {{$anggaranbiaya->nilai_anggaran}} * 100) +'%'" style="background: green;"></div>
            </div>
        </div>
        @endforeach
    </div>