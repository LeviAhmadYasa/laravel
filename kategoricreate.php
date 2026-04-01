<!DOCTYPE html>
<html>

<head>
    <title>Tambah Kategori</title>
</head>

<body>

    <h2>Tambah Kategori</h2>

    <form method="POST" action="/kategori">
        @csrf

        <label>Nama Kategori</label><br>
        <input type="text" name="nama_kategori" required>
        <br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="/kategori">← Kembali</a>

</body>

</html>