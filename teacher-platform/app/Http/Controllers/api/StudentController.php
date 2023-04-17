<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function login() {
        echo 'logged in';
    }

    public function logout () {
        echo 'logged out';
    }
}
