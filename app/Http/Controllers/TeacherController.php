<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;
use PhpParser\Node\Expr\Cast\String_;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Arr;

class TeacherController extends Controller
{



    public function index()
    {
        $teacher=Teacher::all();
        $teacherCount=Teacher::Count();
        $subjectCount=Subject::Count();
        return view('dashboard',compact('teacher','teacherCount','subjectCount'));
    }
    public function create()
    {
          return view('dashboard');
    }
    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'Email' => 'required',
            'Password' => 'required|max:8|',
            'Phone' => 'required',
            'DOB' => 'required',
            'CurrentAddress' => 'required',
            'PermentAddress' => 'required',
            'Photo' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $image = $request->file('Photo');
    $imageName = time().'.'.$image->extension();
    $image->move(public_path('img/'), $imageName);




        Teacher::create([
            'Name' => $request->Name,
            'Email' => $request->Email,
            'Password' => $request->Password,
            'Phone' => $request->Phone ,
            'DOB' => $request->DOB,
            'Gender' => $request->Gender,
            'CurrentAddress' => $request->CurrentAddress,
            'PermentAddress' => $request->PermentAddress,
            'PhotoName' => $imageName,
            'PhotoPath' => $image
        ]);

        return $this->index();
    }

    public function edit(string $id)
    {
         $teacher=Teacher::find($id);
         return view('Teacher.TeacherUpdate',compact('teacher'));
    }

    public function update(Request $request,string $id)
    {

              $teacher= Teacher::findOrFail($id);
              $newImage="";
              $imageName=" ";
              if ($request->hasFile('Photo')) {
                $newImage = $request->file('Photo');
                $imageName = time().'.'.$newImage->extension();
                $newImage->move(public_path('img'), $imageName);

                // Remove the previous image if needed
                if ($request->Photo) {
                    Storage::delete('public/img/' . $imageName);
                }

                // Update the user's image information
                $imageName = $imageName;

            }else
            {
                 $newImage=$teacher->PhotoPath;
                 $imageName=$teacher->PhotoName;
            }



              $teacher->update([
                'Name' => $request->Name,
                'Email' => $request->Email,
                'Password' => $request->Password,
                'Phone' => $request->Phone ,
                'DOB' => $request->DOB,
                'Gender' => $request->Gender,
                'CurrentAddress' => $request->CurrentAddress,
                'PermentAddress' => $request->PermentAddress,
                'PhotoName' => $imageName,
                'PhotoPath' => $newImage
              ]);

           return  $this->index();
    }

    public function delete(string $id)
    {

        $teacher=Teacher::find($id);
        Storage::delete('public/images/' . $teacher->PhotoName);
       Subject::where('teacher_id', '=', $teacher->id)->update(array('teacher_id' => ' '));
        $teacher->delete();

            return $this->index();
    }
}