<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.dashboard');
});

Route::get('/kategori-works', [KategoriController::class, 'works'])->name('kategori.works');
Route::get('/kategori-blog', [KategoriController::class, 'blog'])->name('kategori.blog');

Route::get('/biodata', [BiodataController::class, 'index'])->name('biodata');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/resume', function () {
    return view('landing.resume.resume');
});

Route::get('/works', function () {
    return view('landing.works.works');
});

Route::get('/detail-works', function () {
    return view('landing.works.detail-works');
});

Route::get('/blogs', function () {
    return view('landing.blogs.blogs');
});

Route::get('/detail-blogs', function () {
    return view('landing.blogs.detail-blogs');
});

Route::get('/contact', function () {
    return view('landing.contact.contact');
});
