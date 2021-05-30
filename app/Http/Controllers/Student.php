<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\StudentModel;

class Student extends Controller
{
    public function index()
    {
        return view('student.user-detail');
    }

    public function group()
    {
        return view('student.Groups');
    }

    public function favorite()
    {
        return view('student.Favorites');
    }
    public function statement()
    {
        return view('student.Statement');
    }
    public function setting()
    {
        return view('student.Setting');
    }


}
