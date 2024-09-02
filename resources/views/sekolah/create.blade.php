<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Sekolah</title>
</head>
<body>
    <h1>Create sekolah</h1>
    <form action="/storeSekolah" method="POST">
        @csrf<!-- Blade directive for CSRF token -->
          <!-- Form fields -->

        <div>
            <label for="nama_sekolah">Nama sekolah:</label>
            <input type="text" id="nama_sekolah" name="nama_sekolah" required>
        </div>

        <div>
            <label for="alamat_sekolah">alamat sekolah:</label>
            <input type="text" id="alamat_sekolah" name="alamat_sekolah" required>
        </div>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
