<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Teacher extends Controller
{
    public function index()
    {
        return view('teacher.detalis');
    }

    public function settings()
    {
        return view('teacher.setting');
    }

    public function courses()
    {
        return view('teacher.courses');
    }
}
