<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\Passport;


class StudentController extends Controller
{
    public function login(Request $request)
    {
        // $credentials = $request->only('massar_code', 'password');

        // if (Auth::guard('api')->attempt($credentials)) {
        //     $accessToken = auth()->user()->createToken('authToken')->accessToken;
        //     return response()->json(['user' => auth()->user(), 'access_token' => $accessToken]);
        // } else {
        //     return response()->json(['error' => 'Unauthorized'], 401);
        // }        
        dd($request);
    }

    public function logout(Request $request)
    {
        $request->user('api')->token()->revoke();
        return response()->json(['message' => 'Successfully logged out']);
    }

    public function refresh(Request $request)
    {
        $newAccessToken = $request->user('api')->createToken('authToken')->accessToken;
        return response()->json(['user' => $request->user('api'), 'access_token' => $newAccessToken]);
    }
}
