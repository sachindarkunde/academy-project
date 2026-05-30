<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable = [
        'faculty_name',
        'faculty_image',
        'faculty_experience',
        'faculty_description',
        'is_active', 
    ];

}
