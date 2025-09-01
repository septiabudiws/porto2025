<?php

namespace App\Http\Controllers;

use App\Models\Ability;
use App\Models\About;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function about()
    {
        $data = [
            'about' => About::all(),
            'ability' => Ability::all(),
        ];
        return view('admin.profile.about.about', $data);
    }

    public function aboutEdit($id){
        $about = About::where('id', $id)->first();
        return view('admin.profile.about.deskripsi-edit', compact('about'));
    }

    public function aboutUpdate(Request $request, $id)
    {
        $request->validate([
            'about' => 'required|string',
        ],
        [
            'about.required' => 'Deskripsi tidak boleh kosong.',
            'about.string' => 'Deskripsi harus berupa teks.',
        ]);

        About::where('id', $id)->update([
            'deskripsi' => $request->about,
        ]);

        return redirect()->route('about')->with('success', 'Deskripsi updated successfully.');
    }

    public function abilityStore(Request $request)
    {
        $request->validate([
            'ability' => 'required',
            'deskripsi' => 'required',
        ],
        [
            'ability.required' => 'Nama ability tidak boleh kosong.',
            'deskripsi.required' => 'Deskripsi ability tidak boleh kosong.',
        ]);

        Ability::create([
            'nama' => $request->ability,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('about')->with('success', 'Ability updated successfully.');
    }

    public function abilityUpdate(Request $request, $id)
    {
        $request->validate([
            'ability' => 'required|unique:abilities,nama',
            'deskripsi' => 'required',
        ],
        [
            'ability.required' => 'Nama ability tidak boleh kosong.',
            'ability.unique' => 'Nama ability sudah ada.',
            'deskripsi.required' => 'Deskripsi ability tidak boleh kosong.'
        ]);

        Ability::where('id', $id)->update([
            'nama' => $request->ability,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('about')->with('success', 'Ability updated successfully.');
    }

    public function abilityDestroy($id)
    {
        Ability::where('id', $id)->delete();
        return response()->json(['message' => 'Ability deleted successfully.']);
    }

    public function education(){
        return view('admin.profile.resume.education.education');
    }

    public function experience(){
        return view('admin.profile.resume.experience.experience');
    }

    public function knowledge(){
        return view('admin.profile.resume.knowledge.knowledge');
    }

    public function skill(){
        return view('admin.profile.resume.skill.skill');
    }
}
