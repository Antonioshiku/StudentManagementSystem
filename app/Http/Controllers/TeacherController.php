<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Faker\Guesser\Name;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
             return view('dashboard');
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

        dd($request->all());

        $image = $request->file('img');
    $imageName = time().'.'.$image->extension();
    $image->move(public_path('img'), $imageName);


        Teacher::create($request->all());

        return view('dashboard');
    }
}