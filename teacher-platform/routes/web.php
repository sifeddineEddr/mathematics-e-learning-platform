<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect('/dashboard');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [TeacherController::class, 'index'])->name('teacher.dashboard');
    Route::get('/students', [TeacherController::class, 'students'])->name('teacher.students');
    Route::get('/classes', [TeacherController::class, 'classes'])->name('teacher.classes');
    Route::get('/lessons', [TeacherController::class, 'lessons']);
    Route::post('/addClass', [TeacherController::class, 'addClass']);
    Route::post('/updateClass', [TeacherController::class, 'updateClass']);
});
