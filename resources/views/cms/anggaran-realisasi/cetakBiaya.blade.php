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
    <title>Cetak Data Pembiayaan</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>CETAK DATA BIAYA DESA</b></p>
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
            @foreach ($anggaranbiayalaporans as $a)
            {{-- Pembiayaan Data Start --}}
            <tr class="bg-white border-b">
                <td class="px-3 py-4 border-r">
                    {{$a->detail_jenis_anggaran}}
                </td>
                <th scope="row" class="font-medium px-6 py-4 border-r">
                    {{ $a->rincian }}
                </th>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>{{ $a->nilai_anggaran }}
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>{{ $a->nilai_realisasi }}
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>{{ $a->nilai_anggaran - $a->nilai_realisasi }}
                </td>
                @php
                    $selisih = $a->nilai_anggaran - $a->nilai_realisasi;
                @endphp
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    {{ round((($a->nilai_anggaran - $a->nilai_realisasi) / $a->nilai_anggaran) * 100, 2) }}%
                    {{-- {{ ($selisih / $a->nilai_anggaran) * 100 }}% --}}
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    {{ $a->created_at}}
                </td>    
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    {{ $a->tahun}}
                </td>  
            </tr>
            {{-- Pembiayaan Data End --}}
        @endforeach

        {{-- Pembiayaan Total Start --}}
            <tr class="bg-green text-white border-b font-bold">
                <th colspan="2" class="px-6 py-4 border-r whitespace-nowrap text-center">PEMBIAYAAN NETTO</th>

                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>{{ $jumlahBiaya }}
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>{{ $jumlahBiayaRea }}
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>{{ $jumlahBiayaSel }}
                </td>
                <td class="px-3 py-4 border-r whitespace-nowrap">
                    {{round(($persenBiaya)*100, 1)}}%
                    {{-- {{ round((($a->nilai_anggaran - $a->nilai_realisasi) / $a->nilai_anggaran) * 100, 2) }}% --}}
                </td>
                <td class="px-3 py-4 border-r whitespace-nowrap">
                    
                </td>
                <td class="px-3 py-4 border-r whitespace-nowrap">
                
                </td>
            </tr>
         </table>
    </div>
</body>
</html>