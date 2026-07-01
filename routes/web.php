<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\TrainingCentersController;
use App\Http\Controllers\AreaController;


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
Route::get('/computers/create',[ComputerController::class,'create']);
Route::post('/computers/store',[ComputerController::class,'store'])->name('computers.store');

Route::get('/trainingcenters/create',[TrainingCentersController::class,'create']);
Route::post('/trainingcenters/store',[TrainingCentersController::class,'store'])->name('trainingcenters.store');


Route::get('/areas/create',[AreaController::class,'create']);
Route::post('/areas/store',[AreaController::class,'store'])->name('areas.store');

