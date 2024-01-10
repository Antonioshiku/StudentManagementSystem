<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;


    protected $fillable = [
        'Name',
        'Email',
        'Password',
        'Phone',
        'Gender',
        "DOB",
        "CurrentAddress",
        'PermentAddress',
        'Photo'
    ];
}