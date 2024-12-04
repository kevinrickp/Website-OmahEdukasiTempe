@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="{{ asset('css/produk.css') }}">
<div class="produk-section">
    <h2>Produk Omah Edukasi Tempe</h2>
    @if($produks->count() > 0)
        <div class="produk-list">
            @foreach($produks as $produk)
                <div class="produk-item">
                    <img src="{{ asset($produk->gambar) }}" alt="{{ $produk->nama_produk }}" class="produk-gambar">
                    <h3>{{ $produk->nama_produk }}</h3>
                    <p>{{ $produk->deskripsi }}</p>
                    <span>Rp. {{ number_format($produk->harga,  0, ',', '.') }}</span>
                </div>
            @endforeach
        </div>
    @else
        <p>Belum ada produk tersedia.</p>
    @endif
</div>

<!-- Bagian Promosi -->
<div class="promosi-section">
    <h2>PESAN SEKARANG!</h2>
    <p>Hubungi kami untuk informasi lebih lanjut dan pemesanan!</p>
    <p>Alamat: Jl. Contoh Alamat No. 123, Kota Contoh</p>
    <p>No. WhatsApp: <a href="https://wa.me/628121664993" target="_blank">+62 812-1664-7933</a></p>
    <a href="https://wa.me/628121664993" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" class="whatsapp-logo">
    </a>
</div>
@endsection