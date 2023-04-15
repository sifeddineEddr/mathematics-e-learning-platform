<?php

namespace App\Http\Controllers;

use App\Imports\StudentsImport;
use Carbon\Carbon;
use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class TeacherController extends Controller
{
    public function getClassRoomsNames()
    {
        return ClassRoom::select('classroom_name')->where('teacher_id', 1)->get();
    }

    public function getClassRoomsNamesWithId()
    {
        $classrooms = [];
        $data = $this->classroomsData()->get();

        foreach ($data as $value) {
            $classrooms[$value['id']] = $value['classroom_name'];
        }
        return $classrooms;
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

        return view('teacher.students', [
            'classrooms_data' => $this->getClassRoomsNamesWithId()
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

        $updateSelectOptions = $this->getClassRoomsNamesWithId();
        $addSelectOptions = [];

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
        // dd($request);
        ClassRoom::create([
            'classroom_name' => $request->classroom_name,
            'teacher_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        $classRoomId = ClassRoom::where('classroom_name', $request->classroom_name)->get('id');
        // $request->merge(['classroom_id' => 321]);
        // $realRequest= request();
        // $realRequest->merge(['classroom_id' => 321]);
        // dd($classRoomId);
        $this->ImportStudentData($request, $classRoomId);

        return redirect()->route('teacher.classes');
    }

    public function updateClass(Request $request)
    {
        $oldStudents = Student::where('classroom_id',$request->classroom_id)->get();
        foreach ($oldStudents as $value) {
            $value->delete();
        }
        
        $this->ImportStudentData($request);

        return redirect()->route('teacher.classes');
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

    public function ImportStudentData($data, $id=null) {
        $file = $data->file('excel_data');
        // dd($id);
        if ($id == null) {
            $id = $data->classroom_id;
        }
        dd($id);
        Excel::import(new StudentsImport($id->get('id')), $file);
    }

    public function getStudentsData()
    {
    }
}
