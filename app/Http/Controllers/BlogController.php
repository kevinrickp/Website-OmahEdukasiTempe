<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Blog::paginate(5); // Mengambil 5 postingan per halaman
        $popularPosts = Blog::orderBy('views', 'desc')->take(5)->get(); // Mengambil 5 postingan populer
        $archiveYears = Blog::selectRaw('YEAR(created_at) as year')->distinct()->orderBy('year', 'desc')->pluck('year'); // Mengambil tahun arsip

        return view('blog', compact('posts', 'popularPosts', 'archiveYears'));
    }

    public function show($id)
    {
        $post = Blog::findOrFail($id); // Mengambil postingan berdasarkan ID
        return view('blog.show', compact('post'));
    }

    public function archive($year)
    {
        $posts = Blog::whereYear('created_at', $year)->paginate(5); // Mengambil postingan berdasarkan tahun
        return view('blog.archive', compact('posts', 'year'));
    }
}