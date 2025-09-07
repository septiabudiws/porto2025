<?php

namespace App\Http\Controllers;

use App\Http\Requests\KateBlogRequestUpdate;
use App\Http\Requests\KateBlogRequest;
use App\Http\Requests\KateProRequestStore;
use App\Http\Requests\KateProRequestUpdate;
use App\Models\Kategoriblog;
use App\Models\Kategoriprojek;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function works()
    {
        $kategori = Kategoriprojek::withCount('projeks')->get();
        return view('admin.kategori.works.kategori', compact('kategori'));
    }

    public function kateProStore(KateProRequestStore $request)
    {

        Kategoriprojek::create([
            'nama' => $request->kategori,
        ]);

        return redirect()->back()->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function kateProUpdate(KateProRequestUpdate $request, $id)
    {
        Kategoriprojek::where('id', $id)->update([
            'nama' => $request->kategori,
        ]);

        return redirect()->back()->with('success', 'Kategori berhasil diupdate.');
    }

    public function kateProDestroy($id)
    {
        Kategoriprojek::where('id', $id)->delete();

        return response()->json(['success' => 'Kategori berhasil dihapus.']);
    }

    public function blog()
    {
        $kategori = Kategoriblog::withCount('blogs')->get();
        return view('admin.kategori.blog.kategori', compact('kategori'));
    }

    public function kateBlogStore(KateBlogRequest $request)
    {

        Kategoriblog::create([
            'nama' => $request->kategori,
        ]);

        return redirect()->back()->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function kateBlogUpdate(KateBlogRequestUpdate $request, $id)
    {
        Kategoriblog::where('id', $id)->update([
            'nama' => $request->kategori,
        ]);

        return redirect()->back()->with('success', 'Kategori berhasil diupdate.');
    }

    public function kateBlogDestroy($id)
    {
        Kategoriblog::where('id', $id)->delete();

        return response()->json(['success' => 'Kategori berhasil dihapus.']);
    }
}
