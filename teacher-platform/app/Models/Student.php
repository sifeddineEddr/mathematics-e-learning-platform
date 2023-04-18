<?php

namespace App\Models;

use App\Models\ClassRoom;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Laravel\Passport\HasApiTokens;

class Student extends Model
{
    use HasFactory, HasApiTokens;

    protected $fillable = [
        'massar_code', 'first_name',
        'last_name',
        'password',
        'classroom_id'
    ];
    
    public function classroom()
    {
        return $this->belongsTo(ClassRoom::class);
    }
}
