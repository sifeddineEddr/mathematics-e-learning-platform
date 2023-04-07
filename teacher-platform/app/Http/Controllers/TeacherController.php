<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('teacher.students');
    }

    public function classes()
    {
        $years = ClassRoom::select('classroom_name')->where('teacher_id', 1)->get();
        // $years = DB::table('class_rooms')->select('classroom_name', 'classroom_year')
        // ->where('teacher_id', 1)
        // ->get();
    
        // $years = ['الأول ابتدائي', 'الثاني ابتدائي', 'الثالث ابتدائي', 'الرابع ابتدائي', 'الخامس ابتدائي', 'السادس ابتدائي'];

        $years = ['الأول ابتدائي', 'الثاني ابتدائي', 'الثالث ابتدائي', 'الرابع ابتدائي', 'الخامس ابتدائي', 'السادس ابتدائي'];
        $classes = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $classroomNames = [];
        foreach ($years as $year) {
            foreach ($classes as $class) {
                array_push($classroomNames, "$year - $class");
            }
        }


        return view('teacher.classes', [
            'pagination' => $this->classroomsData()->paginate(4),
            'data' => $this->getClassesInformation(),
            'years' => $classroomNames
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
