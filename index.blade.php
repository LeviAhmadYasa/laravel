<a href="/alat/create">Tambah Alat</a>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kategori</th>
        <th>Stok</th>
        <th>deskripsi</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>

    @foreach($data as $d)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $d->nama_alat }}</td>
        <td>{{ $d->kategori->nama_kategori }}</td>
        <td>{{ $d->stok }}</td>
        <td>{{ $d->deskripsi }}</td>
        <td>{{ $d->status }}</td>
        <td>
            <a href="/alat/{{ $d->id }}/edit">Edit</a>
            <form action="/alat/{{ $d->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<br>
<a href="/dashboard">← Kembali ke Dashboard</a>