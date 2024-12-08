<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Galeri;

class GaleriSeeder extends Seeder
{
    public function run()
    {
        Galeri::create([
            'title' => ' Gambar 1',
            'image_path' => 'galeri/1.jpg',
        ]);

        Galeri::create([
            'title' => ' Gambar 2',
            'image_path' => 'galeri/2.jpg',
        ]);

        // Menambahkan 10 gambar tambahan
        Galeri::create([
            'title' => ' Gambar 3',
            'image_path' => 'galeri/3.jpg',
        ]);

        Galeri::create([
            'title' => ' Gambar 4',
            'image_path' => 'galeri/4.jpg',
        ]);

        Galeri::create([
            'title' => ' Gambar 5',
            'image_path' => 'galeri/5.jpg',
        ]);

        Galeri::create([
            'title' => ' Gambar 6',
            'image_path' => 'galeri/6.jpg',
        ]);

        Galeri::create([
            'title' => ' Gambar 7',
            'image_path' => 'galeri/7.jpg',
        ]);

        Galeri::create([
            'title' => ' Gambar 8',
            'image_path' => 'galeri/8.jpg',
        ]);

        Galeri::create([
            'title' => ' Gambar 9',
            'image_path' => 'galeri/9.jpg',
        ]);

        Galeri::create([
            'title' => ' Gambar 10',
            'image_path' => 'galeri/10.jpg',
        ]);

        Galeri::create([
            'title' => ' Gambar 11',
            'image_path' => 'galeri/11.jpg',
        ]);

        Galeri::create([
            'title' => ' Gambar 12',
            'image_path' => 'galeri/12.jpg',
        ]);

        Galeri::create([
            'title' => ' Gambar 13',
            'image_path' => 'galeri/13.jpg',
        ]);

        Galeri::create([
            'title' => ' Gambar 14',
            'image_path' => 'galeri/14.jpg',
        ]);

        Galeri::create([
            'title' => ' Gambar 15',
            'image_path' => 'galeri/15.jpg',
        ]);
    }
}