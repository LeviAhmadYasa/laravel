<form method="POST" action="/alat/{{ $data->id }}">
    @csrf
    @method('PUT')

    <input type="text" name="nama_alat" value="{{ $data->nama_alat }}"><br><br>

    <select name="id_kategori">
        @foreach($kategori as $k)
        <option value="{{ $k->id }}"
            {{ $data->id_kategori == $k->id ? 'selected' : '' }}>
            {{ $k->nama_kategori }}
        </option>
        @endforeach
    </select><br><br>

    <input type="number" name="stok" value="{{ $data->stok }}"><br><br>
    <textarea name="deskripsi" placeholder="deskripsi"></textarea><br><br>

    <select name="kondisi">
        <option value="baik">Baik</option>
        <option value="rusak">Rusak</option>
    </select>

    <button type="submit">Update</button>

</form>