<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function classroomsData()
    {
        $data = ClassRoom::where('teacher_id', 1);
        return $data;
    }

    public function index()
    {
        $classroomsData = $this->classroomsData();
        $studentsCount = 0;
        $classroomsIds = $classroomsData->get("id");
        foreach ($classroomsIds as $classroom) {
            $counter = Student::where('classroom_id', $classroom->id)->count();
            $studentsCount = $studentsCount + $counter;
        }
        return view('teacher.index', [
            "data" => [
                'countClassrooms' => 'عدد الأقسام : ' . $classroomsData->count(),
                'countStudents' => 'عدد التلاميذ : ' . $studentsCount
            ]
        ]);
    }

    public function students()
    {
        return view('teacher.students');
    }

    public function classes()
    {
        return view('teacher.classes', [
            'pagination' => $this->classroomsData()->paginate(4),
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
        $classrooms = $this->classroomsData()->paginate(4);
        foreach ($classrooms as $value) {
            $nbrStudents = Student::where('classroom_id', $value->id)->count();

            $params[count($params)] = [
                'id' => $value->id,
                'classroom_name' => $value->classroom_name,
                'classroom_year' => $value->classroom_year,
                'countStudents' => $nbrStudents,
            ];
            $params = collect($params);
            // dd(gettype($params));
        }
        return $params;
    }

    public function getStudentsData()
    {
    }
}
