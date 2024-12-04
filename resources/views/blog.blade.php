@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/blog.css') }}">
@endsection

@section('content')
<div class="blog-container">
    <div class="blog-main"> <!-- Konten utama blog -->
        <h2 class="blog-title">Blog Omah Edukasi Tempe</h2>
        <div class="blog-meta">
            <span>Diposting pada: {{ date('d F Y') }}</span> |
            <span>Oleh: Admin</span>
        </div>

        <!-- Daftar postingan blog -->
        @foreach ($posts as $post) <!-- Loop untuk menampilkan setiap postingan -->
        <div class="blog-post">
            <img src="{{ asset('images/'.$post->thumbnail) }}" alt="{{ $post->title }}"> <!-- <!-- Thumbnail gambar untuk postingan -->
            <h3>{{ $post->title }}</h3> <!-- Judul postingan -->
            <p>{{ Str::limit($post->content, 100) }}</p> <!-- Ringkasan isi postingan -->
            <a href="{{ route('blog.show', $post->id) }}" class="read-more">Berita Selengkapnya</a> <!-- Tautan ke berita selengkapnya -->
        </div>
        @endforeach

        <!-- Navigasi halaman -->
        <div class="pagination">
            {{ $posts->links() }} <!-- Link untuk navigasi halaman -->
        </div>
    </div>

    <div class="blog-sidebar"> <!-- Sidebar untuk berita populer dan arsip -->
        <div class="popular-news">
            <h3>Berita Populer</h3>
            <ul>
                @foreach ($popularPosts as $popularPost) <!-- Loop untuk menampilkan berita populer -->
                <li><a href="{{ route('blog.show', $popularPost->id) }}">{{ $popularPost->title }}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="archive-news">
            <h3>Arsip Berita</h3>
            <ul>
                @foreach ($archiveYears as $year) <!-- Loop untuk menampilkan arsip tahun -->
                <li><a href="{{ route('blog.archive', $year) }}">{{ $year }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection