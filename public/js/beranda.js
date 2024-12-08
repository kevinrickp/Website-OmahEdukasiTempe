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

// Script untuk mengatur testimoni
let currentTestimonialIndex = 0;
let testimonialTimer;

function moveTestimonials(step) {
    const testimonialsWrapper = document.querySelector('.testimoni-container');
    const testimonials = document.querySelectorAll('.testimoni-item');
    const totalTestimonials = testimonials.length;

    // Hitung indeks testimoni baru
    currentTestimonialIndex = (currentTestimonialIndex + step + totalTestimonials) % totalTestimonials;

    // Geser wrapper ke testimoni yang sesuai
    testimonialsWrapper.style.transform = `translateX(-${currentTestimonialIndex * 100}%)`;
}

function autoSlideTestimonials() {
    moveTestimonials(1); // Pindah ke testimoni berikutnya
}

function startAutoSlideTestimonials() {
    testimonialTimer = setInterval(autoSlideTestimonials, 3000); // 3 detik
}

function stopAutoSlideTestimonials() {
    clearInterval(testimonialTimer); // Hentikan pergerakan otomatis
}

// Inisialisasi testimoni pertama dan autoplay
document.addEventListener('DOMContentLoaded', () => {
    moveTestimonials(0);
    startAutoSlideTestimonials();

    // Tambahkan event listener untuk menghentikan slide otomatis saat tombol ditekan
    const testimonialNavigationButtons = document.querySelectorAll('.prev, .next'); // Ganti dengan selector yang sesuai jika ada
    testimonialNavigationButtons.forEach(button => {
        button.addEventListener('click', stopAutoSlideTestimonials);
    });

    // Mulai kembali autoplay setelah beberapa detik jika slideshow dihentikan manual
    testimonialNavigationButtons.forEach(button => {
        button.addEventListener('click', () => {
            setTimeout(startAutoSlideTestimonials, 5000); // Mulai lagi setelah 5 detik
        });
    });
});


