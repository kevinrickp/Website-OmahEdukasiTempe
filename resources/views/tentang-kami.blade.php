@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/tentangkami.css') }}">
@endsection

@section('content')
<div class="tentang-kami-section">
    <h2>Tentang Omah Edukasi Tempe</h2>
    <div class="tentang-kami-content">
        <img src="{{ asset('image/tentangkami.jpg') }}" alt="Omah Edukasi Tempe" class="tentang-kami-gambar">
        <p>Desa Parerejo, Kecamatan Purwodadi, Kabupaten Pasuruan, telah lama dikenal sebagai sentra penghasil tempe tradisional. Berbekal tradisi yang diwariskan secara turun-temurun, pengrajin tempe di desa ini mampu memproduksi tempe berkualitas untuk memenuhi kebutuhan pasar lokal.</p>
        <p>Namun, seiring dengan perkembangan zaman dan meningkatnya kebutuhan pasar, salah satu pengrajin di Desa Parerejo bernama Mukhamad Irfan berinovasi menciptakan tempe premium dengan merek "Zico".</p>
        <p>Melalui inovasi ini, Omah Edukasi Tempe hadir sebagai pusat pengembangan tempe modern yang berkomitmen untuk memperkenalkan nilai tradisi, teknologi modern, serta keberlanjutan kepada masyarakat luas.</p>
        <p>Tidak hanya fokus pada produksi tempe, Omah Edukasi Tempe juga menjadi tempat edukasi bagi masyarakat, wisatawan, serta calon pengusaha yang ingin belajar tentang pembuatan tempe berkualitas tinggi.</p>
        <p>Omah Edukasi Tempe adalah bukti nyata bahwa tradisi dan inovasi dapat berjalan beriringan. Dengan semangat untuk melestarikan budaya dan menciptakan produk unggulan, Omah Edukasi Tempe terus bergerak maju untuk memperkenalkan kelezatan dan potensi tempe ke dunia.</p>
    </div>
</div>
@endsection