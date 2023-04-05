<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        return view('teacher.index');
    }

    public function students()
    {
        return view('teacher.students');
    }

    public function classes()
    {
        return view('teacher.classes');
    }

    public function lessons()
    {
        return view('teacher.lessons');
    }

    public function addClass(Request $request)
    {
    }

    public function updateClass(Request $request, $id)
    {
    }
    public function getStudentsData()
    {
    }
}
