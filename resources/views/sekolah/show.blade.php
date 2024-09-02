<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show Sekolah</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <h2>Show Sekolah</h2>
        <table class="form-control">
            <tr>
                <td>Nama:</td>
                <td>{{$findsekolah->nama_sekolah}}</td>
            </tr>
            <tr>
                <td>alamat sekolah:</td>
                <td>{{$findsekolah->alamat_sekolah}}</td>
                
            </tr>
        </table>
    </body>
</html>