<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        // 'slug',
        'content',
        'image',
        'author',
        'published_at',
    ];

    protected $dates = ['published_at'];
}
