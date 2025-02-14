<h3 class="font-bold text-lg md:text-2xl mb-5 text-center md:text-left">Berita Terkini</h3>
<div class="w-full h-fit grid grid-rows-3 gap-7">
    @foreach ($sideNews as $sideNew)
        @if ($sideNew->status == 'Aktif')
            <a href="/berita/{{ $sideNew->id }}" class="">
                <img class="mb-4 h-40 w-full object-cover rounded" src="{{ asset('storage/berita/' . $sideNew->gambar) }}" alt="" />
                <h3 class="font-semibold text-sm md:text-lg">
                    {{ $sideNew->judul }}
                </h3>
                <p class="text-red-500 text-xs bg-abu-400 rounded-full w-fit py-0.5 px-2 md:px-3 mb-3">
                    {{ $sideNew->kategori }}
                </p>
                <div class="flex text-xs text-abu-500 items-center justify-between mt-3">
                    <p>{{ $sideNew->created_at }}</p>
                </div>
            </a>
        @endif
    @endforeach
</div>
