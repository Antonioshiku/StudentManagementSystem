<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classroom extends Model
{
    use HasFactory;



    protected $fillable = [
        'class_name',
        'student',
     'subject_id',
     'teacher_id',
    ];

    protected $casts = [
        'subject_id' => 'array', // Cast the array column to an array
    ];

 public function Teacher()
 {
     return $this->belongsTo(Teacher::class);
 }

 public function Subject()
 {
     return $this->hasMany(Subject::class);
 }

}