<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Edukasi;
use App\Models\Galeri;
use App\Models\Produk;
use Illuminate\Support\Facades\Storage;

class AdminDashboardController extends Controller
{
   
    // Dashboard utama
    public function index()
    {
        $totalBlogs = Blog::count();
        $totalEdukasi = Edukasi::count();
        $totalGaleri = Galeri::count();
        $totalProduk = Produk::count();

        return view('admin.dashboard', compact(
            'totalBlogs', 
            'totalEdukasi', 
            'totalGaleri', 
            'totalProduk'
        ));
    }

    // Blog CRUD
    public function blogIndex()
    {
        $blogs = Blog::paginate(10);
        return view('admin.blog.index', compact('blogs'));
    }

    public function blogCreate()
    {
        return view('admin.blog.create');
    }

    public function blogStore(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'konten' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $blog = new Blog();
        $blog->judul = $request->judul;
        $blog->konten = $request->konten;

        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('blog', 'public');
            $blog->gambar = $imagePath;
        }

        $blog->save();

        return redirect()->route('admin.blog.index')->with('success', 'Blog berhasil ditambahkan');
    }

    public function blogEdit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }

    public function blogUpdate(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'konten' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $blog = Blog::findOrFail($id);
        $blog->judul = $request->judul;
        $blog->konten = $request->konten;

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($blog->gambar) {
                Storage::disk('public')->delete($blog->gambar);
            }

            $imagePath = $request->file('gambar')->store('blog', 'public');
            $blog->gambar = $imagePath;
        }

        $blog->save();

        return redirect()->route('admin.blog.index')->with('success', 'Blog berhasil diupdate');
    }

    public function blogDestroy($id)
    {
        $blog = Blog::findOrFail($id);
        
        // Hapus gambar jika ada
        if ($blog->gambar) {
            Storage::disk('public')->delete($blog->gambar);
        }

        $blog->delete();

        return redirect()->route('admin.blog.index')->with('success', 'Blog berhasil dihapus');
    }

    // Metode CRUD serupa untuk Edukasi, Galeri, Produk, dan Tentang Kami
    // Contoh untuk Produk
    public function produkIndex()
    {
        $produks = Produk::paginate(10);
        return view('admin.produk.index', compact('produks'));
    }

    public function produkCreate()
    {
        return view('admin.produk.create');
    }

    public function produkStore(Request $request)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required|max:255',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $produk = new Produk();
        $produk->nama_produk = $request->nama_produk;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;

        if ($request->hasFile('gambar')) {
            $imagePath = $request->file('gambar')->store('produk', 'public');
            $produk->gambar = $imagePath;
        }

        $produk->save();

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil ditambahkan');
    }

    public function produkEdit($id)
    {
        $produk = Produk::findOrFail($id);
        return view('admin.produk.edit', compact('produk'));
    }

    public function produkUpdate(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_produk' => 'required|max:255',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $produk = Produk::findOrFail($id);
        $produk->nama_produk = $request->nama_produk;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($produk->gambar) {
                Storage::disk('public')->delete($produk->gambar);
            }

            $imagePath = $request->file('gambar')->store('produk', 'public');
            $produk->gambar = $imagePath;
        }

        $produk->save();

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil diupdate');
    }

    public function produkDestroy($id)
    {
        $produk = Produk::findOrFail($id);
        
        // Hapus gambar jika ada
        if ($produk->gambar) {
            Storage::disk('public')->delete($produk->gambar);
        }

        $produk->delete();

        return redirect()->route('admin.produk.index')->with('success', 'Produk berhasil dihapus');
    }

    // Tambahkan metode serupa untuk Edukasi, Galeri, dan Tentang Kami
}