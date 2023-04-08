<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function getClassRoomsNames()
    {
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
        $years = ['الأول ابتدائي', 'الثاني ابتدائي', 'الثالث ابتدائي', 'الرابع ابتدائي', 'الخامس ابتدائي', 'السادس ابتدائي'];
        $classes = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $allClassNames = [];
        foreach ($years as $year) {
            foreach ($classes as $class) {
                array_push($allClassNames, "$year - $class");
            }
        }

        $classrooms = $this->getClassRoomsNames();
        $updateSelectOptions = [];
        $addSelectOptions = [];

        foreach ($classrooms as $value) {
            array_push($updateSelectOptions, $value->classroom_name);
        }

        foreach ($allClassNames as $value) {
            if (!in_array($value, $updateSelectOptions)) {
                array_push($addSelectOptions, $value);
            }
        }

        return view('teacher.classes', [
            'pagination' => $this->classroomsData()->paginate(4),
            'data' => $this->getClassesInformation(),
            'years' => $this->getClassRoomsNames(),
            'addSelectOptions' => $addSelectOptions,
            'updateSelectOptions' => $updateSelectOptions,
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
