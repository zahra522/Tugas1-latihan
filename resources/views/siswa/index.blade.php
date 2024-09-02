<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indexsiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h2>Data Siswa</h2>
    <table class="table table-striped table-hover table-bordered">
        <tr class="">
            <td class="">id</td>
            <td class="">nama</td>
            <td class="">no tlp</td>
            <td class="">NIS</td>
            <td class="">alamat</td>
            <td class="">status</td>
            <td class="">action</td>
        </tr>
        @foreach($namasiswa as $row)
            <tr class="">

                    <td class="">{{$row->id}}</td>
                    <td class="">{{$row->nama}}</td>
                    <td class="">{{$row->no_tlp}}</td>
                    <td class="">{{$row->NIS}}</td>
                    <td class="">{{$row->alamat}}</td>
                    <td class="">{{$row->status}}</td>
                    <td class="">
                        <a href="{{ url('/getSiswa/'.$row->id) }}" class="btn btn-primary">Detail</a>
                        <a href="{{ url('/editSiswa/'.$row->id) }}" class="btn btn-info">Edit</a>
                        <form action="{{ url('/deleteSiswa/'.$row->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')">Hapus</button>
                        </form>
                    </td>
            </tr>
        @endforeach
    </table>

        
    </body>
    </html>