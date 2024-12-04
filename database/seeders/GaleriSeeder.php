<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Galeri;

class GaleriSeeder extends Seeder
{
    public function run()
    {
        Galeri::create([
            'title' => 'Contoh Gambar 1',
            'image_path' => 'galeri/contoh1.jpg',
        ]);

        Galeri::create([
            'title' => 'Contoh Gambar 2',
            'image_path' => 'galeri/contoh2.jpg',
        ]);

        // Tambahkan lebih banyak gambar sesuai kebutuhan
    }
}