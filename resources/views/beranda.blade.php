@extends('layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('css/beranda.css') }}">
@endsection

@section('content')
<div class="beranda-section">
    <h2>Selamat Datang di Omah Edukasi Tempe</h2>
    <div class="beranda-content">
        <div class="beranda-intro">
            <p>
                Kami adalah pusat edukasi dan pengembangan produk tempe terkemuka. 
                Misi kami adalah mengembangkan potensi tempe sebagai sumber protein berkualitas tinggi 
                dengan inovasi dan pengetahuan.
            </p>
        </div>

        <div class="beranda-highlights">
            <div class="highlight-box">
                <h3>Edukasi</h3>
                <p>
                    Berbagai program edukasi seputar tempe dan nutrisi, 
                    dirancang untuk meningkatkan pengetahuan masyarakat.
                </p>
            </div>

            <div class="highlight-box">
                <h3>Produk</h3>
                <p>
                    Ragam produk tempe inovatif dan berkualitas, diproses secara tradisional 
                    dan modern untuk memenuhi kebutuhan pasar.
                </p>
            </div>

            <div class="highlight-box">
                <h3>Galeri</h3>
                <p>
                    Dokumentasi visual dari kegiatan kami, 
                    termasuk proses pengolahan tempe dan aktivitas komunitas.
                </p>
            </div>
        </div>

        <!-- Fasilitas -->
        <div class="fasilitas-section">
            <h3>Fasilitas di Omah Edukasi Tempe</h3>
            <div class="fasilitas-box">
                <h4>Ruang Produksi Modern</h4>
                <p>Dilengkapi dengan alat-alat modern untuk memproduksi tempe premium secara higienis, tanpa sentuhan tangan langsung. Teknologi ini memastikan kualitas dan keamanan produk tetap terjaga.</p>
            </div>
            <div class="fasilitas-box">
                <h4>Zona Edukasi Tradisional</h4>
                <p>Memperlihatkan proses pembuatan tempe tradisional menggunakan peralatan konvensional. Zona ini dirancang untuk mengenalkan wisatawan pada metode yang telah digunakan selama puluhan tahun di Desa Parerejo.</p>
            </div>
            <div class="fasilitas-box">
                <h4>Galeri Produk Tempe</h4>
                <p>Menampilkan berbagai varian tempe, termasuk tempe premium dan tempe mendoan yang dibuat khusus untuk restoran dan rumah makan. Galeri ini juga menawarkan produk olahan tempe lainnya, seperti keripik tempe dan olahan makanan berbasis tempe.</p>
            </div>
            <div class="fasilitas-box">
                <h4>Kelas Pelatihan dan Workshop</h4>
                <p>Program ini dirancang untuk masyarakat umum, pelaku bisnis, dan pelajar. Peserta dapat belajar membuat tempe dari awal hingga akhir, termasuk teknik inovasi dan pemasaran produk.</p>
            </div>
        </div>

        <!-- Keunggulan -->
        <div class="keunggulan-section">
            <h3>Keunggulan di Omah Edukasi Tempe</h3>
            <div class="keunggulan-box">
                <h4>Menggabungkan Tradisi dan Teknologi</h4>
                <p>Proses produksi menggunakan alat modern memastikan kualitas terbaik tanpa mengabaikan nilai tradisional pembuatan tempe.</p>
            </div>
            <div class="keunggulan-box">
                <h4>Fokus pada Keberlanjutan</h4>
                <p>Menggunakan bahan baku lokal dan proses ramah lingkungan, Omah Edukasi Tempe mendukung pelestarian sumber daya alam.</p>
            </div>
            <div class="keunggulan-box">
                <h4>Produk Premium</h4>
                <p>Tempe Ziko telah diterima oleh pasar restoran, rumah makan, dan wisata kuliner sebagai produk berkualitas tinggi.</p>
            </div>
            <div class="keunggulan-box">
                <h4 >Pusat Inovasi dan Edukasi</h4>
                <p>Membuka peluang bagi generasi muda untuk mengenal potensi bisnis tempe sekaligus meningkatkan daya tarik wisata di Kabupaten Pasuruan.</p>
            </div>
        </div>

        <!-- Gambar-gambar tentang tempe -->
        <div class="gambar-section">
            <h3>Gambar Proses Pengolahan Tahu</h3>
            <div class="gambar-container">
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.antarafoto.com%2Fid%2Fview%2F338440%2Fproses-pembuatan-tempe&psig=AOvVaw3G_mNU5Pua9AYAcIgG54GF&ust=1733361679181000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCLiFz8v5jIoDFQAAAAAdAAAAABAE" alt="Proses Pembuatan Tempe" class="gambar-tempe">
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.orami.co.id%2Fmagazine%2Fcara-membuat-tempe&psig=AOvVaw3G_mNU5Pua9AYAcIgG54GF&ust=1733361679181000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCLiFz8v5jIoDFQAAAAAdAAAAABAJ" alt="Tempe Siap Saji" class="gambar-tempe">
                <img src="https://www.instagram.com/p/ClrNK5CPCGM/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" alt="Kegiatan Edukasi Tempe" class="gambar-tempe">
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan Peta di sini -->
<div class="map-container">
    <h3>Lokasi Kami</h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126491.79238763406!2d112.58047514335935!3d-7.803742000000011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7d36a230393d5%3A0x81c4f3b11311dfe1!2sOmah%20Edukasi%20Tempe%20Parerejo!5e0!3m2!1sid!2sid!4v1733273421682!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
@endsection

@section('js')
<script>
    console.log('Halaman beranda siap digunakan.');
</script>
@endsection