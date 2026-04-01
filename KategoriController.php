<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $data = Kategori::all();
        return view('kategori.index', compact('data'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function store(Request $request)
    {
        Kategori::create($request->all());
        return redirect('/kategori');
    }

    public function edit($id)
    {
        $data = Kategori::find($id);
        return view('kategori.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        Kategori::find($id)->update($request->all());
        return redirect('/kategori');
    }

    public function destroy($id)
    {
        Kategori::find($id)->delete();
        return back();
    }
}
