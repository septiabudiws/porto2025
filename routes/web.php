<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.dashboard');
});

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
