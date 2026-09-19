<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'student_name',
        'date_of_birth',
        'gender',
        'email',
        'phone',
        'address',
        'course',
        'department',
    ];
}