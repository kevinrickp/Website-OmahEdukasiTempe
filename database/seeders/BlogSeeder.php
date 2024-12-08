<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    public function run()
    {
        Blog::create([
            'title' => ' Judul Blog 1',
            'content' => 'Ini adalah isi konten blog yang sangat menarik dan informatif tentang tempe.',
            'thumbnail' => '-thumbnail1.jpg', // Ganti dengan nama file gambar yang Anda miliki
            'views' => 0,
            
            'title' => ' Judul Blog 2',
            'content' => 'Konten blog ini membahas tentang manfaat tempe untuk kesehatan.',
            'thumbnail' => '-thumbnail2.jpg',
            'views' => 10,
        ]);

        Blog::create([
            'title' => ' Judul Blog 3',
            'content' => 'Tempe sebagai bahan baku makanan yang murah dan bergizi.',
            'thumbnail' => '-thumbnail3.jpg',
            'views' => 5,
        ]);

        Blog::create([
            'title' => ' Judul Blog 4',
            'content' => 'Cara membuat tempe sendiri di rumah dengan mudah.',
            'thumbnail' => '-thumbnail4.jpg',
            'views' => 12,
        ]);

        Blog::create([
            'title' => ' Judul Blog 5',
            'content' => 'Sejarah panjang tempe di Indonesia dan manfaatnya.',
            'thumbnail' => '-thumbnail5.jpg',
            'views' => 8,
        ]);

        Blog::create([
            'title' => ' Judul Blog 6',
            'content' => 'Tempe dan perkembangan industri kuliner di Indonesia.',
            'thumbnail' => '-thumbnail6.jpg',
            'views' => 15,
        ]);

        Blog::create([
            'title' => ' Judul Blog 7',
            'content' => 'Berbagai jenis tempe dan cara pembuatannya.',
            'thumbnail' => '-thumbnail7.jpg',
            'views' => 20,
        ]);

        Blog::create([
            'title' => ' Judul Blog 8',
            'content' => 'Kenapa tempe bisa menjadi sumber protein yang lebih baik daripada daging.',
            'thumbnail' => '-thumbnail8.jpg',
            'views' => 25,
        ]);

        Blog::create([
            'title' => ' Judul Blog 9',
            'content' => 'Resep tempe goreng crispy yang bisa Anda coba di rumah.',
            'thumbnail' => '-thumbnail9.jpg',
            'views' => 30,
        ]);

        Blog::create([
            'title' => ' Judul Blog 10',
            'content' => 'Tempe sebagai pilihan makanan vegan yang sehat dan lezat.',
            'thumbnail' => '-thumbnail10.jpg',
            'views' => 50,
        ]);
    }
}
