<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.dashboard');
});

Route::get('/about', [ProfileController::class, 'about'])->name('about');

Route::get('/kategori-works', [KategoriController::class, 'works'])->name('kategori.works');
Route::get('/kategori-blog', [KategoriController::class, 'blog'])->name('kategori.blog');

Route::get('/biodata', [BiodataController::class, 'index'])->name('biodata');
Route::post('/biodata-update/{id}', [BiodataController::class, 'update'])->name('biodata.update');
Route::put('/biodata/{id}/foto', [BiodataController::class, 'updateFoto'])->name('biodata.updateFoto');
Route::get('/deskripsi-edit', [ProfileController::class, 'deskirpsiedit'])->name('deskripsi.edit');
Route::get('/education', [ProfileController::class, 'education'])->name('education');
Route::get('/experience', [ProfileController::class, 'experience'])->name('experience');
Route::get('/knowledge', [ProfileController::class, 'knowledge'])->name('knowledge');
Route::get('/skill', [ProfileController::class, 'skill'])->name('skill');

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/blog-create', [App\Http\Controllers\BlogController::class, 'create'])->name('blog.create');

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
