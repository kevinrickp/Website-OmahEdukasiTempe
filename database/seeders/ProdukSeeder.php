<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        $produks = [
            [
                'nama_produk' => 'Tempe Premium Zico',
                'deskripsi' => 'Dibuat dengan teknologi modern, higienis, dan berkualitas tinggi untuk memenuhi kebutuhan restoran, rumah makan dan masyarakat umum.',
                'harga' => 20000,
                'gambar' => 'image/tempezico.jpg', // Pastikan file ini ada di public/image
            ],
            [
                'nama_produk' => 'Tempe Mendoan',
                'deskripsi' => 'Tempe setengah matang yang dirancang khusus untuk hidangan mendoan di berbagai restoran dan kafe.',
                'harga' => 15000,
                'gambar' => 'image/tempemendoan.jpg', // Ganti dengan path gambar yang sesuai
            ],
            [
                'nama_produk' => 'Keripik Tempe Zico',
                'deskripsi' => 'Cemilan renyah berbasis tempe yang cocok untuk segala usia.',
                'harga' => 10000,
                'gambar' => 'image/keripiktempe.jpg', // Ganti dengan path gambar yang sesuai
            ],
            [
                'nama_produk' => 'Penyedap Rasa Nabati Tempe Semangit',
                'deskripsi' => 'Produk inovatif yang menggabungkan rasa khas tempe semangit dengan bumbu rempah untuk melengkapi berbagai hidangan. Sangat bagus untuk masyarakat yang alergi udang dan vegetarian.',
                'harga' => 25000,
                'gambar' => 'image/penyedaptempe.jpg', // Ganti dengan path gambar yang sesuai
            ],
            [
                'nama_produk' => 'Tempe Bacem Zico',
                'deskripsi' => 'Olahan makanan khas Indonesia yang menggunakan tempe premium, bumbu rempah dan gula merah yang dimasak hingga meresap ke semua bagian tempe dan menghasilkan olahan makanan manis dan gurih.',
                'harga' => 22000,
                'gambar' => 'image/tempebacem.jpg', // Ganti dengan path gambar yang sesuai
            ],
        ];

        foreach ($produks as $produk) {
            Produk::create($produk);
        }
    }
}