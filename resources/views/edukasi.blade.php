@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/edukasi.css') }}">
@endsection

@section('content')
<div class="edukasi-section">
    <h2>Program Edukasi Tempe</h2>
    <div class="edukasi-list">
        <!-- Paket TK -->
        <div class="paket">
            <h3>Paket Edukasi Tempe untuk Siswa TK</h3>
            <p>Harga: <strong>Rp 5.000,- per siswa</strong></p>
            <ul>
                <li>Penjelasan sederhana tentang bahan dan proses pembuatan tempe.</li>
                <li>Demonstrasi cara membuat tempe.</li>
                <li>Setiap siswa mendapatkan tempe hasil edukasi untuk dibawa pulang.</li>
            </ul>
        </div>

        <!-- Paket SD, SMP, SMA, dan Universitas -->
        <div class="paket">
            <h3>Paket Edukasi Tempe untuk SD, SMP, SMA, dan Universitas</h3>
            <p>Harga: <strong>Rp 15.000,- per siswa/mahasiswa</strong></p>
            <ul>
                <li>Penjelasan proses fermentasi kedelai menjadi tempe.</li>
                <li>Workshop pembuatan tempe menggunakan peralatan modern.</li>
                <li>Setiap peserta mendapatkan tempe hasil edukasi untuk dibawa pulang.</li>
            </ul>
        </div>

        <!-- Paket Individu -->
        <div class="paket">
            <h3>Paket Individu (Minimal 10 Orang)</h3>
            <p>Harga: <strong>Rp 50.000,- per orang</strong></p>
            <ul>
                <li>Edukasi pembuatan tempe dari awal hingga akhir.</li>
                <li>Kunjungan ke beberapa pengrajin di Kampung Tempe.</li>
                <li>Bingkisan menarik berupa:
                    <ul>
                        <li>Tempe mendoan kemasan</li>
                        <li>Keripik tempe</li>
                        <li>Keripik menjes</li>
                        <li>Tempe bacem</li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
