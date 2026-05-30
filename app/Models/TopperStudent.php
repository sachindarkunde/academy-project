<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopperStudent extends Model
{
    protected $fillable = [
        'name',
        'course_name',
        'photo',
        'testimonial',
        'is_active',
    ];
}
