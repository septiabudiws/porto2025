<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationStore;
use App\Http\Requests\EducationUpdate;
use App\Http\Requests\ExperienceStore;
use App\Http\Requests\ExperienceUpdate;
use App\Models\Ability;
use App\Models\About;
use App\Models\Edukasi;
use App\Models\Experience;
use App\Models\Knowledge;
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
        $edukasi = Edukasi::all();
        return view('admin.profile.resume.education.education', compact('edukasi'));
    }

    public function educationStore(EducationStore $request){

        Edukasi::create([
            'nama_pendidikan' => $request->sekolah,
            'jurusan' => $request->jurusan,
            'tenggat_waktu' => $request->tenggat,
        ]);

        return redirect()->route('education')->with('success', 'Education added successfully.');
    }

    public function educationUpdate(EducationUpdate $request, $id){

        Edukasi::where('id', $id)->update([
            'nama_pendidikan' => $request->sekolah,
            'jurusan' => $request->jurusan,
            'tenggat_waktu' => $request->tenggat,
        ]);

        return redirect()->route('education')->with('success', 'Education updated successfully.');
    }

    public function educationDestroy($id){
        Edukasi::where('id', $id)->delete();
        return response()->json(['message' => 'Education deleted successfully.']);
    }

    public function experience(){
        $experience = Experience::all();
        return view('admin.profile.resume.experience.experience', compact('experience'));
    }

    public function experienceStore(ExperienceStore $request){

        Experience::create([
            'nama_pengalaman' => $request->experience,
            'jabatan' => $request->jabatan,
            'tenggat_waktu' => $request->tenggat,
        ]);

        return redirect()->route('experience')->with('success', 'Experience added successfully.');
    }

    public function experienceUpdate(ExperienceUpdate $request, $id){

        Experience::where('id', $id)->update([
            'nama_pengalaman' => $request->experience,
            'jabatan' => $request->jabatan,
            'tenggat_waktu' => $request->tenggat,
        ]);

        return redirect()->route('experience')->with('success', 'Experience updated successfully.');
    }

    public function experienceDestroy($id){
        Experience::where('id', $id)->delete();
        return response()->json(['message' => 'Experience deleted successfully.']);
    }

    public function knowledge(){
        $knowledge = Knowledge::all();
        return view('admin.profile.resume.knowledge.knowledge', compact('knowledge'));
    }

    public function knowledgeStore(Request $request){

        $request->validate([
            'knowledge' => 'required|unique:knowledge,nama',
        ],
        [
            'knowledge.required' => 'Knowledge tidak boleh kosong.',
            'knowledge.unique' => 'Knowledge sudah ada.',
        ]);

        Knowledge::create([
            'nama' => $request->knowledge,
        ]);

        return redirect()->route('knowledge')->with('success', 'Knowledge added successfully.');
    }

    public function knowledgeUpdate(Request $request, $id){

        $request->validate([
            'knowledge' => 'required',
        ],
        [
            'knowledge.required' => 'Knowledge tidak boleh kosong.'
        ]);

        Knowledge::where('id', $id)->update([
            'nama' => $request->knowledge,
        ]);

        return redirect()->route('knowledge')->with('success', 'Knowledge updated successfully.');
    }

    public function knowledgeDestroy($id){
        Knowledge::where('id', $id)->delete();
        return response()->json(['message' => 'Knowledge deleted successfully.']);
    }

    public function skill(){
        return view('admin.profile.resume.skill.skill');
    }
}
