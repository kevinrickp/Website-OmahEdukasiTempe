<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\EdukasiController;
use App\Http\Controllers\Admin\GaleriAdminController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\BlogController;

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
  
    Route::get('/blog', [AdminDashboardController::class, 'blogIndex'])->name('admin.blog.index');
    Route::get('/blog/create', [AdminDashboardController::class, 'blogCreate'])->name('admin.blog.create');
    Route::post('/blog', [AdminDashboardController::class, 'blogStore'])->name('admin.blog.store');
    Route::get('/blog/{id}/edit', [AdminDashboardController::class, 'blogEdit'])->name('admin.blog.edit');
    Route::put('/blog/{id}', [AdminDashboardController::class, 'blogUpdate'])->name('admin.blog.update');
    Route::delete('/blog/{id}', [AdminDashboardController::class, 'blogDestroy'])->name('admin.blog.destroy');

    Route::get('/produk', [AdminDashboardController::class, 'produkIndex'])->name('admin.produk.index');
    Route::get('/produk/create', [AdminDashboardController::class, 'produkCreate'])->name('admin.produk.create');
    Route::post('/produk', [AdminDashboardController::class, 'produkStore'])->name('admin.produk.store');
    Route::get('/produk/{id}/edit', [AdminDashboardController::class, 'produkEdit'])->name('admin.produk.edit');
    Route::put('/produk/{id}', [AdminDashboardController::class, 'produkUpdate'])->name('admin.produk.update');
    Route::delete('/produk/{id}', [AdminDashboardController::class, 'produkDestroy'])->name('admin.produk.destroy');
});


Route::get('admin/login', [LoginController::class, 'showLoginForm'])->name('login'); // <-- Rute ini ditambahkan
Route::post('admin/login', [LoginController::class, 'login']); // <-- Rute ini ditambahkan

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::post('logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('blogs', AdminBlogController::class);
    Route::resource('galeri', GaleriAdminController::class);
});


Route::get('/', [BerandaController::class, 'index']);
Route::resource('beranda', BerandaController::class);
Route::resource('tentang-kami', TentangKamiController::class);
Route::resource('produk', ProdukController::class);
Route::resource('edukasi', EdukasiController::class);
Route::resource('galeri', GaleriController::class);
Route::resource('blog', BlogController::class);



Route::get('/blog/archive', [BlogController::class, 'archive'])->name('blog.archive');
