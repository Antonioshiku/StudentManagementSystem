<?php

namespace App\Http\Controllers;

use App\Models\classroom;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classCount=classroom::Count();
        $teacherCount=Teacher::Count();
        $subjectCount=Subject::Count();
        $classRoom=classroom::all();
        return view("dashboard",compact('teacherCount','subjectCount','classRoom'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subject=Subject::all();
        $teacherCount=Teacher::Count();
        $subjectCount=Subject::Count();
        $teacher=Teacher::all();
        return view("dashboard",compact('subject','teacherCount','subjectCount','teacher'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'class_name' => 'required',
            'student' => 'required|integer',
            'subject_id' => 'required|max:8|',
            'teacher_id' => 'required',
        ]);

        $subject_id=$request->input('subject_id', []);



       classroom::create([
        'class_name' => $request->class_name,
        'student' => $request->student,
        'subject_id' => $subject_id,
        'teacher_id' => $request->teacher_id,
       ]);

       return $this->index();
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $subject=Subject::all();
        $teacher=Teacher::all();
    $classRoom=classroom::find($id);
         return view('class.classUpdate',compact('classRoom','teacher','subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'class_name' => 'required',
            'student' => 'required|integer',
            'subject_id' => 'required|max:8|',
            'teacher_id' => 'required',
        ]);

        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}