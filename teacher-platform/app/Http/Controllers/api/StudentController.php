<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function login(Request $request)
    {
        // echo 'logged in';
        $authData = $request->json()->all();
        // dd($authData['password']);

        $student = Student::where('massar_code', $authData['massar_code'])->first();

        // dd($student->password);
        if (!$student || !Hash::check($authData['password'], $student->password)) {
            // Return an error response if the email and password do not match a record on the users table
            return response()->json(['message' => 'Invalid email or password'], 401);
        } else {
            // Do something with the user record...
            $token = $student->createToken('MyApp')->accessToken;

            return response()->json(['message' => 'Data processed successfully', 'token' => $token], 200);
            // return response()->json(['message' => 'Data processed successfully'], 200);
        }
    }

    public function logout()
    {
        echo 'logged out';
    }
}
