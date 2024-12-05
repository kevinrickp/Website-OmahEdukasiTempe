<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Omah Edukasi Tempe</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('css')
</head>
<body>
    <header>
        <div class="container header-container">
            <div class="logo-container">
                <img src="{{ asset('images/logo.jpg') }}" alt="Logo Omah Edukasi Tempe" class="logo-img">
                <h1 class="site-title">Omah Edukasi Tempe</h1>
            </div>
            <nav class="modern-nav">
                <ul>
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li><a href="{{ url('tentang-kami') }}">Tentang Kami</a></li>
                    <li><a href="{{ url('produk') }}">Produk</a></li>
                    <li><a href="{{ url('edukasi') }}">Edukasi</a></li>
                    <li><a href="{{ url('galeri') }}">Galeri</a></li>
                    <li><a href="{{ url('blog') }}">Blog</a></li>
                </ul>
            </nav>
            <div class="contact-container">
                <a href="https://wa.me/1234567890" target="_blank" class="contact-link">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Logo" class="contact-icon">
                </a>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        <div class="container footer-container">
            <p>&copy; 2024 Omah Edukasi Tempe. All Rights Reserved.</p>
            <div class="address">
                <p>Alamat: Desa Parerejo, Kecamatan Purwodadi, Kabupaten Pasuruan, Jawa Timur
            </p>
            </div>
            <div class="social-links">
                <a href="https://www.facebook.com/profile.php?id=100088405001249&mibextid=ZbWKwL" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook Logo" class="social-icon">
                </a>
                <a href="https://www.instagram.com/p/ClrNK5CPCGM/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram Logo" class="social-icon">
                </a>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('js')
</body>
</html>
