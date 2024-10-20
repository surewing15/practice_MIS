<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\GradeController;
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

// routes/web.php
// routes/web.php
Route::get('/student/info', [StudentController::class, 'infostud'])->name('students.infostud');
Route::post('/students/store', [StudentController::class, 'store'])->name('students.store');

Route::get('/student/records', [StudentController::class, 'index'])->name('students.academic');

Route::resource('courses', CourseController::class);
Route::resource('enrollments', EnrollmentController::class);
Route::resource('grades', GradeController::class);


Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::get('/students/{student}', [StudentController::class, 'show'])->name('students.show');
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{student}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('students.destroy');





// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/student/newstudent', function () {
//     return view('students.newstudent');
// });
// Route::get('/student/records', function () {
//     return view('students.academic');
// });


Route::get('/student/{id}', [StudentController::class, 'show'])->name('students.show');
Route::delete('/student/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
Route::get('/student/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/student/{id}', [StudentController::class, 'update'])->name('students.update');