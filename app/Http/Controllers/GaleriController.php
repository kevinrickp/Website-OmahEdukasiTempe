<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
{
    $galeris = Galeri::all();
    return view('galeri', compact('galeris')); // Pass the $galeris variable to the view
}

    public function create()
    {
        return view('galeri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = $request->file('image')->store('galeri', 'public');

        Galeri::create([
            'title' => $request->title,
            'image_path' => $imagePath,
        ]);

        return redirect()->route('galeri.index')->with('success', 'Gambar berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('galeri.edit', compact('galeri'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $galeri = Galeri::findOrFail($id);
        $galeri->title = $request->title;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('galeri', 'public');
            $galeri->image_path = $imagePath;
        }

        $galeri->save();

        return redirect()->route('galeri.index')->with('success', 'Gambar berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        $galeri->delete();

        return redirect()->route('galeri.index')->with('success', 'Gambar berhasil dihapus.');
    }
}