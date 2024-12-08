<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    public function run()
    {
        Blog::create([
            'title' => 'Contoh Judul Blog',
            'content' => 'Ini adalah isi konten blog yang sangat menarik dan informatif tentang tempe.',
            'thumbnail' => 'contoh-thumbnail.jpg', // Ganti dengan nama file gambar yang Anda miliki
            'views' => 0,
        ]);

        // Tambahkan lebih banyak data contoh jika diperlukan
    }
}

jancok memek