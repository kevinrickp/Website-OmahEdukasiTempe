@extends('layouts.master')

@section('content')
<div class="container">
    <h2>{{ $produk->nama_produk }}</h2>
    <img src="{{ asset('storage/' . $produk->gambar) }}" alt="{{ $produk->nama_produk }}" class="img-fluid">
    <p><strong>Deskripsi:</strong> {{ $produk->deskripsi }}</p>
    <p><strong>Harga:</strong> Rp. {{ number_format($produk->harga, 0, ',', '.') }}</p>
    <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
    <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali ke Daftar Produk</a>
</div>
@endsection