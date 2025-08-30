<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateBioRequest;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BiodataController extends Controller
{
    public function index()
    {
        $bio = Profile::all();
        return view('admin.biodata.biodata', compact('bio'));
    }

    public function update(UpdateBioRequest $request, $id)
    {
        $data = [
            'nama_panjang' => $request->nama,
            'pekerjaan' => $request->profesi,
            'no_hp' => $request->hp,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'tgl_lahir' => $request->lahir,
            'link_fb' => $request->fb,
            'link_ig' => $request->ig,
            'link_yt' => $request->yt,
        ];

        Profile::where('id', $id)->update($data);

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function updateFoto(Request $request, $id)
{
    $request->validate([
        'profile' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $biodata = Profile::findOrFail($id);

    // hapus foto lama kalau ada
    if ($biodata->foto && file_exists(public_path('uploads/foto-profil/' . $biodata->foto))) {
        unlink(public_path('uploads/foto-profil/' . $biodata->foto));
    }

    // simpan foto baru
    $file = $request->file('profile');
    $kode = Str::random(5);
    $namaFile = $kode . '.' . $file->getClientOriginalExtension();
    $file->move(public_path('uploads/foto-profil'), $namaFile);

    $biodata->update([
        'foto' => $namaFile,
    ]);

    return redirect()->back()->with('success', 'Foto profil berhasil diperbarui.');
}

}
