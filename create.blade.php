<form method="POST" action="/alat">
    @csrf

    <input type="text" name="nama_alat" placeholder="Nama Alat"><br><br>

    <select name="id_kategori" required>
        <option value="">-- Pilih Kategori --</option>
        @foreach($kategori as $k)
        <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
        @endforeach
    </select><br><br>

    <input type="number" name="stok" placeholder="Stok"><br><br>
    <textarea name="deskripsi" placeholder="deskripsi"></textarea><br><br>


    <select name="kondisi">
        <option value="baik">Baik</option>
        <option value="rusak">Rusak</option>
    </select>

    <button type="submit">Simpan</button>

</form>