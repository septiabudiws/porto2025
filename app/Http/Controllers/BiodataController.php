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
            ['profile' => 'required|image|mimes:jpg,jpeg,png|max:2048'],
            [
                'profile.required' => 'Foto profil wajib diunggah.',
                'profile.image' => 'File yang diunggah harus berupa gambar.',
                'profile.mimes' => 'Format foto profil harus berupa jpg, jpeg, atau png.',
                'profile.max' => 'Ukuran foto profil maksimal 2MB.',
            ],
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

    public function cvUpload(Request $request, $id)
    {
        $request->validate([
            ['nama_cv' => 'required|mimes:pdf,doc,docx|max:5120'],
            [
                'nama_cv.required' => 'File CV wajib diunggah.',
                'nama_cv.mimes' => 'Format file CV harus berupa pdf, doc, atau docx.',
                'nama_cv.max' => 'Ukuran file CV maksimal 5MB.',
            ],
        ]);

        // simpan CV baru
        $file = $request->file('nama_cv');
        $kode = 'cv_moh_septiabudi_w';
        $namaFile = $kode . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads/cv'), $namaFile);

        Profile::where('id', $id)->update([
            'link_x' => $namaFile,
        ]);
        
        return redirect()->back()->with('success', 'CV berhasil diunggah.');
    }
}
