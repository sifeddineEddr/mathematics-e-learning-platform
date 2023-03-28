<?php

namespace App\Models;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClassRoom extends Model
{
    use HasFactory;

    public function students() {
        return $this->hasMany(Student::class);
    }

    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }
}
