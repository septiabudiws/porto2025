<?php

namespace App\Http\Controllers;

use App\Models\Kategoriblog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin.blog.blog');
    }

    public function create()
    {
        $data = [
            'kategori' => Kategoriblog::all()
        ];
        return view('admin.blog.blog-create', $data);
    }
}
