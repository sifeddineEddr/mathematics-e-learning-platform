<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeacherController extends Controller
{
    public function getClassRoomsNames() {
        return ClassRoom::select('classroom_name')->where('teacher_id', 1)->get();
    }

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

        $countYears = ClassRoom::select('classroom_name')->where('teacher_id', 1)->count();
        $countLesons = 0;

        foreach ($classroomsIds as $classroom) {
            $counter = Student::where('classroom_id', $classroom->id)->count();
            $studentsCount = $studentsCount + $counter;
        }

        return view('teacher.index', [
            "humanResources" => [
                'countClassrooms' => 'عدد الأقسام : ' . $classroomsData->count(),
                'countStudents' => 'عدد التلاميذ : ' . $studentsCount,
            ],
            "digitalResources" => [
                'countYears' => 'المستويات : '  . $countYears,
                'countLessons' => 'الدروس : '  . $countLesons,
            ],
        ]);
    }

    public function students()
    {
        $classrooms = [];
        $data = $this->getClassRoomsNames();
        
        foreach ($data as $value) {
            array_push($classrooms, $value->classroom_name);
        }

        return view('teacher.students', [
            'classrooms_names' => $classrooms
        ]);
    }

    public function classes()
    {
        return view('teacher.classes', [
            'pagination' => $this->classroomsData()->paginate(4),
            'data' => $this->getClassesInformation(),
            'years' => $this->getClassRoomsNames()
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
