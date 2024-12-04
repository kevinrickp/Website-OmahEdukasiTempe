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
        <div class="container">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo Omah Edukasi Tempe" class="logo-img">
            </div>
            <h1 class="site-title">Omah Edukasi Tempe</h1>
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}">Beranda</a></li>
 <li><a href="{{ url('tentang-kami') }}">Tentang Kami</a></li>
                    <li><a href="{{ url('produk') }}">Produk</a></li>
                    <li><a href="{{ url('edukasi') }}">Edukasi</a></li>
                    <li><a href="{{ url('galeri') }}">Galeri</a></li>
                    <li><a href="{{ url('blog') }}">Blog</a></li>
                </ul>
            </nav>
            <div class="social-icons">
                <a href="https://www.facebook.com/profile.php?id=100088405001249&mibextid=ZbWKwL" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook Logo">
                </a>
                <a href="https://www.instagram.com/p/ClrNK5CPCGM/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram Logo">
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
        <div class="container">
            <p>&copy; 2024 Omah Edukasi Tempe. All Rights Reserved.</p>
            <div class="contact">
                <a href="https://wa.me/1234567890" target="_blank" class="contact-link">WhatsApp</a>
                <a href="https://facebook.com/omahedukasi" target="_blank" class="contact-link">Facebook</a>
                <p class="address">Alamat: Jl. Contoh No. 123, Tempe City</p>
            </div>
            <div class="social-links">
                <a href="https://www.facebook.com/profile.php?id=100088405001249&mibextid=ZbWKwL" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook Logo" style="width: 30px; height: auto;">
                </a>
                <a href="https://www.instagram.com/p/ClrNK5CPCGM/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" target="_blank">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram Logo" style="width: 30px; height: auto;">
                </a>
            </div>
        </div>
    </footer>
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('js')
</body>
</html>