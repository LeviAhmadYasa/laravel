<!DOCTYPE html>
<html>

<head>
    <title>Kategori</title>
</head>

<body>

    <h2>Data Kategori</h2>

    <a href="/kategori/create">+ Tambah Kategori</a>
    <br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>

        @foreach($data as $d)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $d->nama_kategori }}</td>
            <td>
                <a href="/kategori/{{ $d->id }}/edit">Edit</a>

                <form action="/kategori/{{ $d->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin hapus?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

    <br>
    <a href="/dashboard">← Kembali ke Dashboard</a>

</body>

</html>