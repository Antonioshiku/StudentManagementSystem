<?php

namespace App\Http\Controllers;

use App\Models\classroom;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher=Teacher::all();
        $subject=Subject::all();
        $teacherCount=Teacher::Count();
        $subjectCount=Subject::Count();
        $classCount=classroom::Count();
        return view("dashboard",compact('teacher','teacherCount','subjectCount','subject','classCount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teacher=Teacher::all();
      return view('dashboard',compact('teacher'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'SubName' => 'required',
            'SubCode' => 'required|max:4',
            'SubDescription' => 'required',
        ]);

        // $teacher = Teacher::all();

        // foreach($teacher as $teachers)
        // {
        //      if($teachers->id == $request->AssignTeacher)
        //      {
        //         Teacher::create([

        //              'SubCode' => $request->SubCode

        //         ]);

        //      }
        // }

        Subject::create([
                  'SubName' => $request->SubName,
                  'SubCode' => $request->SubCode,
                  'SubDescription' => $request->SubDescription,
                  'teacher_id' => $request->teacher_id,
         ]);

        return $this->index();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher=Teacher::all();
        $subject=Subject::find($id);
        return view('Subject.SubjectUpdate' ,compact('teacher','subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
           $subject=Subject::findorFail($id);

           $subject->update([
            'SubName' => $request->SubName,
            'SubCode' => $request->SubCode,
            'SubDescription' => $request->SubDescription,
            'teacher_id' => $request->teacher_id ?? ' ',
          ]);

       return  $this->index();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $subject=Subject::find($id);

          $subject->delete();

          return $this->index();
    }
}