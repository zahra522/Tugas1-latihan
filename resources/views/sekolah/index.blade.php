<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indexSekolah</title>
</head>
<body>
    <h1>halaman index sekolah</h1>

    <table class="">
        <tr class="">
            <td class="">Nama Sekolah</td>
            <td class="">Alamat Sekolah</td>
        </tr>
        @foreach($dataSekolah as $row)
            <tr class="">

                    <td class="">{{$row->nama_sekolah}}</td>
                    <td class="">{{$row->alamat_sekolah}}</td>

            </tr>
        @endforeach
    </table>
    
</body>
</html>