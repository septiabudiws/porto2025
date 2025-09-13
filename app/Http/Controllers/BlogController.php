<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogStoreRequest;
use App\Models\Blog;
use App\Models\Kategoriblog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $data = [
            'blog' => Blog::with('kategoriblog')->latest()->get(),
        ];
        return view('admin.blog.blog', $data);
    }

    public function create()
    {
        $data = [
            'kategori' => Kategoriblog::all(),
        ];
        return view('admin.blog.blog-create', $data);
    }

    public function store(BlogStoreRequest $request)
    {
        if ($request->hasFile('gambar')) {
            // nama file unik
            $kode = Str::random(10);
            $ext = $request->gambar->getClientOriginalExtension();
            $imageName = $kode . '.' . $ext;

            $request->file('gambar')->storeAs(
                'uploads/foto/blog',
                $imageName,
                'public',
            );
        }

        Blog::create([
            'token' => Str::random(8),
            'status' => 'active',
            'tgl' => now(),
            'judul' => $request->judul,
            'kategoriblog_id' => $request->kategori,
            'deskripsi' => $request->konten,
            'gambar' => $imageName,
        ]);

        return redirect()->route('blog')->with('success', 'Blog post created successfully.');
    }
}
