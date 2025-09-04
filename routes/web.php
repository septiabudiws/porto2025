<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.dashboard');
});

//biodata
Route::get('/biodata', [BiodataController::class, 'index'])->name('biodata');
Route::post('/biodata-update/{id}', [BiodataController::class, 'update'])->name('biodata.update');
Route::put('/biodata/{id}/foto', [BiodataController::class, 'updateFoto'])->name('biodata.updateFoto');

//about page
Route::get('/about', [ProfileController::class, 'about'])->name('about');
Route::get('/about-edit/{id}', [ProfileController::class, 'aboutEdit'])->name('about.edit');
Route::put('/about-update/{id}', [ProfileController::class, 'aboutUpdate'])->name('about.update');
Route::post('/ability-store', [ProfileController::class, 'abilityStore'])->name('ability.store');
Route::put('/ability-update/{id}', [ProfileController::class, 'abilityUpdate'])->name('ability.update');
Route::delete('/ability-delete/{id}', [ProfileController::class, 'abilityDestroy'])->name('ability.destroy');

//resume page
Route::get('/education', [ProfileController::class, 'education'])->name('education');
Route::post('/education-store', [ProfileController::class, 'educationStore'])->name('education.store');
Route::put('/education-update/{id}', [ProfileController::class, 'educationUpdate'])->name('education.update');
Route::delete('/education-delete/{id}', [ProfileController::class, 'educationDestroy'])->name('education.destroy');

//experience page
Route::get('/experience', [ProfileController::class, 'experience'])->name('experience');
Route::post('/experience-store', [ProfileController::class, 'experienceStore'])->name('experience.store');
Route::put('/experience-update/{id}', [ProfileController::class, 'experienceUpdate'])->name('experience.update');
Route::delete('/experience-delete/{id}', [ProfileController::class, 'experienceDestroy'])->name('experience.destroy');

//knowledge page
Route::get('/knowledge', [ProfileController::class, 'knowledge'])->name('knowledge');
Route::post('/knowledge-store', [ProfileController::class, 'knowledgeStore'])->name('knowledge.store');
Route::put('/knowledge-update/{id}', [ProfileController::class, 'knowledgeUpdate'])->name('knowledge.update');
Route::delete('/knowledge-delete/{id}', [ProfileController::class, 'knowledgeDestroy'])->name('knowledge.destroy');

Route::get('/skill', [ProfileController::class, 'skill'])->name('skill');

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/blog-create', [App\Http\Controllers\BlogController::class, 'create'])->name('blog.create');

Route::get('/kategori-works', [KategoriController::class, 'works'])->name('kategori.works');
Route::get('/kategori-blog', [KategoriController::class, 'blog'])->name('kategori.blog');

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
