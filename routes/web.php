<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});
Route::group(['middleware' => ['auth']], function () {
    Route::get('/user/create',[UserController::class,'create'])->name('user.create');
    Route::get('/user',[UserController::class,'index'])->name('user.index');
    Route::post('/user/store',[UserController::class,'store'])->name('user.store');
    Route::put('/user/update/{id}',[UserController::class,'update'])->name('user.update');
    Route::get('/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
    Route::get('/user/destroy/{id}',[UserController::class,'destroy'])->name('user.destroy');
    Route::resource('/setting', SettingController::class);
    Route::resource('/department', DepartmentController::class);
    Route::get('/department/destroy/{id}',[DepartmentController::class,'destroy'])->name('department.destroy');
    Route::resource('/course', CourseController::class);
    Route::get('/course/destroy/{id}',[CourseController::class,'destroy'])->name('course.destroy');
    Route::resource('/employee', EmployeeController::class);
    Route::get('/employee/destroy/{id}',[EmployeeController::class,'destroy'])->name('employee.destroy');
    Route::resource('/balance', BalanceController::class);
    Route::get('/balance/destroy/{id}',[BalanceController::class,'destroy'])->name('balance.destroy');
    Route::resource('/attendance', AttendanceController::class);
    Route::get('/attendance/destroy/{id}',[AttendanceController::class,'destroy'])->name('attendance.destroy');
    Route::resource('/training', TrainingController::class);
    Route::get('/training/destroy/{id}',[TrainingController::class,'destroy'])->name('training.destroy');
});
Route::get('/', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');
// Auth::routes('register'=>false);
require __DIR__.'/auth.php';