@extends('layouts.master')



@section('css')
<link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
@endsection

@section('content')
<div class="beranda-section">
    <h2>Selamat Datang di Omah Edukasi Tempe</h2>
    <p class="beranda-intro">
        Kami adalah pusat edukasi dan pengembangan produk tempe terkemuka. Misi kami adalah mengembangkan potensi tempe sebagai sumber protein berkualitas tinggi dengan inovasi dan pengetahuan.
    </p>

    <!-- Slideshow Gambar -->
    <div class="slideshow-container">
        <!-- Kisi gambar sebelumnya -->
        <img src="{{ asset('images/beranda3.jpg') }}" class="preview left" alt="Gambar Sebelumnya">

        <!-- Wrapper gambar utama -->
        <div class="slides-wrapper">
            <div class="slide">
                <img src="{{ asset('images/beranda1.jpg') }}" class="slideshow-image" alt="Gambar 1">
            </div>
            <div class="slide">
                <img src="{{ asset('images/beranda2.jpg') }}" class="slideshow-image" alt="Gambar 2">
            </div>
            <div class="slide">
                <img src="{{ asset('images/beranda3.jpg') }}" class="slideshow-image" alt="Gambar 3">
            </div>
        </div>

        <!-- Kisi gambar berikutnya -->
        <img src="{{ asset('images/beranda2.jpg') }}" class="preview right" alt="Gambar Berikutnya">

        <!-- Tombol navigasi -->
        <span class="prev" onclick="moveSlides(-1)">&#10094;</span>
        <span class="next" onclick="moveSlides(1)">&#10095;</span>
    </div>

    <div class="produk-andalan-section">
    <h3>Produk Andalan Omah Edukasi Tempe</h3>
    <div class="produk-andalan-grid">
        <div class="produk-item">
            <img src="images\tempezico.jpg" alt="Tempe Premium Zico">
            <h4>Tempe Premium Zico</h4>
        </div>
        <div class="produk-item">
            <img src="images\tempemendoan.jpg" alt="Tempe Mendoan">
            <h4>Tempe Mendoan</h4>
        </div>
        <div class="produk-item">
            <img src="images\keripiktempe.jpg" alt="Keripik Tempe Zico">
            <h4>Keripik Tempe Zico</h4>
        </div>
        <div class="produk-item">
            <img src="images\penyedaptempe.jpg" alt="Penyedap Rasa Nabati Tempe Semangit">
            <h4>Penyedap Rasa Nabati Tempe Semangit</h4>
        </div>
        <div class="produk-item">
            <img src="images\tempebacem.jpg" alt="Tempe Bacem Zico">
            <h4>Tempe Bacem Zico</h4>
        </div>
    </div>


    <!-- Testimoni -->
<section id="testimoni">
    <h2>Testimoni</h2>
    <div class="testimoni-container">
        <div class="testimoni-item">
            <p>"Tempenya Enak dan Gurih"</p>
            <h4>Bu Lulis Irsyad Yusuf</h4>
            <h5>Mantan Bupati Pasuruan</h5>
        </div>
        <div class="testimoni-item">
            <p>"Setiap ada kegiatan sekolah, tempe mendoan Zico selalu menjadi goodie bag"</p>
            <h4>Bu Muna</h4>
            <h5>Kepala TK Mambaul Khoir, Purwodadi</h5>
        </div>
        <div class="testimoni-item">
            <p>"Suka dengan produk Omah Edukasi Tempe, terutama penyedap rasa tempe semangit untuk alergi udang dan vegetarian"</p>
            <h4>Bu Mita Devi</h4>
            <h5>Kepala Puskesmas Kecamatan Purwodadi</h5>
        </div>
        <div class="testimoni-item">
            <p>"Keripik tempenya beneran enaaaak! Anakku sekali makan langsung habis"</p>
            <h4>Umi Azka</h4>
            <h5>Ibu rumah tangga asal Surabaya</h5>
        </div>
        <div class="testimoni-item">
            <p>"Keripik tempenya rasanya original dan rempahnya terasa banget. Kalau berkunjung ke Indonesia, pasti mampir ke Omah Edukasi Tempe untuk borong keripik tempe"</p>
            <h4>Mama Jessie</h4>
            <h5>Ibu rumah tangga yang tinggal di Rotterdam, Belanda</h5>
        </div>
        <div class="testimoni-item">
            <p>"Aku suka tempe bacem Zico. Mau makan terus, tempenya enak manis"</p>
            <h4>Agha</h4>
            <h5>Siswa SD Tapas Arrohman, Sidoarjo</h5>
        </div>
    </div>
</section>

    <!-- Highlights -->
    <div class="beranda-highlights">
        <div class="highlight-box">
            <h3>Edukasi</h3>
            <p>Program edukasi seputar tempe dan nutrisi untuk meningkatkan pengetahuan masyarakat.</p>
        </div>
        <div class="highlight-box">
            <h3>Produk</h3>
            <p>Produk tempe inovatif berkualitas, diproses secara tradisional dan modern.</p>
        </div>
        <div class="highlight-box">
            <h3>Galeri</h3>
            <p>Dokumentasi visual kegiatan, termasuk proses pengolahan tempe.</p>
        </div>
    </div>



    <!-- Fasilitas -->
    <div class="fasilitas-section">
        <h3>Fasilitas di Omah Edukasi Tempe</h3>
        <div class="fasilitas-box">
            <h4>Ruang Produksi Modern</h4>
            <p>Alat modern memastikan kualitas tempe premium tetap terjaga secara higienis.</p>
        </div>
        <div class="fasilitas-box">
            <h4>Zona Edukasi Tradisional</h4>
            <p>Memperkenalkan proses pembuatan tempe tradisional dengan alat konvensional.</p>
        </div>
        <div class="fasilitas-box">
            <h4>Galeri Produk Tempe</h4>
            <p>Menampilkan varian tempe inovatif seperti keripik tempe dan tempe mendoan.</p>
        </div>
        <div class="fasilitas-box">
            <h4>Kelas Pelatihan dan Workshop</h4>
            <p>Peserta belajar membuat tempe dari awal hingga pemasaran produk.</p>
        </div>
    </div>

    <!-- Keunggulan -->
    <div class="keunggulan-section">
        <h3>Keunggulan di Omah Edukasi Tempe</h3>
        <div class="keunggulan-box">
            <h4>Menggabungkan Tradisi dan Teknologi</h4>
            <p>Proses modern tanpa meninggalkan nilai tradisional pembuatan tempe.</p>
        </div>
        <div class="keunggulan-box">
            <h4>Fokus pada Keberlanjutan</h4>
            <p>Bahan baku lokal dan proses ramah lingkungan mendukung pelestarian alam.</p>
        </div>
        <div class="keunggulan-box">
            <h4>Produk Premium</h4>
            <p>Tempe Ziko diterima pasar sebagai produk berkualitas tinggi.</p>
        </div>
        <div class="keunggulan-box">
            <h4>Pusat Inovasi dan Edukasi</h4>
            <p>Meningkatkan daya tarik wisata dan mengenalkan bisnis tempe.</p>
        </div>
    </div>

    <!-- Gambar Proses Tempe -->
    <div class="gambar-section">
        <h3>Gambar Proses Pengolahan Tempe</h3>
        <div class="gambar-container">
            <img src="{{ asset('images/tempe1.jpg') }}" alt="Proses Pembuatan Tempe" class="gambar-tempe">
            <img src="{{ asset('images/tempe2.jpg') }}" alt="Tempe Siap Saji" class="gambar-tempe">
            <img src="{{ asset('images/tempe3.jpg') }}" alt="Kegiatan Edukasi Tempe" class="gambar-tempe">
        </div>
    </div>

    <!-- Peta Lokasi -->
    <div class="map-container">
        <h3>Lokasi Kami</h3>
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126491.79238763406!2d112.58047514335935!3d-7.803742000000011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d36a230393d5%3A0x81c4f3b11311dfe1!2sOmah%20Edukasi%20Tempe%20Parerejo!5e0!3m2!1sid!2sid!4v1733273421682!5m2!1sid!2sid" 
            width="100%" height="300" 
            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('js/beranda.js') }}"></script>
@endsection