<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show Siswa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <h2>Show Siswa</h2>
        <table class="form-control">
            <tr>
                <td>Nama:</td>
                <td>{{$findsiswa->nama}}</td>
            </tr>
            <tr>
                <td>No Tlpn:</td>
                <td>{{$findsiswa->no_tlp}}</td>
                
            </tr>
            <tr>
                <td>NIS:</td>
                <td>{{$findsiswa->NIS}}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>{{$findsiswa->alamat}}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>{{$findsiswa->status}}</td>
            </tr>
        </table>
    </body>
</html>