<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::get('/dashboard', [TeacherController::class, 'index'])->name('teacher.dashboard');
Route::get('/students', [TeacherController::class, 'students'])->name('teacher.students');
Route::get('/classes', [TeacherController::class, 'classes'])->name('teacher.classes');
Route::get('/lessons', [TeacherController::class, 'lessons']);
Route::post('/addClass', [TeacherController::class, 'addClass']);
Route::post('/updateClass', [TeacherController::class, 'updateClass']);