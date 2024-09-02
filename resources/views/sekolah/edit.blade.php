<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sekolah</title>
</head>
<body>
    <h1>Edit Sekolah</h1>

    <form action="{{ url('updateSekolah/'.$findsekolah->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nama_sekolah">Nama sekolah:</label>
            <input type="text" id="nama_sekolah" name="nama_sekolah" value="{{$findsekolah->nama_sekolah}}" required>
        </div>

        <div>
            <label for="alamat_sekolah">Alamat sekolah:</label>
            <textarea id="text" name="alamat_sekolah" required>{{ old('alamat_sekolah', $findsekolah->alamat_sekolah ?? '') }}</textarea>
        </div>
            

        <button type="submit">Submit</button>
    </form>
</body>
</html>
