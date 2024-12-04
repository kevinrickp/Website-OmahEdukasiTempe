<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id(); // Kolom ID
            $table->string('title'); // Kolom untuk judul
            $table->text('content'); // Kolom untuk konten
            $table->string('thumbnail')->nullable(); // Kolom untuk thumbnail (gambar)
            $table->integer('views')->default(0); // Kolom untuk jumlah tampilan
            $table->timestamps(); // Kolom untuk created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('blogs'); // Menghapus tabel jika migrasi dibatalkan
    }
}