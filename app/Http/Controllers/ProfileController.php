<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function about()
    {
        return view('admin.profile.about.about');
    }

    public function deskirpsiedit(){
        return view('admin.profile.about.deskripsi-edit');
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
