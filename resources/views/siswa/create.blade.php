<!-- resources/views/siswa/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Siswa</title>
</head>
<body>
    <h1>Create Siswa</h1>

    <form action="{{ url('/storeSiswa') }}" method="POST">
        @csrf

        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>

        <div>
            <label for="no_tlp">No Telepon:</label>
            <input type="text" id="no_tlp" name="no_tlp" required>
        </div>

        <div>
            <label for="NIS">NIS:</label>
            <input type="text" id="NIS" name="NIS" required>
        </div>

        <div>
            <label for="alamat">Alamat:</label>
            <textarea id="alamat" name="alamat" required></textarea>
        </div>

        <div>
            <label for="status">Status:</label>
            <input type="text" id="status" name="status" required>
        </div>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
