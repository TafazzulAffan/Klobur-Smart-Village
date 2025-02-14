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
    <title>Cetak Data Pendapatan</title>
</head>
<body>
    <div class="form-group">
        <p align="center"><b>CETAK DATA PENDAPATAN DESA</b></p>
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
            @foreach ($anggaran as $anggaranpendp)
                {{-- Pendapatan Data Start --}}
                <tr class="bg-white border-b">
                    <td class="px-3 py-4 border-r">
                        {{$anggaranpendp->detail_jenis_anggaran}}
                    </td>
                    <th scope="row" class="font-medium px-6 py-4 border-r">
                        {{ $anggaranpendp->rincian }}
                    </th>
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        <span>Rp </span>{{ $anggaranpendp->nilai_anggaran }}
                    </td>
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        <span>Rp </span>{{ $anggaranpendp->nilai_realisasi }}
                    </td>
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        <span>Rp </span>{{ $anggaranpendp->nilai_anggaran - $anggaranpendp->nilai_realisasi }}
                    </td>
                    @php
                        $selisih = $anggaranpendp->nilai_anggaran - $anggaranpendp->nilai_realisasi;
                    @endphp
                    <td class="px-3 py-4 border-r whitespace-nowrap">
                        {{ round((($anggaranpendp->nilai_anggaran - $anggaranpendp->nilai_realisasi) / $anggaranpendp->nilai_anggaran) * 100, 2) }}%
                    </td>    
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        {{ $anggaranpendp->created_at}}
                    </td>        
                    <td class="px-6 py-4 border-r whitespace-nowrap">
                        {{ $anggaranpendp->tahun}}
                    </td>          
                    
                </tr>
                {{-- Pendapatan Data End --}}
            @endforeach
            <tr class="bg-green text-white border-b font-bold">
                <th colspan="2" class="px-6 py-4 border-r whitespace-nowrap text-center">JUMLAH PENDAPATAN</th>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>{{ $jumlahAPend }}
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>{{ $jumlahAPendRea }}
                </td>
                <td class="px-6 py-4 border-r whitespace-nowrap">
                    <span>Rp </span>{{ $jumlahAnggaranPenSel }}
                </td>
                <td class="px-3 py-4 border-r whitespace-nowrap">
                    {{round(($persenPen)*100, 1)}}%
                    {{-- {{ round((($anggaranpendp->nilai_anggaran - $anggaranpendp->nilai_realisasi) / $anggaranpendp->nilai_anggaran) * 100, 2) }}% --}}
                </td>
                <td class="px-3 py-4 border-r whitespace-nowrap">
                    
                <td class="px-3 py-4 border-r whitespace-nowrap">
                    
                </td>
            </tr>
         </table>
    </div>
</body>
</html>
