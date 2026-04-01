<!DOCTYPE html>
<html>

<head>
    <title>Edit Kategori</title>
</head>

<body>

    <h2>Edit Kategori</h2>

    <form method="POST" action="/kategori/{{ $data->id }}">
        @csrf
        @method('PUT')

        <label>Nama Kategori</label><br>
        <input type="text" name="nama_kategori" value="{{ $data->nama_kategori }}" required>
        <br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="/kategori">← Kembali</a>

</body>

</html>