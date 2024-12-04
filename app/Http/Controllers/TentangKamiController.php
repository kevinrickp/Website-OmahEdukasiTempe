<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    public function index()
    {
        return view('tentang-kami');
    }

    public function create()
    {
        return view('tentang-kami.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'deskripsi' => 'required'
        ]);

        return redirect()->route('tentang-kami.index')->with('success', 'Data berhasil disimpan');
    }

    public function show($id)
    {
        return view('tentang-kami.show');
    }

    public function edit($id)
    {
        return view('tentang-kami.edit');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'deskripsi' => 'required'
        ]);

        return redirect()->route('tentang-kami.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        return redirect()->route('tentang-kami.index')->with('success', 'Data berhasil dihapus');
    }
}