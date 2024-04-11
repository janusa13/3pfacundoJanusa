<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Student;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student',[StudentController::class,'index']);

Route::get('/student/form',[StudentController::class,'form']);

Route::post('/student/form', [StudentController::class, 'store'])->name('student.store');

Route::get('/student/delete',[StudentController::class, 'viewDelete']);

Route::delete('/student/delete',[StudentController::class,'delete'])->name('student.delete');;
