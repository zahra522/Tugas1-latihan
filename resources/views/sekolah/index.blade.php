<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>indexSekolah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>halaman index sekolah</h1>

    <table class="table table-striped table-hover table-bordered">
        <tr>
            <td>Nama Sekolah</td>
            <td>Alamat Sekolah</td>
            <td>Action</td>
        </tr>
        @foreach($namasekolah as $row)
            <tr>
                <td>{{ $row->nama_sekolah }}</td>
                <td>{{ $row->alamat_sekolah }}</td>
                <td>
                    <a href="{{ url('/getSekolah/'.$row->id) }}" class="btn btn-primary">Detail</a>
                    <a href="{{ url('/editSekolah/'.$row->id) }}" class="btn btn-info">Edit</a>
                    <form action="{{ url('/deleteSekolah/'.$row->id) }}" method="POST" style="display:inline;">
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