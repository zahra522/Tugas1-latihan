<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indexsiswa</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <table class="">
        <tr class="">
            <td class="">id</td>
            <td class="">nama</td>
            <td class="">no tlp</td>
            <td class="">NIS</td>
            <td class="">alamat</td>
            <td class="">status</td>
        </tr>
        @foreach($namasiswa as $row)
            <tr class="">

                    <td class="">{{$row->id}}</td>
                    <td class="">{{$row->nama}}</td>
                    <td class="">{{$row->no_tlp}}</td>
                    <td class="">{{$row->NIS}}</td>
                    <td class="">{{$row->alamat}}</td>
                    <td class="">{{$row->status}}</td>

            </tr>
        @endforeach
    </table>

        
    </body>
    </html>