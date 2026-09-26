<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCentersController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ApprenticesController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('areas', [AreaController::class, 'index'])->name('api.v1.areas.index');
Route::post('areas', [AreaController::class,'store'])->name('api.v1.areas.store');
Route::get('areas/{area}', [AreaController::class,'show'])->name('api.v1.areas.show');
Route::put('areas/{area}',[AreaController::class,'update'])->name('api.v1.area.update');
Route::delete('areas/{area}',[AreaController::class,'destroy'])->name('api.v1.area.destroy');


Route::get('/computers', [ComputerController::class, 'index'])->name('api.v1.computers.index');
Route::post('computers', [ComputerController::class,'store'])->name('api.v1.computers.store');
Route::get('computers/{computer}', [ComputerController::class,'show'])->name('api.v1.computers.show');
Route::put('computers/{computer}',[ComputerController::class,'update'])->name('api.v1.computer.update');
Route::delete('computers/{computer}',[ComputerController::class,'destroy'])->name('api.v1.computer.destroy');

Route::get('/trainingCenters', [TrainingCentersController::class, 'index'])->name('api.v1.trainingCenters.index');
Route::post('trainingCenters', [TrainingCentersController::class,'store'])->name('api.v1.trainingCenters.store');
Route::get('trainingCenters/{trainingCenter}', [TrainingCentersController::class,'show'])->name('api.v1.trainingCenters.show');
Route::put('trainingCenters/{trainingCenter}',[TrainingCentersController::class,'update'])->name('api.v1.trainingCenter.update');
Route::delete('trainingCenters/{trainingCenter}',[TrainingCentersController::class,'destroy'])->name('api.v1.trainingCenter.destroy');

 
Route::get('/teachers', [TeacherController::class, 'index'])->name('api.v1.teachers.index');
Route::post('teachers', [TeacherController::class,'store'])->name('api.v1.teachers.store');
Route::get('teachers/{teacher}', [TeacherController::class,'show'])->name('api.v1.teachers.show');
Route::put('teachers/{teacher}',[TeacherController::class,'update'])->name('api.v1.teacher.update');
Route::delete('teachers/{teacher}',[TTeacherController::class,'destroy'])->name('api.v1.teacher.destroy');

Route::get('/courses', [CourseController::class, 'index'])->name('api.v1.courses.index');
Route::post('courses', [CourseController::class,'store'])->name('api.v1.courses.store');
Route::get('courses/{course}', [CourseController::class,'show'])->name('api.v1.courses.show');
Route::put('courses/{course}',[CourseController::class,'update'])->name('api.v1.course.update');
Route::delete('courses/{course}',[CourseController::class,'destroy'])->name('api.v1.course.destroy');

Route::get('/apprentices', [ApprenticesController::class, 'index'])->name('api.v1.apprentices.index');
Route::post('apprentices', [ApprenticesController::class,'store'])->name('api.v1.apprentices.store');
Route::get('apprentices/{apprentice}', [ApprenticesController::class,'show'])->name('api.v1.apprentices.show');
Route::put('apprentices/{apprentice}',[ApprenticesController::class,'update'])->name('api.v1.apprentice.update');
Route::delete('apprentices/{apprentice}',[ApprenticesController::class,'destroy'])->name('api.v1.apprentice.destroy');