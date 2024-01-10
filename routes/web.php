<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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



Route::prefix('')->middleware('auth')->group(function () {
    Route::get('/' , [HomeController::class, 'index'])->name('home');

});
Route::prefix('/teacher')->middleware('auth')->group(function () {
     Route::get('/' , [TeacherController::class,'index'])->name('teacher-View');
     Route::get('/create',[TeacherController::class,'create'])->name('teacher-create');
     Route::post('/store', [TeacherController::class,'store'])->name('teacher-store');
});

Route::prefix('/subject')->middleware('auth')->group(function () {
    Route::get('/' , [SubjectController::class,'index'])->name('subject-View');
    Route::get('/create',[SubjectController::class,'create'])->name('subject-create');
});

Auth::routes();