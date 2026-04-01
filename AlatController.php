<?php

namespace App\Http\Controllers;

use App\Models\Alat;
use App\Models\Kategori;
use Illuminate\Http\Request;

class AlatController extends Controller
{
    public function index()
    {
        $data = Alat::with('kategori')->latest()->get();
        return view('alat.index', compact('data'));
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('alat.create', compact('kategori'));
    }

    public function store(Request $request)
    {
        // ✅ VALIDASI
        $request->validate([
            'nama_alat' => 'required',
            'id_kategori' => 'required',
            'stok' => 'required|integer|min:0',
            'deskripsi' => 'required',
            'kondisi' => 'required|in:baik,rusak',
        ]);

        $status = $request->stok > 0 ? 'tersedia' : 'dipinjam';

        Alat::create([
            'nama_alat' => $request->nama_alat,
            'id_kategori' => $request->id_kategori,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            'kondisi' => $request->kondisi,
            'status' => $status
        ]);

        return redirect('/alat')->with('success', 'Data berhasil ditambah');
    }

    public function edit($id)
    {
        $data = Alat::findOrFail($id);
        $kategori = Kategori::all();

        return view('alat.edit', compact('data', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_alat' => 'required',
            'id_kategori' => 'required',
            'stok' => 'required|integer|min:0',
            'deskripsi' => 'required',
            'kondisi' => 'required|in:baik,rusak',
        ]);

        $status = $request->stok > 0 ? 'tersedia' : 'dipinjam';

        $alat = Alat::findOrFail($id);

        $alat->update([
            'nama_alat' => $request->nama_alat,
            'id_kategori' => $request->id_kategori,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            'kondisi' => $request->kondisi,
            'status' => $status
        ]);

        return redirect('/alat')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $alat = Alat::findOrFail($id);
        $alat->delete();

        return back()->with('success', 'Data berhasil dihapus');
    }
}
