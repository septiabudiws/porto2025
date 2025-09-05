<?php

namespace App\Http\Controllers;

use App\Models\Ability;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'about' => About::first(),
            'ability' => Ability::all(),
        ];

        // daftar warna sesuai urutan template
        $colors = ['bg-prink', 'bg-catkrill', 'bg-catkrill', 'bg-prink bg-blue'];
        return view('landing.dashboard', $data + compact('colors'));
    }
}
