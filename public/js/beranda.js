let currentIndex = 0;
    let timer;

    function moveSlides(step) {
        const slidesWrapper = document.querySelector('.slides-wrapper');
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;

        // Hitung indeks slide baru
        currentIndex = (currentIndex + step + totalSlides) % totalSlides;

        // Geser wrapper ke slide yang sesuai
        slidesWrapper.style.transform = `translateX(-${currentIndex * 100}%)`;

        // Update gambar kisi
        const prevIndex = (currentIndex - 1 + totalSlides) % totalSlides;
        const nextIndex = (currentIndex + 1) % totalSlides;

        document.querySelector('.preview.left').src = slides[prevIndex].querySelector('img').src;
        document.querySelector('.preview.right').src = slides[nextIndex].querySelector('img').src;
    }

    function autoSlide() {
        moveSlides(1); // Pindah ke slide berikutnya
    }

    function startAutoSlide() {
        timer = setInterval(autoSlide, 2000); // 2 detik
    }

    function stopAutoSlide() {
        clearInterval(timer); // Hentikan pergerakan otomatis
    }

    // Inisialisasi kisi gambar pertama dan autoplay
    document.addEventListener('DOMContentLoaded', () => {
        moveSlides(0);
        startAutoSlide();

        // Tambahkan event listener untuk menghentikan slide otomatis saat tombol ditekan
        const navigationButtons = document.querySelectorAll('.prev, .next');
        navigationButtons.forEach(button => {
            button.addEventListener('click', stopAutoSlide);
        });

        // Mulai kembali autoplay setelah beberapa detik jika slideshow dihentikan manual
        navigationButtons.forEach(button => {
            button.addEventListener('click', () => {
                setTimeout(startAutoSlide, 5000); // Mulai lagi setelah 5 detik
            });
        });
    });