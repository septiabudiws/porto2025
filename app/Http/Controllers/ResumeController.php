<?php

namespace App\Http\Controllers;

use App\Models\Edukasi;
use App\Models\Experience;
use App\Models\Knowledge;
use App\Models\Skill;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index(){
        $data = [
            'edu' => Edukasi::all(),
            'expe' => Experience::all(),
            'skill' => Skill::all(),
            'knowledge' => Knowledge::all(),
            'colors' => ['bg-prink', 'bg-catkrill'],
            'barColors' => ['progress-bg-1', 'progress-bg-2', 'progress-bg-3', 'progress-bg-4']
        ];

        return view('landing.resume.resume', $data);
    }
}
