<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpcomingBatch extends Model
{
    use HasFactory;

    protected $fillable = [
        'batch_name',
        'batch_duration',
        'batch_launch_date',
        'batch_timing',
    ];
}
