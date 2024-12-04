<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        return view('beranda');
    }

    public function create()
    {
        return view('beranda.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required'
        ]);

        // Logika penyimpanan data
        return redirect()->route('beranda.index')->with('success', 'Data berhasil disimpan');
    }

    public function show($id)
    {
        // Logika menampilkan detail
        return view('beranda.show');
    }

    public function edit($id)
    {
        // Logika menampilkan form edit
        return view('beranda.edit');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required'
        ]);

        // Logika update data
        return redirect()->route('beranda.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        // Logika menghapus data
        return redirect()->route('beranda.index')->with('success', 'Data berhasil dihapus');
    }
}