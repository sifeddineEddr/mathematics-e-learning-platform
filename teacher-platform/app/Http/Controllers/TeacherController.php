<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ClassRoom;
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
        return view('teacher.classes', [
            'pagination' => $this->classroomsData(),
            'data' => $this->getClassesInformation()
        ]);
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

    public function getClassesInformation()
    {
        $params = [];
        $classrooms = $this->classroomsData();
        foreach ($classrooms as $value) {
            $nbrStudents = Student::where('classroom_id', $value->id)->count();

            $params[count($params)] = [
                'id' => $value->id,
                'classroom_name' => $value->classroom_name,
                'classroom_year' => $value->classroom_year,
                'nbrStudents' => $nbrStudents,
            ];
            $params = collect($params);
            // dd(gettype($params));
        }
        return $params;
    }

    public function classroomsData() {
        $data = ClassRoom::where('teacher_id', 1)->paginate(4);
        return $data;
    }

    public function getStudentsData()
    {
    }
}
