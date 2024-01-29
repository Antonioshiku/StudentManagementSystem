<?php

use App\Http\Controllers\ClassController;
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
     Route::get('/edit/{id}',[TeacherController::class,'edit'])->name('teacher-edit');
     Route::put('update/{id}',[TeacherController::class,'update'])->name('teacher-update');
     Route::delete('delete/{id}',[TeacherController::class,'delete'])->name('teacher-delete');
});

Route::prefix('/subject')->middleware('auth')->group(function () {
    Route::get('/' , [SubjectController::class,'index'])->name('subject-View');
    Route::get('/create',[SubjectController::class,'create'])->name('subject-create');
    Route::post('/store',[SubjectController::class,'store'])->name('subject-store');
    Route::get('/edit/{id}',[SubjectController::class,'edit'])->name('subject-edit');
    Route::put('/update/{id}',[SubjectController::class,'update'])->name('subject-update');
    Route::delete('/delete/{id}',[SubjectController::class,'destroy'])->name('subject-destroy');

});

Route::prefix('/classroom')->middleware('auth')->group(function ()
{
        Route::get('/' , [ClassController::class,'index'])->name('class-view');
        Route::get('/create',[ClassController::class,'create'])->name('class-create');
        Route::post('/store',[ClassController::class,'store'])->name('class-store');
        Route::get('/edit/{id}',[ClassController::class,'edit'])->name('class-edit');
        Route::put('/update/{id}',[ClassController::class,'update'])->name('class-update');
});

Auth::routes();