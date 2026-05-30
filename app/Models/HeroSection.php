<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    protected $fillable = [
        'heading',
        'subheading',
        'button_text',
        'button_url',
        'image',
        'is_active',
    ];
}
