<?php

namespace App\Models;

use App\Models\ClassRoom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    public function classroom()
    {
        return $this->belongsTo(ClassRoom::class);
    }
}
