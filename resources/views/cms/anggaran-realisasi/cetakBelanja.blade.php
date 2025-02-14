<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <style>
        table.static{
            position: relative;
            border: 1px solid #543535
        }
    </style>
    <title>Cetak Data Belanja</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>CETAK DATA BELANJA DESA</b></p>
        <table class="static" rules="all" border="1px" style="width:95%;">
            <tr>
                <th >
                    Jenis Anggaran
                </th>
                <th >
                    Uraian
                </th>
                <th >
                    Anggaran
                </th>
                <th >
                    Realisasi
                </th>
                <th >
                    Selisih
                </th>
                <th>
                    Persentase
                </th>
                <th>
                    Tanggal Upload
                </th>
                <th>
                    Tahun
                </th>
            </tr>
            @foreach ($anggaranbelj as $anggaranbel)
                {{-- Belanja Data Start --}}
                <tr class="bg-white border-b">
                    <td class="px-3 py-4 border-r">
                        {{$anggaranbel->detail_jenis_anggaran}}
                    </td>
                    <th scope="row" class="font-medium px-6 py-4 border-r">
                        {{ $anggaranbel->rincian }}
                    </th>
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        <span>Rp </span>{{ $anggaranbel->nilai_anggaran }}
                    </td>
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        <span>Rp </span>{{ $anggaranbel->nilai_realisasi }}
                    </td>
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        <span>Rp </span>{{ $anggaranbel->nilai_anggaran - $anggaranbel->nilai_realisasi }}
                    </td>
                    @php
                        $selisih = $anggaranbel->nilai_anggaran - $anggaranbel->nilai_realisasi;
                    @endphp
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        {{ round((($anggaranbel->nilai_anggaran - $anggaranbel->nilai_realisasi) / $anggaranbel->nilai_anggaran) * 100, 2) }}%
                        {{-- {{ ($selisih / $anggaranbel->nilai_anggaran) * 100 }}% --}}
                    </td>
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        {{ $anggaranbel->created_at}}
                    </td>  
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        {{ $anggaranbel->tahun}}
                    </td>     
                </tr>
                {{-- Belanja Data End --}}
            @endforeach
            <tr class="bg-green text-white border-b font-bold">
                <th colspan="2" class="px-6 py-4 border-r whitespace-nowrap text-center">JUMLAH BELANJA</th>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>{{ $jumlahABel }}
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>{{ $jumlahABelRea }}
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>{{ $jumlahABelSel }}
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    {{round(($persenBel)*100, 1)}}%
                    {{-- {{ round((($anggaranbel->nilai_anggaran - $anggaranbel->nilai_realisasi) / $anggaranbel->nilai_anggaran) * 100, 2) }}% --}}
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    {{-- {{ round((($anggaranbel->nilai_anggaran - $anggaranbel->nilai_realisasi) / $anggaranbel->nilai_anggaran) * 100, 2) }}% --}}
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    {{-- {{ round((($anggaranbel->nilai_anggaran - $anggaranbel->nilai_realisasi) / $anggaranbel->nilai_anggaran) * 100, 2) }}% --}}
                </td>
            </tr>
         </table>
    </div>
</body>
</html>