<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;


    protected $fillable = [
        'SubName',
        'SubCode',
     'SubDescription',
     'teacher_id',
    ];

     public function Teacher()
     {
         return $this->belongsTo(Teacher::class);
     }



}