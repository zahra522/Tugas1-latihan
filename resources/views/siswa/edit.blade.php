<!-- resources/views/siswa/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
</head>
<body>
    <h1>Edit Siswa</h1>

    <form action="{{ url('updateSiswa/'.$findsiswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="{{$findsiswa->nama}}" required>
        </div>

        <div>
            <label for="no_tlp">No Telepon:</label>
            <input type="text" id="no_tlp" name="no_tlp" value="{{$findsiswa->no_tlp}}" required>
        </div>

        <div>
            <label for="NIS">NIS:</label>
            <input type="text" value="{{$findsiswa->NIS}}" id="NIS" name="NIS" required>
        </div>

        <div>
            <label for="alamat">Alamat:</label>
            <textarea id="text" name="alamat" required>{{ old('alamat', $findsiswa->alamat ?? '') }}</textarea>
        </div>

        <div>
            <label for="status">Status:</label>
            <input type="text" value="{{$findsiswa->status}}" id="status" name="status" required>
        </div>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
