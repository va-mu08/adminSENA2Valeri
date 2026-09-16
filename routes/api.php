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


Route::get('/areas', [AreaController::class, 'index'])
    ->name('api.v1.areas.index');


Route::get('/computers', [ComputerController::class, 'index'])
    ->name('api.v1.computers.index');

Route::get('/trainingCenters', [TrainingCentersController::class, 'index'])
    ->name('api.v1.trainingCenters.index');


Route::get('/teachers', [TeacherController::class, 'index'])
    ->name('api.v1.teachers.index');

Route::get('/courses', [CourseController::class, 'index'])
    ->name('api.v1.courses.index');

Route::get('/apprentices', [ApprenticesController::class, 'index'])
    ->name('api.v1.apprentices.index');