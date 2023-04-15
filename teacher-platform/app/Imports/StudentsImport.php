<?php

namespace App\Imports;

use App\Models\Student;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentsImport implements ToModel, WithHeadingRow
{
    public function  __construct(public $classroom_id)
    {
        $this->classroom_id = $classroom_id;
    }

    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // dd($this->classroom_id);
        return new Student([
            'massar_code' => $row['massar_code'],
            'first_name' => $row['first_name'],
            'last_name' => $row['last_name'],
            'login' => $row['login'],
            'password' => Hash::make($row['password']),
            'classroom_id' => $this->classroom_id,
        ]);
    }
}
