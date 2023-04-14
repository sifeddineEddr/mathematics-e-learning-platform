<?php

namespace App\Models;

use App\Models\ClassRoom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends Model
{
    use HasFactory;

    public function classrooms() {
        return $this->hasMany(ClassRoom::class);
    }
}