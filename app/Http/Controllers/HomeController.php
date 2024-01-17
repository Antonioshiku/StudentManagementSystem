<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $teacher=Teacher::all();
        $teacherCount=Teacher::Count();
        $subjectCount=Subject::Count();
        return view("dashboard",compact('teacher','teacherCount','subjectCount'));
    }
}
