<?php

namespace App\Http\Controllers;

use App\Models\Kategoriprojek;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function works()
    {
        return view('admin.kategori.works.kategori');
    }

    public function blog()
    {
        return view('admin.kategori.blog.kategori');
    }
}
